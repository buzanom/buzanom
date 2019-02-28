<!DOCTYPE html>
<html>

<head>
    <title>
        <?php echo $title; ?>
    </title>
    <link rel="stylesheet" href="{{ URL::asset('/') }}assets/tracker/examples/assets/demo.css">
</head>
<style>
    body,
    html {
        height: 100%;
        margin: 0;
    }

    .bgimg {
        background-image: url('{{ URL::asset("/") }}assets/user/web/images/focus.jpg');
        height: 100%;
        background-position: center;
        background-size: cover;
        position: relative;
        color: white;
        font-family: "Courier New", Courier, monospace;
        font-size: 25px;
    }

    .topleft {
        position: absolute;
        top: 0;
        left: 16px;
    }

    .topright {
        position: absolute;
        top: 5%;
        right: 3%;
        text-decoration: none;
        display: block;
        background: #1577b8;
        padding: 5px;
        border-radius: 10px;
        color: white;
    }

    .topleft p img {
        width: 50%;
    }

    .bottomleft {
        position: absolute;
        bottom: 0;
        left: 16px;
    }

    .middle {
        position: absolute;
        top: 33%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
    }

    hr {
        margin: auto;
        width: 40%;
    }

    #ms {
        bottom: 5%;
        position: fixed;
        right: 26%;
        display: block !important;
    }

    #fps {
        bottom: 5%;
        position: fixed;
        left: 26%;
        display: block !important;
    }

    .dg.ac {
        z-index: 100 !important;
        display: none !important;
    }

    canvas {
        margin-left: -40%;
        position: fixed;
    }

</style>

<body>

    <div class="bgimg">
        <div class="topleft">
            <p><img src="{{ URL::asset('/') }}assets/general/<?php echo $site_settings->logo; ?>" alt="Buzanom Logo"></p>
        </div>
        <a href="{{ URL::to('/logout') }}?timeleft=08:00:00" class="btn topright pull-right" id="logout">Logout</a>
        <div class="middle">
            <h1>Your In tracker, Don't Close Your Lid.</h1>
            <hr>
            <p id="countdown" style="font-size:30px"></p>
            <div class="demo-container">
                <video id="video" width="320" height="240" preload autoplay loop muted></video>
                <canvas id="canvas" width="320" height="240"></canvas>
            </div>
        </div>
        <div class="bottomleft">
            <!-- <p>Some text</p> -->
        </div>
    </div>
    <script src="{{ URL::asset('/') }}assets/admin/js/core/jquery.min.js"></script>
    <script src="{{ URL::asset('/') }}assets/tracker/build/tracking-min.js"></script>
    <script src="{{ URL::asset('/') }}assets/tracker/build/data/face-min.js"></script>
    <script src="{{ URL::asset('/') }}assets/tracker/examples/assets/dat.gui.min.js"></script>
    <script src="{{ URL::asset('/') }}assets/tracker/examples/assets/stats.min.js"></script>
    <script>
        var faceloop = 0;
        <?php 
if(isset($timeleft)){ 
  sscanf($timeleft->timeleft, "%d:%d:%d", $hours, $minutes, $seconds);
  $time_seconds = isset($hours) ? $hours * 3600 + $minutes * 60 + $seconds : $minutes * 60 + $seconds; ?>
        var upgradeTime = <?php echo $time_seconds; ?>;
        <?php }else{ ?>
        var upgradeTime = 28800;
        <?php } ?>
        var seconds = upgradeTime;

        function timer() {
            var days = Math.floor(seconds / 24 / 60 / 60);
            var hoursLeft = Math.floor((seconds) - (days * 86400));
            var hours = Math.floor(hoursLeft / 3600);
            var minutesLeft = Math.floor((hoursLeft) - (hours * 3600));
            var minutes = Math.floor(minutesLeft / 60);
            var remainingSeconds = seconds % 60;

            function pad(n) {
                return (n < 10 ? "0" + n : n);
            }
            document.getElementById('countdown').innerHTML = pad(days) + ":" + pad(hours) + ":" + pad(minutes) + ":" +
                pad(remainingSeconds);
            $("#logout").attr("href", "<?php echo URL::to('/logout'); ?>?timeleft=" + pad(hours) + ":" + pad(minutes) +
                ":" + pad(remainingSeconds) + "&faceloop=" + faceloop);
            if (seconds == 0) {
                clearInterval(countdownTimer);
                document.getElementById('countdown').innerHTML = "Completed";
            } else {
                seconds--;
            }
        }
        var countdownTimer = setInterval('timer()', 1000);
        window.onload = function () {
            var video = document.getElementById('video');
            var canvas = document.getElementById('canvas');
            var context = canvas.getContext('2d');
            var tracker = new tracking.ObjectTracker('face');
            tracker.setInitialScale(4);
            tracker.setStepSize(2);
            tracker.setEdgesDensity(0.1);
            tracking.track('#video', tracker, {
                camera: true
            });
            tracker.on('track', function (event) {
                context.clearRect(0, 0, canvas.width, canvas.height);
                event.data.forEach(function (rect) {
                    context.strokeStyle = '#a64ceb';
                    context.strokeRect(rect.x, rect.y, rect.width, rect.height);
                    context.font = '11px Helvetica';
                    context.fillStyle = "#fff";
                    context.fillText('x: ' + rect.x + 'px', rect.x + rect.width + 5, rect.y + 11);
                    context.fillText('y: ' + rect.y + 'px', rect.x + rect.width + 5, rect.y + 22);
                    faceloop++;
                });
            });
            var gui = new dat.GUI();
            gui.add(tracker, 'edgesDensity', 0.1, 0.5).step(0.01);
            gui.add(tracker, 'initialScale', 1.0, 10.0).step(0.1);
            gui.add(tracker, 'stepSize', 1, 5).step(0.1);
        };
        $(window).on("beforeunload", function () {
            var lefttime = $("#countdown").split(":");
            $.ajax({
                url: "{{ URL::to('/facetrack') }}",
                data: {
                    count: faceloop,
                    lefttime: lefttime[2] + ":" + lefttime[1] + ":" + lefttime[0],
                    _token: "<?php echo csrf_token(); ?>"
                },
                method: "POST",
            });
        });

    </script>
</body>

</html>
