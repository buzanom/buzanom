@include('user.includes.header')

<body class="landing-page landing-page1">
    <style>
        .wrap-login100 {
    width: 100%;
    border-radius: 10px;
    overflow: hidden;
    background: transparent;
}
.focus-input100 {
    position: absolute;
    display: block;
    width: 5%;
    height: 0%;
    top: 33%;
    left: 0;
    pointer-events: none;
    color: #5e8f93;
}
.focus-input100 .fa{
    float: right;
}
.has-val.input100 + .focus-input100::before {
    width: 166%;
}
.input100:focus + .focus-input100::before {
    width: 2000%;
}
</style>
    @include('user.includes.nav')
    <div class="wrapper">
        <!-- <div class="section section-gray section-demo">
        </div> -->
        <div class="parallax filter-gradient white" id="contact">
            <div class="parallax filter-gradient blue" data-color="blue">
                <div class="parallax-background">
                    <img class="parallax-background-image" src="assets/img/career2.jpg" />
                </div>
                <div class="container">
                    <div class="row">
                        <div class="contactdiv">
                            <div class="limiter">
                                <div class="container-login100">
                                    <div class="wrap-login100 p-t-30 p-b-50">
                                        <div class="col-md-12">
                                            <span class="login100-form-title p-b-41">
                                                Career
                                            </span>
                                            <div class="login100-form validate-form p-b-33 p-t-5" action="#!">
                                                <div class="wrap-input100 validate-input" data-validate="Enter name">
                                                    <input class="input100" type="text" name="name" placeholder="Name">
                                                    <span class="focus-input100"><i class="fa fa-circle-o fa-lg"></i></span>
                                                </div>
                                                <div class="wrap-input100 validate-input" data-validate="Enter email">
                                                    <input class="input100" type="text" name="email" placeholder="Email">
                                                    <span class="focus-input100"><i class="fa fa-inbox fa-lg"></i></span>
                                                </div>
                                                <div class="wrap-input100 validate-input" data-validate="Enter contact">
                                                    <input class="input100" type="text" name="contact" placeholder="Contact">
                                                    <span class="focus-input100"><i class="fa fa-phone fa-lg"></i></span>
                                                </div>
                                                <div class="wrap-input100 validate-input" data-validate="Enter address">
                                                    <input class="input100" type="text" name="address" placeholder="Address">
                                                    <span class="focus-input100"><i class="fa fa-map-marker fa-lg"></i></span>
                                                </div>
                                                <div class="wrap-input100 validate-input" data-validate="Enter career objective">
                                                    <input class="input100" type="text" name="objective" placeholder="Career Objective">
                                                    <span class="focus-input100"><i class="fa fa-object-group fa-lg"></i></span>
                                                </div>
                                                <div class="wrap-input100 validate-input" data-validate="Enter last qualification">
                                                    <input class="input100" type="text" name="qualification"
                                                        placeholder="Last Qualification">
                                                    <span class="focus-input100"><i class="fa fa-graduation-cap fa-lg"></i></span>
                                                </div>
                                                <div class="wrap-input100 validate-input" data-validate="Enter last qualification grade">
                                                    <input class="input100" type="text" name="grade" placeholder="Last Qualification Grade">
                                                    <span class="focus-input100"><i class="fa fa-percent fa-lg"></i></span>
                                                </div>
                                                <div class="wrap-input100 validate-input" data-validate="Enter position">
                                                    <input class="input100" type="text" name="position" placeholder="Position">
                                                    <span class="focus-input100"><i class="fa fa-suitcase fa-lg"></i></span>
                                                </div>
                                                <div class="wrap-input100" data-validate="Enter last employement">
                                                    <input class="input100" type="text" name="employeement" placeholder="Last Employeement (Optional for Fresher)">
                                                    <span class="focus-input100"><i class="fa fa-users fa-lg"></i></span>
                                                </div>
                                                <div class="container-login100-form-btn m-t-32">
                                                    <button class="login100-form-btn" onclick="validatesubmit()">
                                                        Submit
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="dropDownSelect1"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('user.includes.footer')
    </div>
</body>
@include('user.includes.script')
