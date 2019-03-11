<div class="sidebar" data-color="azure" data-background-color="white" data-image="{{ URL::asset('/') }}assets/admin/img/sidebar-1.jpg">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo">
        <a href="{{ URL::to('/') }}" class="simple-text logo-normal">
            <!-- BUZANOM -->
            <img class="img" id="OpenImgUpload" src="{{ URL::asset('/') }}assets/general/<?php echo $site_settings['logo']; ?>" />
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item <?php if($title == "Dashboard"){ echo "active" ; }?>">
                <a class="nav-link" href="{{ URL::to('/dashboard') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item <?php if($title == "Career"){ echo "active" ; }?>">
                <a class="nav-link" href="{{ URL::to('/career') }}">
                    <i class="material-icons">person</i>
                    <p>Career Application</p>
                </a>
            </li>
            <li class="nav-item <?php if($title == "Contact"){ echo "active" ; }?>">
                <a class="nav-link" href="{{ URL::to('/contact') }}">
                    <i class="material-icons">notifications</i>
                    <p>Contact</p>
                </a>
            </li>
            <li class="nav-item <?php if($title == "Employee"){ echo "active" ; }?>">
                <a class="nav-link" href="{{ URL::to('/employee') }}">
                    <i class="material-icons">person</i>
                    <p>Employee</p>
                </a>
            </li>
        </ul>
    </div>
</div>
