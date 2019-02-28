<html>

<head>
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/') }}assets/user/career/carees.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/umd/util.js "></script>
    <!------ Include the above in your HEAD tag ---------->
</head>

<body>
    <div class="container register">
        <div class="row">
            @if(Session::has('success'))
            <div class="alert alert-success col-md-12">
                {{ Session::get('success') }}
            </div>
            @endif
            @if(Session::has('fail'))
            <div class="alert alert-danger col-md-12">
                {{ Session::get('fail') }}
            </div>
            @endif
        </div>
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="{{ URL::asset('/') }}assets/general/<?php echo $site_settings->logo; ?>" alt="" />
                <h3 style="color:#3284bb">Buzanom</h3>
                <h3 style="color:#3284bb">Career</h3>
                <!-- <p>You are 30 seconds away from earning your own money!</p> -->
                <!-- <a href="{{ URL::to('/') }}"><input type="button" class="btnRegister" value="back"/></a> -->
            </div>
            <div class="col-md-9 register-right">
                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                            aria-controls="home" aria-selected="true">IT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                            aria-selected="false">Non-IT</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab" />
                    <form method="POST" action="{{  URL::to('/careerpost') }}">
                        @csrf
                        <h3 class="register-heading">Apply as a Technical</h3>
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select class="form-control" name="position" required>
                                        <option class="hidden" selected disabled value="">Select your designation</option>
                                        <option name="Web Developement" value="Web Developement">Web Developement
                                        </option>
                                        <option name="Graphic Designer" value="Graphic Designer">Graphic Designer</option>
                                        <option name="QA" value="QA">QA</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Enter Your Full Name *"
                                        value="" required />
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Enter Your Valid Email *"
                                        value="" required />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="contact" class="form-control" placeholder="Enter Your Valid phone number *"
                                        value="" required />
                                </div>
                                <div class="form-group">
                                    <div class="maxl">
                                        <label class="radio inline">
                                            <input type="radio" name="gender" value="male" checked>
                                            <span> Male </span>
                                        </label>
                                        <label class="radio inline">
                                            <input type="radio" name="gender" value="female">
                                            <span>Female </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="objective" class="form-control" placeholder="Your career objective *"
                                        value="" required />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="qualification" placeholder="Enter Your Last Qualification *"
                                        value="" required />
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="grade" required />
                                    <option class="hidden" selected disabled value="">Last Qualification Grade</option>
                                    <option>Distriction Class</option>
                                    <option>First Class</option>
                                    <option>Second Class</option>
                                    <option>Third Class</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="employeement" placeholder="Last Company name(If you EXP) *"
                                        value="" required />
                                </div>
                                <div class="form-group">
                                    <textarea rows="4" cols="50" name="address" class="form-control" placeholder="Enter Your Address *"
                                        required /></textarea>
                                </div>
                            </div>
                            <input type="submit" class="btnRegister" align="center" value="Apply " />
                            <input type="button" id="back" class="btnRegister" value="Back">
                            <script type="text/javascript">
                                document.getElementById("back").onclick = function () {
                                    location.href = "{{ URL::to('/') }}";
                                };

                            </script>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <form method="POST" action="{{  URL::to('/careerpost') }}">
                        @csrf
                        <h3 class="register-heading">Apply as a Non-Technical</h3>
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select class="form-control" name="position" required>
                                        <option class="hidden" selected disabled value="">Select your designation</option>
                                        <option>HR</option>
                                        <option>BDE</option>
                                        <option>SEO</option>
                                        <option>Digital marketing</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Enter Your Full Name *"
                                        value="" required />
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Enter Your Valid Email *"
                                        value="" required />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="contact" class="form-control" placeholder="Enter Your Valid phone number *"
                                        value="" required />
                                </div>
                                <div class="form-group">
                                    <div class="maxl">
                                        <label class="radio inline">
                                            <input type="radio" name="gender" value="male" checked>
                                            <span> Male </span>
                                        </label>
                                        <label class="radio inline">
                                            <input type="radio" name="gender" value="female">
                                            <span>Female </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="qualification" placeholder="Enter Your Last Qualification *"
                                        value="" required />
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="grade" required>
                                        <option class="hidden" selected disabled value="">Last Qualification Grade</option>
                                        <option>Distriction Class</option>
                                        <option>First Class</option>
                                        <option>Second Class</option>
                                        <option>Third Class</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="employeement" placeholder="Last Company name(If you EXP) *"
                                        value="" required />
                                </div>
                                <div class="form-group">
                                    <textarea rows="4" cols="50" class="form-control" name="address" placeholder="Enter Your Address *"
                                        required /></textarea>
                                </div>
                            </div>
                            <input type="submit" class="btnRegister" align="center" value="Apply" />
                            <input type="button" id="backn" class="btnRegister" value="Back">
                            <script type="text/javascript">
                                document.getElementById("backn").onclick = function () {
                                    location.href = "{{ URL::to('/') }}";
                                };

                            </script>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script>
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
                    alert("Career Opotrtunity Submited");
                    return false;
                },
                error: function () {
                    alert("ERROR");
                    return false;
                }
            });
            return false;
        }

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
</body>

</html>
