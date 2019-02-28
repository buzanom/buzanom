@include('user.includes.header')

<body>
    <div id="colorlib-page">
        @include('user.includes.nav')
        <div id="colorlib-main">
            <aside id="colorlib-hero" class="js-fullheight">
                <div class="flexslider js-fullheight">
                    <ul class="slides">
                        <li style="background-image: url({{ URL::asset('/') }}assets/user/web/images/vision.jpg);">
                            <div class="overlay"></div>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3 col-md-push-3 col-sm-12 col-xs-12 js-fullheight slider-text">
                                        <div class="slider-text-inner">
                                            <div class="desc">
                                                <h1>Our Vision</h1>
                                                <h2></h2>
                                                <!-- <p><a class="btn btn-primary btn-learn"href="{{ URL::to('/our_vision') }}" target="_blank">JOIN OUR VISION <i class="icon-arrow-right3"></i></a></p> -->
                                                <p><a class="btn btn-primary btn-learn" href="#!" target="_blank">JOIN
                                                        OUR VISION <i class="icon-arrow-right3"></i></a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li style="background-image: url({{ URL::asset('/') }}assets/user/web/images/mission.jpg);">
                            <div class="overlay"></div>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3 col-md-push-3 col-sm-12 col-xs-12 js-fullheight slider-text">
                                        <div class="slider-text-inner">
                                            <div class="desc">
                                                <h1>Our Mission</h1>
                                                <h2></h2>
                                                <p><a class="btn btn-primary btn-learn" href="{{ URL::to('/our_mission') }}"
                                                        target="_blank">JOIN OUR MISSION <i class="icon-arrow-right3"></i></a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li style="background-image: url({{ URL::asset('/') }}assets/user/web/images/success.jpg);">
                            <div class="overlay"></div>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3 col-md-push-3 col-sm-12 col-xs-12 js-fullheight slider-text">
                                        <div class="slider-text-inner">
                                            <div class="desc">
                                                <h1>Our Success</h1>
                                                <h2></h2>
                                                <p><a class="btn btn-primary btn-learn" href="{{ URL::to('/our_success') }}"
                                                        target="_blank">JOIN OUR SUCCESS <i class="icon-arrow-right3"></i></a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </aside>
            <div class="colorlib-about" id="about">
                <div class="colorlib-narrow-content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="about-img animate-box" data-animate-effect="fadeInLeft" style="background-image: url({{ URL::asset('/') }}assets/user/web/images/img_bg_2.png);background-size:100%;">
                            </div>
                        </div>
                        <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                            <div class="about-desc">
                                <!-- <span class="heading-meta">Welcome</span> -->
                                <h2 class="colorlib-heading">Who we are</h2>
                                <p>We are team of creative people who are passionate with development, design,
                                    photography, multimedia and other creative things.If you are looking professional
                                    multi-purpose profession company with endless possibilities, you are at the right
                                    place.</p>
                                <p>We help startups build meaningful products.We have a team of hardworking, motivated
                                    and committed skilled professional and requisite infrastructure to help us achieve
                                    advanced and customer oriented solutions.</p>
                            </div>
                            <div class="row padding">
                                <div class="col-md-4 no-gutters animate-box" data-animate-effect="fadeInLeft">
                                    <a href="#!" class="steps active">
                                        <p class="icon"><span><i class="icon-check"></i></span></p>
                                        <h3>We are <br>pasionate</h3>
                                    </a>
                                </div>
                                <div class="col-md-4 no-gutters animate-box" data-animate-effect="fadeInLeft">
                                    <a href="#!" class="steps">
                                        <p class="icon"><span><i class="icon-check"></i></span></p>
                                        <h3>Honest <br>Dependable</h3>
                                    </a>
                                </div>
                                <div class="col-md-4 no-gutters animate-box" data-animate-effect="fadeInLeft">
                                    <a href="#!" class="steps">
                                        <p class="icon"><span><i class="icon-check"></i></span></p>
                                        <h3>Always <br>Improving</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="colorlib-services" id="services">
                <div class="colorlib-narrow-content">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                            <span class="heading-meta">What We do?</span>
                            <h2 class="colorlib-heading">Here are some of our expertise</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="colorlib-feature animate-box" data-animate-effect="fadeInLeft">
                                        <div class="colorlib-icon">
                                            <i class="flaticon-code"></i>
                                        </div>
                                        <div class="colorlib-text">
                                            <h3>Web Development</h3>
                                            <p>Web supported all platforms and thier services for cross-platforms we
                                                offers with great optimisation.</p>
                                        </div>
                                    </div>
                                    <div class="colorlib-feature animate-box" data-animate-effect="fadeInLeft">
                                        <div class="colorlib-icon">
                                            <i class="flaticon-application-development"></i>
                                        </div>
                                        <div class="colorlib-text">
                                            <h3>Mobile Development</h3>
                                            <p>Native mobile platform application development with great performance.</p>
                                        </div>
                                    </div>
                                    <div class="colorlib-feature animate-box" data-animate-effect="fadeInLeft">
                                        <div class="colorlib-icon">
                                            <i class="flaticon-report"></i>
                                        </div>
                                        <div class="colorlib-text">
                                            <h3>Cross-Platform Development</h3>
                                            <p>Need Fast Launch!! Here we provides cross-platform support where you can
                                                get same great performance in all platforms.</p>
                                        </div>
                                    </div>
                                    <div class="colorlib-feature animate-box" data-animate-effect="fadeInLeft">
                                        <div class="colorlib-icon">
                                            <i class="flaticon-open-source"></i>
                                        </div>
                                        <div class="colorlib-text">
                                            <h3>Open Source Development</h3>
                                            <p>An Open source platform supported applications where everyone can
                                                customise the product.</p>
                                        </div>
                                    </div>
                                    <div class="colorlib-feature animate-box" data-animate-effect="fadeInLeft">
                                        <div class="colorlib-icon">
                                            <i class="flaticon-bitcoins"></i>
                                        </div>
                                        <div class="colorlib-text">
                                            <h3>Blockchain & Cloud Development</h3>
                                            <p>Latest Digital currency development </p>
                                        </div>
                                    </div>
                                    <div class="colorlib-feature animate-box" data-animate-effect="fadeInLeft">
                                        <div class="colorlib-icon">
                                            <i class="flaticon-computer"></i>
                                        </div>
                                        <div class="colorlib-text">
                                            <h3>Web Designing</h3>
                                            <p>Unique and responsive designs having elegant and clean UX/UI for web
                                                platforms.</p>
                                        </div>
                                    </div>
                                    <div class="colorlib-feature animate-box" data-animate-effect="fadeInLeft">
                                        <div class="colorlib-icon">
                                            <i class="flaticon-smartphone"></i>
                                        </div>
                                        <div class="colorlib-text">
                                            <h3>Application Designing</h3>
                                            <p>Unique and responsive designs having elegant and clean UX/UI for
                                                Application platforms.</p>
                                        </div>
                                    </div>
                                    <div class="colorlib-feature animate-box" data-animate-effect="fadeInLeft">
                                        <div class="colorlib-icon">
                                            <i class="flaticon-graphic"></i>
                                        </div>
                                        <div class="colorlib-text">
                                            <h3>Graphic Designing</h3>
                                            <p>Designing for product branding on analogue and digital way.</p>
                                        </div>
                                    </div>
                                    <div class="colorlib-feature animate-box" data-animate-effect="fadeInLeft">
                                        <div class="colorlib-icon">
                                            <i class="flaticon-social-media"></i>
                                        </div>
                                        <div class="colorlib-text">
                                            <h3>Product Marketing & Branding</h3>
                                            <p>Best Solution to make the product popular with various professional ways
                                                to make The product A BRAND.</p>
                                        </div>
                                    </div>
                                    <div class="colorlib-feature animate-box" data-animate-effect="fadeInLeft">
                                        <div class="colorlib-icon">
                                            <i class="flaticon-camera"></i>
                                        </div>
                                        <div class="colorlib-text">
                                            <h3>Photography & Multimedia</h3>
                                            <p>Want to get in eye as spark must have better photos and portfolios.</p>
                                        </div>
                                    </div>
                                    <div class="colorlib-feature animate-box" data-animate-effect="fadeInLeft">
                                        <div class="colorlib-icon">
                                            <i class="flaticon-pottery-man"></i>
                                        </div>
                                        <div class="colorlib-text">
                                            <h3>Workshop & Training</h3>
                                            <p>A Huge knowldge place that we provide to the freshers in any profession.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="#!" class="services-wrap animate-box" data-animate-effect="fadeInRight">
                                        <div class="services-img" style="background-image: url({{ URL::asset('/') }}assets/user/web/images/web_application.jpg)"></div>
                                        <div class="desc">
                                            <h3>Web Application</h3>
                                        </div>
                                    </a>
                                    <a href="#!" class="services-wrap animate-box" data-animate-effect="fadeInRight">
                                        <div class="services-img" style="background-image: url({{ URL::asset('/') }}assets/user/web/images/cross_platform_applications.jpg)"></div>
                                        <div class="desc">
                                            <h3>Cross Platform Application</h3>
                                        </div>
                                    </a>
                                    <a href="#!" class="services-wrap animate-box" data-animate-effect="fadeInRight">
                                        <div class="services-img" style="background-image: url({{ URL::asset('/') }}assets/user/web/images/blockchain_applications.jpg)"></div>
                                        <div class="desc">
                                            <h3>BlockChain & Cloud Application</h3>
                                        </div>
                                    </a>
                                    <a href="#!" class="services-wrap animate-box" data-animate-effect="fadeInRight">
                                        <div class="services-img" style="background-image: url({{ URL::asset('/') }}assets/user/web/images/mobile_UI.gif)"></div>
                                        <div class="desc">
                                            <h3>Mobile User Interface</h3>
                                        </div>
                                    </a>
                                    <a href="#!" class="services-wrap animate-box" data-animate-effect="fadeInRight">
                                        <div class="services-img" style="background-image: url({{ URL::asset('/') }}assets/user/web/images/branding.jpg)"></div>
                                        <div class="desc">
                                            <h3>Marketing & Branding</h3>
                                        </div>
                                    </a>
                                    <a href="#!" class="services-wrap animate-box" data-animate-effect="fadeInRight">
                                        <div class="services-img" style="background-image: url({{ URL::asset('/') }}assets/user/web/images/Workshop_Training.jpg)"></div>
                                        <div class="desc">
                                            <h3>Workshop & Training</h3>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6 move-bottom">
                                    <a href="#!" class="services-wrap animate-box" data-animate-effect="fadeInRight">
                                        <div class="services-img" style="background-image: url({{ URL::asset('/') }}assets/user/web/images/mobile_application.jpg)"></div>
                                        <div class="desc">
                                            <h3>Mobile Application</h3>
                                        </div>
                                    </a>
                                    <a href="#!" class="services-wrap animate-box" data-animate-effect="fadeInRight">
                                        <div class="services-img" style="background-image: url({{ URL::asset('/') }}assets/user/web/images/open_source_applications.jpg)"></div>
                                        <div class="desc">
                                            <h3>Open Source Application</h3>
                                        </div>
                                    </a>
                                    <a href="#!" class="services-wrap animate-box" data-animate-effect="fadeInRight">
                                        <div class="services-img" style="background-image: url({{ URL::asset('/') }}assets/user/web/images/web_UI.gif)"></div>
                                        <div class="desc">
                                            <h3>Web User Interface</h3>
                                        </div>
                                    </a>
                                    <a href="#!" class="services-wrap animate-box" data-animate-effect="fadeInRight">
                                        <div class="services-img" style="background-image: url({{ URL::asset('/') }}assets/user/web/images/graphic_design.gif)"></div>
                                        <div class="desc">
                                            <h3>Graphic Designs</h3>
                                        </div>
                                    </a>
                                    <a href="#!" class="services-wrap animate-box" data-animate-effect="fadeInRight">
                                        <div class="services-img" style="background-image: url({{ URL::asset('/') }}assets/user/web/images/photography.jpg)"></div>
                                        <div class="desc">
                                            <h3>Photography & Multimedia</h3>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="colorlib-blog" id="team">
                <div class="colorlib-narrow-content">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                            <span class="heading-meta">Our Team</span>
                            <h2 class="colorlib-heading">With Abilities</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 animate-box teammember" data-animate-effect="fadeInLeft">
                            <div class="blog-entry">
                                <a href="#!" class="blog-img"><img src="{{ URL::asset('/') }}uploads/emp_profile_pic/Nirav_R_Chavda(Managing_Director).png"
                                        class="img-responsive" alt=""></a>
                                <div class="desc">
                                    <!-- <span><small>April 14, 2018 </small> | <small> Web Design </small> | <small> <i class="icon-bubble3"></i> 4</small></span> -->
                                    <h3><a href="#!">Managing Director</a></h3>
                                    <p>Mr. Nirav Chavda</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 animate-box teammember" data-animate-effect="fadeInLeft">
                            <div class="blog-entry">
                                <a href="#!" class="blog-img"><img src="{{ URL::asset('/') }}uploads/emp_profile_pic/Gazala_Ansari_(Hr Dipartmant).png"
                                        class="img-responsive" alt=""></a>
                                <div class="desc">
                                    <!-- <span><small>April 14, 2018 </small> | <small> Web Design </small> | <small> <i class="icon-bubble3"></i> 4</small></span> -->
                                    <h3><a href="#!">Human Resource</a></h3>
                                    <p>Miss. Gazala Ansari</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 animate-box teammember" data-animate-effect="fadeInLeft">
                            <div class="blog-entry">
                                <a href="#!" class="blog-img"><img src="{{ URL::asset('/') }}uploads/emp_profile_pic/Kuldeep_Agnihotri(BD).png"
                                        class="img-responsive" alt=""></a>
                                <div class="desc">
                                    <!-- <span><small>April 14, 2018 </small> | <small> Web Design </small> | <small> <i class="icon-bubble3"></i> 4</small></span> -->
                                    <h3><a href="#!">B.D.E</a></h3>
                                    <p>Mr. Kuldeep Agnihotri</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 animate-box teammember" data-animate-effect="fadeInLeft">
                            <div class="blog-entry">
                                <a href="#!" class="blog-img"><img src="{{ URL::asset('/') }}uploads/emp_profile_pic/Vijay_Patel(Sr._CMS_developer).png"
                                        class="img-responsive" alt=""></a>
                                <div class="desc">
                                    <!-- <span><small>April 14, 2018 </small> | <small> Web Design </small> | <small> <i class="icon-bubble3"></i> 4</small></span> -->
                                    <h3><a href="#!">Sr. CMS | PHP Developer</a></h3>
                                    <p>Mr. Vijay Patel</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 animate-box teammember" data-animate-effect="fadeInLeft">
                            <div class="blog-entry">
                                <a href="#!" class="blog-img"><img src="{{ URL::asset('/') }}uploads/emp_profile_pic/Snehal_gajjar(PM).png"
                                        class="img-responsive" alt=""></a>
                                <div class="desc">
                                    <!-- <span><small>April 14, 2018 </small> | <small> Web Design </small> | <small> <i class="icon-bubble3"></i> 4</small></span> -->
                                    <h3><a href="#!">Project Manager</a></h3>
                                    <p>Mr. Snehal Gajjar</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 animate-box teammember" data-animate-effect="fadeInLeft">
                            <div class="blog-entry">
                                <a href="#!" class="blog-img"><img src="{{ URL::asset('/') }}uploads/emp_profile_pic/Hitesh_Patel(Digital_Marketing).png"
                                        class="img-responsive" alt=""></a>
                                <div class="desc">
                                    <!-- <span><small>April 14, 2018 </small> | <small> Web Design </small> | <small> <i class="icon-bubble3"></i> 4</small></span> -->
                                    <h3><a href="#!">Sr. Digital Marketing Manager</a></h3>
                                    <p>Mr. Hitesh Patel</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 animate-box teammember" data-animate-effect="fadeInLeft">
                            <div class="blog-entry">
                                <a href="#!" class="blog-img"><img src="{{ URL::asset('/') }}uploads/emp_profile_pic/Kishan_Pandya(Graphic_designer).png"
                                        class="img-responsive" alt=""></a>
                                <div class="desc">
                                    <!-- <span><small>April 14, 2018 </small> | <small> Web Design </small> | <small> <i class="icon-bubble3"></i> 4</small></span> -->
                                    <h3><a href="#!">Sr. Graphic Designer</a></h3>
                                    <p>Mr. Kishan Pandya</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 animate-box teammember" data-animate-effect="fadeInLeft">
                            <div class="blog-entry">
                                <a href="#!" class="blog-img"><img src="{{ URL::asset('/') }}uploads/emp_profile_pic/Gaurav_khokhani(php_dev).png"
                                        class="img-responsive" alt=""></a>
                                <div class="desc">
                                    <!-- <span><small>April 14, 2018 </small> | <small> Web Design </small> | <small> <i class="icon-bubble3"></i> 4</small></span> -->
                                    <h3><a href="#!">Sr. Php Developer</a></h3>
                                    <p>Mr. Gaurav Khokhani</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="colorlib-counter" id="projects" class="colorlib-counters" style="background-image: url({{ URL::asset('/') }}assets/user/web/images/vision_banner.jpg);"
                data-stellar-background-ratio="0.5">
                <div class="overlay"></div>
                <div class="colorlib-narrow-content">
                    <div class="row">
                    </div>
                    <div class="row">
                        <div class="col-md-3 text-center animate-box">
                            <span class="icon"><i class="flaticon-collective"></i></span>
                            <span class="colorlib-counter js-counter" data-from="0" data-to="50" data-speed="5000"
                                data-refresh-interval="50"></span>
                            <span class="colorlib-counter-label">Projects</span>
                        </div>
                        <div class="col-md-3 text-center animate-box">
                            <span class="icon"><i class="flaticon-employee"></i></span>
                            <span class="colorlib-counter js-counter" data-from="0" data-to="15" data-speed="5000"
                                data-refresh-interval="50"></span>
                            <span class="colorlib-counter-label">Employees</span>
                        </div>
                        <div class="col-md-3 text-center animate-box">
                            <span class="icon"><i class="flaticon-support"></i></span>
                            <span class="colorlib-counter js-counter" data-from="0" data-to="35" data-speed="5000"
                                data-refresh-interval="50"></span>
                            <span class="colorlib-counter-label">Client</span>
                        </div>
                        <div class="col-md-3 text-center animate-box">
                            <span class="icon"><i class="flaticon-collaboration"></i></span>
                            <span class="colorlib-counter js-counter" data-from="0" data-to="3" data-speed="5000"
                                data-refresh-interval="50"></span>
                            <span class="colorlib-counter-label">Partners</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="colorlib-work" id="clients">
                <div class="colorlib-narrow-content">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                            <span class="heading-meta">Our Work & Clients</span>
                            <h2 class="colorlib-heading animate-box">Recent Work & Client Reviews</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 animate-box" data-animate-effect="fadeInLeft">
                            <div class="project" style="background-image: url({{ URL::asset('/') }}assets/user/web/images/img-1.jpg);">
                                <div class="desc">
                                    <div class="con">
                                        <h3><a href="#!">Work 01</a></h3>
                                        <span>
                                            <p class="icon">
                                                <span>
                                                    <i class="icon-heart"></i>
                                                </span>Building
                                            </p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 animate-box" data-animate-effect="fadeInLeft">
                            <div class="project" style="background-image: url({{ URL::asset('/') }}assets/user/web/images/img-2.jpg);">
                                <div class="desc">
                                    <div class="con">
                                        <h3><a href="#!">Work 02</a></h3>
                                        <span>
                                            <p class="icon">
                                                <span>
                                                    <i class="icon-heart"></i>
                                                </span>House, Apartment
                                            </p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="colorlib-contact" id="contact">
                <div class="colorlib-narrow-content">
                    <div class="row">
                        <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                            <span class="heading-meta">Read</span>
                            <h2 class="colorlib-heading">Get in Touch</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
                                <div class="colorlib-icon">
                                    <i class="icon-globe-outline"></i>
                                </div>
                                <div class="colorlib-text email-text">
                                    <p>To Support: <a href="mailto:<?php echo $site_settings->support_email; ?>">
                                            <?php echo $site_settings->support_email; ?></a></p>
                                    <p>To Info: <a href="mailto:<?php echo $site_settings->info_email; ?>">
                                            <?php echo $site_settings->info_email; ?></a></p>
                                    <p>To HR: <a href="mailto:<?php echo $site_settings->hr_email; ?>">
                                            <?php echo $site_settings->hr_email; ?></a></p>
                                </div>
                            </div>
                            <div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
                                <div class="colorlib-icon">
                                    <i class="icon-map"></i>
                                </div>
                                <div class="colorlib-text">
                                    <p>
                                        <?php echo $site_settings->address1; ?>
                                    </p>
                                    <?php if(isset($site_settings->address2)){ ?>
                                    <p>
                                        <?php echo $site_settings->address2; ?>
                                    </p>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
                                <div class="colorlib-icon">
                                    <i class="icon-phone"></i>
                                </div>
                                <div class="colorlib-text">
                                    <p>Phone:<a href="tel:<?php echo $site_settings->contact1; ?>">
                                            <?php echo $site_settings->contact1; ?></a></p>
                                    <p>Mobile:
                                        <?php if(isset($site_settings->contact2)){ ?><a href="tel:<?php echo $site_settings->contact2; ?>">
                                            <?php echo $site_settings->contact2; ?></a></p>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-md-push-1">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1 col-md-pull-1 animate-box" data-animate-effect="fadeInLeft">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="email" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="subject" class="form-control" placeholder="Subject">
                                    </div>
                                    <div class="form-group">
                                        <textarea name="message" id="message" cols="30" rows="7" class="form-control"
                                            placeholder="Message"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="button" class="btn btn-primary btn-send-message" value="Send Message"
                                            onclick="contactsubmit()">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="map"></div>
        </div>
    </div>
    @include('user.includes.script')
    @include('user.includes.footer')
