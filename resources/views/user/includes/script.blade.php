<!-- jQuery -->
<script src="{{ URL::asset('/') }}assets/user/web/js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="{{ URL::asset('/') }}assets/user/web/js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="{{ URL::asset('/') }}assets/user/web/js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="{{ URL::asset('/') }}assets/user/web/js/jquery.waypoints.min.js"></script>
<!-- Flexslider -->
<script src="{{ URL::asset('/') }}assets/user/web/js/jquery.flexslider-min.js"></script>
<!-- Sticky Kit -->
<script src="{{ URL::asset('/') }}assets/user/web/js/sticky-kit.min.js"></script>
<!-- Owl carousel -->
<script src="{{ URL::asset('/') }}assets/user/web/js/owl.carousel.min.js"></script>
<!-- Counters -->
<script src="{{ URL::asset('/') }}assets/user/web/js/jquery.countTo.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCO_lhRVRl7Zw9e-uZZ2owl82YE3mJZgP0&callback=initMap"></script>
<!-- theme: AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA || live: AIzaSyAFSsjNHY1iYUM1yrhixPbZkNSON9OPZbE  -->
<!-- <script src="{{ URL::asset('/') }}assets/user/web/js/google_map.js"></script> -->
<!-- MAIN JS -->
<script src="{{ URL::asset('/') }}assets/user/web/js/main.js"></script>
<script>
    <?php if($title == "WELCOME"){ ?>

    function initMap() {
        var uluru = {
            lat: <?php echo $site_settings->lat; ?>,
            lng: <?php echo $site_settings->lang; ?>
        };
        var map = new google.maps.Map(
            document.getElementById('map'), {
                zoom: 15,
                center: uluru
            });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map
        });
    }
    $(document).on('click', '.searchbychar', function (event) {
        event.preventDefault();
        $("#colorlib-main-menu ul li").removeClass("colorlib-active");
        $(this).parent().addClass("colorlib-active");
        var target = "#" + this.getAttribute('data-target');
        $('html, body').animate({
            scrollTop: $(target).offset().top
        }, 2000);
    });

    function contactsubmit() {
        var name = $("input[name='name']").val();
        var email = $("input[name='email']").val();
        var subject = $("input[name='subject']").val();
        var message = $("textarea[name='message']").val();
        $.ajax({
            url: "http://www.buzanom.com/contactsubmit",
            data: {
                name: name,
                email: email,
                subject: subject,
                message: message,
                _token: "<?php echo csrf_token(); ?>"
            },
            method: "POST",
            success: function (response) {
                alert("Contacted Successfully");
                return false;
            },
            error: function () {
                alert("ERROR");
                return false;
            }
        });
        return false;
    }
    <?php } if($title == "CAREER"){ ?>

    function careersubmit() {
        var name = $("input[name='name']").val();
        var email = $("input[name='email']").val();
        var contact = $("input[name='contact']").val();
        var address = $("input[name='address']").val();
        var objective = $("input[name='objective']").val();
        var grade = $("input[name='grade']").val();
        var position = $("input[name='position']").val();
        var employeement = $("input[name='employeement']").val();
        var qualification = $("input[name='qualification']").val();
        $.ajax({
            url: "{{ URL::to('/careerpost') }}",
            data: {
                name: name,
                email: email,
                contact: contact,
                address: address,
                employeement: employeement,
                position: position,
                grade: grade,
                objective: objective,
                qualification: qualification,
                _token: "<?php echo csrf_token(); ?>"
            },
            method: "POST",
            success: function (response) {
                alert("Career Opportunity Submited");
                return false;
            },
            error: function () {
                alert("ERROR");
                return false;
            }
        });
        return false;
    }
    <?php } ?>

</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-135118742-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-135118742-1');
    //   gtag('set', {'user_id': 'UA-135118742-1'}); // Set the user ID using signed-in user_id.
    //   ga('set', 'userId', 'UA-135118742-1'); // Set the user ID using signed-in user_id.

</script>

</html>
