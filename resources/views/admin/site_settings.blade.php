<!DOCTYPE html>
<html lang="en">
@include('admin.include.head')
<body class="">
<style>
.card-avatar{
    background: white;
}
</style>
    <div class="wrapper ">
        @include('admin.include.slider')
        <div class="main-panel">
            @include('admin.include.nav')
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <form class="row form" method="POST" action="{{ URL::to('/site_settings') }}" onsubmit="return site_settingupdate()">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header card-header-primary">
                                        <h4 class="card-title">Edit Site Settings</h4>
                                        <p class="card-category">Complete Site Settings</p>
                                    </div>
                                    <div class="card-body">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Address 1</label>
                                                    <input type="text" class="form-control" name="address1" id="address1" value="<?php echo $site_settings['address1']; ?>">
                                                    <span class="text-danger" id="address1_error"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Address 2</label>
                                                    <input type="text" class="form-control" name="address2" id="address2" value="<?php echo $site_settings['address2']; ?>">
                                                    <span class="text-danger" id="address2_error"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Latitude</label>
                                                    <input type="text" class="form-control" name="lat" id="lat" value="<?php echo $site_settings['lat']; ?>">
                                                    <span class="text-danger" id="lat_error"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Langitude</label>
                                                    <input type="text" class="form-control" name="lang" id="lang" value="<?php echo $site_settings['lang']; ?>">
                                                    <span class="text-danger" id="lang_error"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Support Email address</label>
                                                    <input type="text" class="form-control" name="support_email" id="support_email" value="<?php echo $site_settings['support_email']; ?>">
                                                    <span class="text-danger" id="support_email_error"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Info Email address</label>
                                                    <input type="text" class="form-control" name="info_email" id="info_email" value="<?php echo $site_settings['info_email']; ?>">
                                                    <span class="text-danger" id="info_email_error"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">HR Email address</label>
                                                    <input type="text" class="form-control" name="hr_email" id="hr_email" value="<?php echo $site_settings['hr_email']; ?>">
                                                    <span class="text-danger" id="hr_email_error"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Contact 1</label>
                                                    <input type="text" class="form-control" name="contact1" id="contact1" value="<?php echo $site_settings['contact1']; ?>">
                                                    <span class="text-danger" id="contact1_error"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Contact 2</label>
                                                    <input type="text" class="form-control" name="contact2" id="contact2" value="<?php echo $site_settings['contact2']; ?>">
                                                    <span class="text-danger" id="contact2_error"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Facebook Link</label>
                                                    <input type="text" class="form-control" name="facebook_link" id="facebook_link" value="<?php echo $site_settings['facebook_link']; ?>">
                                                    <span class="text-danger" id="facebook_link_error"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">LinkedIn Link</label>
                                                    <input type="text" class="form-control" name="linkedin_link" id="linkedin_link" value="<?php echo $site_settings['linkedin_link']; ?>">
                                                    <span class="text-danger" id="linkedin_link_error"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Pinterst Link</label>
                                                    <input type="text" class="form-control" name="pinterest_link" id="pinterest_link" value="<?php echo $site_settings['pinterest_link']; ?>">
                                                    <span class="text-danger" id="pinterest_link_error"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Twitter Link</label>
                                                    <input type="text" class="form-control" name="twitter_link" id="twitter_link" value="<?php echo $site_settings['twitter_link']; ?>">
                                                    <span class="text-danger" id="twitter_link_error"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Google+ Link</label>
                                                    <input type="text" class="form-control" name="googleplus_link" id="googleplus_link" value="<?php echo $site_settings['googleplus_link']; ?>">
                                                    <span class="text-danger" id="googleplus_link_error"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Skype Link</label>
                                                    <input type="text" class="form-control" name="skype_link" id="skype_link" value="<?php echo $site_settings['skype_link']; ?>">
                                                    <span class="text-danger" id="skype_link_error"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">GitHub Link</label>
                                                    <input type="text" class="form-control" name="github_link" id="github_link"                                   value="<?php echo $site_settings['github_link']; ?>">
                                                    <span class="text-danger" id="github_link_error"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card card-profile">
                                    <div class="card-avatar">
                                        <a href="#">
                                            <img class="img" id="OpenImgUpload" src="{{ URL::asset('/') }}assets/general/<?php echo $site_settings['logo']; ?>" />
                                            <input type="file" name="logo" id="imgupload" style="display:none" />
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <label class="bmd-label-floating">Tag Line</label>
                                        <input type="text" class="form-control" name="tagline" id="tagline" value="<?php echo $site_settings['tagline']; ?>">
                                        <span class="text-danger" id="tagline_error"></span>
                                        <button type="submit" class="btn btn-primary">Update Details</button>
                                    </div>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
            @include('admin.include.footer')
        </div>
    </div>
    @include('admin.include.script')
</body>

</html>
