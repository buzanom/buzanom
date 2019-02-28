<!--   Core JS Files   -->
<script src="{{ URL::asset('/') }}assets/admin/js/core/jquery.min.js"></script>
<script src="{{ URL::asset('/') }}assets/admin/js/core/popper.min.js"></script>
<script src="{{ URL::asset('/') }}assets/admin/js/core/bootstrap-material-design.min.js"></script>
<script src="{{ URL::asset('/') }}assets/admin/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<script src="{{ URL::asset('/') }}assets/admin/js/plugins/moment.min.js"></script>
<script src="{{ URL::asset('/') }}assets/admin/js/plugins/sweetalert2.js"></script>
<script src="{{ URL::asset('/') }}assets/admin/js/plugins/jquery.validate.min.js"></script>
<script src="{{ URL::asset('/') }}assets/admin/js/plugins/jquery.bootstrap-wizard.js"></script>
<script src="{{ URL::asset('/') }}assets/admin/js/plugins/bootstrap-selectpicker.js"></script>
<script src="{{ URL::asset('/') }}assets/admin/js/plugins/bootstrap-datetimepicker.min.js"></script>
<script src="{{ URL::asset('/') }}assets/admin/js/plugins/jquery.dataTables.min.js"></script>
<script src="{{ URL::asset('/') }}assets/admin/js/plugins/bootstrap-tagsinput.js"></script>
<script src="{{ URL::asset('/') }}assets/admin/js/plugins/jasny-bootstrap.min.js"></script>
<script src="{{ URL::asset('/') }}assets/admin/js/plugins/fullcalendar.min.js"></script>
<script src="{{ URL::asset('/') }}assets/admin/js/plugins/jquery-jvectormap.js"></script>
<script src="{{ URL::asset('/') }}assets/admin/js/plugins/nouislider.min.js"></script>
<script src="{{ URL::asset('/') }}assets/admin/js/core.js"></script>
<script src="{{ URL::asset('/') }}assets/admin/js/plugins/arrive.min.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCO_lhRVRl7Zw9e-uZZ2owl82YE3mJZgP0"></script>
<script src="{{ URL::asset('/') }}assets/admin/js/plugins/chartist.min.js"></script>
<script src="{{ URL::asset('/') }}assets/admin/js/plugins/bootstrap-notify.js"></script>
<script src="{{ URL::asset('/') }}assets/admin/js/plugins/jquery.inputmask.js"></script>
<script src="{{ URL::asset('/') }}assets/admin/js/plugins/jquery.inputmask.date.extensions.js"></script>
<script src="{{ URL::asset('/') }}assets/admin/js/plugins/jquery.inputmask.extensions.js"></script>
<script src="{{ URL::asset('/') }}assets/admin/js/material-dashboard.js" type="text/javascript"></script>
<script src="{{ URL::asset('/') }}assets/admin/demo/demo.js"></script>
<script>
    function funtoggle() {
        $("#funtoggle").toggle();
    }
    $(document).ready(function () {
        setTimeout(function () {
            $(".alert").remove();
        }, 3000);
        $().ready(function () {
            $sidebar = $('.sidebar');
            $sidebar_img_container = $sidebar.find('.sidebar-background');
            $full_page = $('.full-page');
            $sidebar_responsive = $('body > .navbar-collapse');
            window_width = $(window).width();
            fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();
            if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
                if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
                    $('.fixed-plugin .dropdown').addClass('open');
                }
            }
            $('.fixed-plugin a').click(function (event) {
                if ($(this).hasClass('switch-trigger')) {
                    if (event.stopPropagation) {
                        event.stopPropagation();
                    } else if (window.event) {
                        window.event.cancelBubble = true;
                    }
                }
            });
            $('.fixed-plugin .active-color span').click(function () {
                $full_page_background = $('.full-page-background');
                $(this).siblings().removeClass('active');
                $(this).addClass('active');
                var new_color = $(this).data('color');
                if ($sidebar.length != 0) {
                    $sidebar.attr('data-color', new_color);
                }
                if ($full_page.length != 0) {
                    $full_page.attr('filter-color', new_color);
                }
                if ($sidebar_responsive.length != 0) {
                    $sidebar_responsive.attr('data-color', new_color);
                }
            });
            $('.fixed-plugin .background-color .badge').click(function () {
                $(this).siblings().removeClass('active');
                $(this).addClass('active');
                var new_color = $(this).data('background-color');
                if ($sidebar.length != 0) {
                    $sidebar.attr('data-background-color', new_color);
                }
            });
            $('.fixed-plugin .img-holder').click(function () {
                $full_page_background = $('.full-page-background');
                $(this).parent('li').siblings().removeClass('active');
                $(this).parent('li').addClass('active');
                var new_image = $(this).find("img").attr('src');
                if ($sidebar_img_container.length != 0 && $(
                        '.switch-sidebar-image input:checked').length != 0) {
                    $sidebar_img_container.fadeOut('fast', function () {
                        $sidebar_img_container.css('background-image', 'url("' +
                            new_image + '")');
                        $sidebar_img_container.fadeIn('fast');
                    });
                }
                if ($full_page_background.length != 0 && $(
                        '.switch-sidebar-image input:checked').length != 0) {
                    var new_image_full_page = $('.fixed-plugin li.active .img-holder').find(
                        'img').data('src');
                    $full_page_background.fadeOut('fast', function () {
                        $full_page_background.css('background-image', 'url("' +
                            new_image_full_page + '")');
                        $full_page_background.fadeIn('fast');
                    });
                }
                if ($('.switch-sidebar-image input:checked').length == 0) {
                    var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr(
                        'src');
                    var new_image_full_page = $('.fixed-plugin li.active .img-holder').find(
                        'img').data('src');
                    $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                    $full_page_background.css('background-image', 'url("' + new_image_full_page +
                        '")');
                }
                if ($sidebar_responsive.length != 0) {
                    $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
                }
            });
            $('.switch-sidebar-image input').change(function () {
                $full_page_background = $('.full-page-background');
                $input = $(this);
                if ($input.is(':checked')) {
                    if ($sidebar_img_container.length != 0) {
                        $sidebar_img_container.fadeIn('fast');
                        $sidebar.attr('data-image', '#');
                    }
                    if ($full_page_background.length != 0) {
                        $full_page_background.fadeIn('fast');
                        $full_page.attr('data-image', '#');
                    }
                    background_image = true;
                } else {
                    if ($sidebar_img_container.length != 0) {
                        $sidebar.removeAttr('data-image');
                        $sidebar_img_container.fadeOut('fast');
                    }
                    if ($full_page_background.length != 0) {
                        $full_page.removeAttr('data-image', '#');
                        $full_page_background.fadeOut('fast');
                    }
                    background_image = false;
                }
            });
            $('.switch-sidebar-mini input').change(function () {
                $body = $('body');
                $input = $(this);
                if (md.misc.sidebar_mini_active == true) {
                    $('body').removeClass('sidebar-mini');
                    md.misc.sidebar_mini_active = false;
                    $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();
                } else {
                    $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');
                    setTimeout(function () {
                        $('body').addClass('sidebar-mini');
                        md.misc.sidebar_mini_active = true;
                    }, 300);
                }
                var simulateWindowResize = setInterval(function () {
                    window.dispatchEvent(new Event('resize'));
                }, 180);
                setTimeout(function () {
                    clearInterval(simulateWindowResize);
                }, 1000);
            });
        });
    });

</script>
<script>
    $(document).ready(function () {
        md.initDashboardPageCharts();
    });

</script>
<script>
    $(function () {
        $('#contact_table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ url("/contact_list") }}',
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'email',
                    name: 'email'
                },
                {
                    data: 'subject',
                    name: 'subject'
                },
                {
                    data: 'message',
                    name: 'message'
                }
            ]
        });
    });

</script>
<script>
    $(function () {
        $('#career_table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ url("/career_list") }}',
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'email',
                    name: 'email'
                },
                {
                    data: 'phone',
                    name: 'phone'
                },
                {
                    data: 'address',
                    name: 'address'
                },
                {
                    data: 'qualification',
                    name: 'qualification'
                },
                {
                    data: 'grade',
                    name: 'grade'
                },
                {
                    data: 'position',
                    name: 'position'
                },
                {
                    data: 'employeement',
                    name: 'employee'
                }
            ]
        });
    });

</script>
<script>
    $('#OpenImgUpload').click(function () {
        $('#imgupload').trigger('click');
    });

    function uploadprofilepic() {
        alert(this.value);
    }
    $(function () {
        $('input[name=mobile]').inputmask('999-999-9999', {
            'placeholder': '999-999-9999'
        })
    });

    function changepwassword() {
        var oldpwd = $("input[name='oldpwd']").val();
        var newpwd = $("input[name='newpwd']").val();
        var cnfpwd = $("input[name='cnfpwd']").val();

        var t = 0;

        $(".pwderror_span").html("");

        if (oldpwd != "") {
            $.ajax({
                url: '{{ URL::to("/adminoldpwdcheck") }}',
                type: "post",
                data: {
                    oldpwd: oldpwd
                },
                success: function (response) {
                    if (response == 0) {
                        t++;
                        $("#oldpwd_error").html("Old Password is Wrong!!");
                    }
                }
            });
            if (newpwd == "") {
                t++;
                $("#newpwd_error").html("Required!!");
            }
            if (cnfpwd == "") {
                t++;
                $("#cnfpwd_error").html("Required!!");
            }
            if (cnfpwd == "" && newpwd == "") {
                if (newpwd == cnfpwd) {
                    t++;
                    $("#cnfpwd_error").html("Confirm Password must be same as Password field!!");
                }
            }
            if (t == 0) {
                $.ajax({
                    url: '{{ URL::to("/adminoldpwdcheck") }}',
                    type: "post",
                    data: {
                        oldpwd: oldpwd
                    },
                    success: function (response) {
                        if (response == 0) {
                            return false;
                            $("#oldpwd_error").html("Old Password is Wrong!!");
                        } else {
                            return true;
                        }
                    }
                });
            } else {
                return false;
            }
        }
    }

    function profileupdate() {
        var name = $("input[name='name']").val();
        var mobile = $("input[name='mobile']").val();
        var email = $("input[name='email']").val();
        var username = $("input[name='username']").val();
        var first_name = $("input[name='first_name']").val();
        var last_name = $("input[name='last_name']").val();
        var address = $("input[name='address']").val();
        var city = $("input[name='city']").val();
        var country = $("input[name='country']").val();
        var postal = $("input[name='postal']").val();
        var about = $("textarea[name='about']").val();

        var evalidate =
            /^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
        var alpha = /^[a-zA-Z\s]+$/;
        var alphaws = /^[a-zA-Z]+$/;

        var t = 0;

        $(".error_span").html("");

        if (first_name == "") {
            t++;
            $("#first_name_error").html("Required!!");
        } else {
            if (first_name.match(alpha)) {} else {
                t++;
                $("#first_name_error").html("Only Alphabets and Space Allowed!!");
            }
        }
        if (last_name == "") {
            t++;
            $("#last_name_error").html("Required!!");
        } else {
            if (last_name.match(alpha)) {} else {
                t++;
                $("#last_name_error").html("Only Alphabets and Space Allowed!!");
            }
        }
        if (email == "") {
            t++;
            $("#email_error").html("Required!!");
        } else {
            if (email.match(evalidate)) {
                $.ajax({
                    url: '{{ URL::to("/adminemailcheck") }}',
                    type: "post",
                    data: {
                        email: email
                    },
                    success: function (response) {
                        if (response != 0) {
                            $("#email_error").html("Email Already Exists!!");
                            return false;
                        }
                    }
                });
            } else {
                t++;
                $("#email_error").html("Invalid Email Id!!");
            }
        }
        if (name == "") {
            t++;
            $("#name_error").html("Required!!");
        } else {
            if (name.match(alphaws)) {} else {
                t++;
                $("#name_error").html("Only Alphabets Allowed!!");
            }
        }
        if (mobile == "") {
            t++;
            $("#mobile_error").html("Required!!");
        } else {
            $.ajax({
                url: '{{ URL::to("/adminmobilecheck") }}',
                type: "post",
                data: {
                    mobile: mobile
                },
                success: function (response) {
                    if (response != 0) {
                        $("#mobile_error").html("Mobile Already Exists!!");
                        return false;
                    }
                }
            });
        }
        if (username == "") {
            t++;
            $("#username_error").html("Required!!");
        } else {
            $.ajax({
                url: '{{ URL::to("/adminusernamecheck") }}',
                type: "post",
                data: {
                    username: username
                },
                success: function (response) {
                    if (response != 0) {
                        $("#username_error").html("Username Already Exists!!");
                        return false;
                    }
                }
            });
        }
        if (address == "") {
            t++;
            $("#address_error").html("Required!!");
        }
        if (city == "") {
            t++;
            $("#city_error").html("Required!!");
        }
        if (country == "") {
            t++;
            $("#country_error").html("Required!!");
        }
        if (postal == "") {
            t++;
            $("#postal_error").html("Required!!");
        }
        if (about == "") {
            t++;
            $("#about_error").html("Required!!");
        }
        if (t == 0) {
            return true;
        } else {
            return false;
        }
    }

    function uploadadminprofile_pic(e) {
        var formData = $("#imgupload").val();
        $.ajax({
            url: '{{ url("/uploadadminprofilepic") }}',
            type: 'POST',
            data: formData,
            success: function (result) {
                alert("Profile Photo Updated Successfully!!");
            },
            error: function (data) {
                console.log(data);
            }
        });
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
