<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle">
    <i></i>
    <img src="{{ URL::asset('/') }}assets/general/<?php echo $site_settings->logo; ?>">
</a>
<aside id="colorlib-aside" role="complementary" class="border js-fullheight">
    <h1 id="colorlib-logo"><a href="{{ URL::to('/') }}"><img src="{{ URL::asset('/') }}assets/general/<?php echo $site_settings->logo; ?>"></a></h1>
    <nav id="colorlib-main-menu" role="navigation">
        <ul>
            <li class="colorlib-active"><a href="{{ URL::to('/') }}">Home</a></li>
            <li><a class="searchbychar" href="#" data-target="about">About</a></li>
            <li><a class="searchbychar" href="#" data-target="services">Services</a></li>
            <li><a class="searchbychar" href="#" data-target="team">Team</a></li>
            <li><a class="searchbychar" href="#" data-target="clients">Clients</a></li>
            <li><a class="searchbychar" href="#" data-target="contact">Contact</a></li>
            <li><a href="{{ URL::to('/careers') }}">Career</a></li>
        </ul>
    </nav>
    <div class="colorlib-footer">
        <p><small>&copy; 2019 All rights reserved to BUZANOM</small></p>
        <ul>
            <li><a href="#"><i class="icon-facebook2"></i></a></li>
            <li><a href="#"><i class="icon-twitter2"></i></a></li>
            <li><a href="#"><i class="icon-instagram"></i></a></li>
            <li><a href="#"><i class="icon-pinterest"></i></a></li>
            <li><a href="#"><i class="icon-instagram"></i></a></li>
        </ul>
    </div>
</aside>
