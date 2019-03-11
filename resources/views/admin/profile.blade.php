    <!DOCTYPE html>
    <html lang="en">
    @include('admin.include.head')

    <body class="">
        <div class="wrapper ">
            @include('admin.include.slider')
            <div class="main-panel">
                @include('admin.include.nav')
                <!-- End Navbar -->
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header card-header-primary">
                                        <h4 class="card-title">Edit Profile</h4>
                                        <p class="card-category">Complete your profile</p>
                                    </div>
                                    <div class="card-body">
                                        <form method="POST" action="{{ URL::to('/profileupdate') }}" onsubmit="return profileupdate()">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Name</label>
                                                        <input type="text" class="form-control" name="name" id="name" value="<?php echo $admin['name']; ?>">
                                                        <span class="text-danger" id="name_error"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Username</label>
                                                        <input type="text" class="form-control" name="username" id="username"
                                                            value="<?php echo $admin['username']; ?>">
                                                        <span class="text-danger" id="username_error"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Mobile</label>
                                                        <input type="text" class="form-control" name="mobile" id="mobile"
                                                            value="<?php echo $admin['mobile']; ?>">
                                                        <span class="text-danger" id="mobile_error"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Email address</label>
                                                        <input type="text" class="form-control" name="email" id="email"
                                                            value="<?php echo $admin['email']; ?>">
                                                        <span class="text-danger" id="email_error"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Fist Name</label>
                                                        <input type="text" class="form-control" name="first_name" id="first_name"
                                                            value="<?php echo $admin['first_name']; ?>">
                                                        <span class="text-danger" id="first_name_error"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Last Name</label>
                                                        <input type="text" class="form-control" name="last_name" id="last_name"
                                                            value="<?php echo $admin['last_name']; ?>">
                                                        <span class="text-danger" id="last_name_error"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Address</label>
                                                        <input type="text" class="form-control" name="address" id="address"
                                                            value="<?php echo $admin['address']; ?>">
                                                        <span class="text-danger" id="address_error"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">City</label>
                                                        <input type="text" class="form-control" name="city" id="city" value="<?php echo $admin['city']; ?>">
                                                        <span class="text-danger" id="city_error"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Country</label>
                                                        <input type="text" class="form-control" name="country" id="country"
                                                            value="<?php echo $admin['country']; ?>">
                                                        <span class="text-danger" id="country_error"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Postal Code</label>
                                                        <input type="text" class="form-control" name="postal" id="postal"
                                                            value="<?php echo $admin['postal']; ?>">
                                                        <span class="text-danger" id="postal_error"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>About Me</label>
                                                        <div class="form-group">
                                                            <label class="bmd-label-floating"> Discript YourSelf Here.</label>
                                                            <textarea class="form-control" rows="5" name="about" id="about"><?php echo $admin['about']; ?></textarea>
                                                        </div>
                                                        <span class="text-danger" id="about_error"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
                                            <div class="clearfix"></div>
                                        </form>
                                        <form method="POST" action="{{ URL::to('/changepassword') }}" onsubmit="return changepwassword()">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Old Password</label>
                                                        <input type="password" class="form-control" name="oldpwd" id="oldpwd"
                                                            value="">
                                                        <span class="text-danger pwderror_span" id="oldpwd_error"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">New Password</label>
                                                        <input type="password" class="form-control" name="newpwd" id="newpwd"
                                                            value="">
                                                        <span class="text-danger pwderror_span" id="newpwd_error"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">New Confirm Password</label>
                                                        <input type="password" class="form-control" name="cnfpwd" id="cnfpwd"
                                                            value="">
                                                        <span class="text-danger pwderror_span" id="cnfpwd_error"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary pull-right">Update Password</button>
                                            <div class="clearfix"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card card-profile">
                                    <div class="card-avatar">
                                        <a href="#">
                                            <img class="img" id="OpenImgUpload" src="{{ URL::asset('/') }}assets/admin/uploads/<?php echo $admin['profile_pic']; ?>" />
                                            <input type="file" name="profile_pic" id="imgupload" style="display:none" />
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h6 class="card-category text-gray">
                                            <?php echo $admin['position']; ?>
                                        </h6>
                                        <h4 class="card-title">
                                            <?php echo $admin['first_name']." ".$admin['last_name']; ?>
                                        </h4>
                                        <p class="card-description">
                                            <?php echo $admin['about']; ?>
                                        </p>
                                        <input class="btn btn-primary btn-round" id="profilepicupload" onclick="uploadadminprofile_pic(event)"
                                            type="button" value="Update Profile Pic" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @include('admin.include.footer')
            </div>
        </div>
        @include('admin.include.script')
    </body>

    </html>
