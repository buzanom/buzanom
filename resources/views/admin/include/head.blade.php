<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ URL::asset('/') }}assets/general/logo.png">
    <link rel="icon" type="image/png" href="{{ URL::asset('/') }}assets/general/logo-favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Buzanom-Admin | <?php echo $title; ?>
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="{{ URL::asset('/') }}assets/admin/css/material-dashboard.min.css?v=2.1.0" /> -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/') }}assets/admin/css/material-dashboard-2.0.0.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/') }}assets/admin/demo/demo.css" />
    <style>
        .fixed-plugin {
            position: fixed;
            top: 10%;
            right: 0;
            width: 64px;
            background: rgba(0, 0, 0, 0.3);
            z-index: 1031;
            border-radius: 8px 0 0 8px;
            text-align: center;
        }

        .fixed-plugin .dropdown .dropdown-menu {
            display: none;
            top: -40px !important;
            opacity: 1 !important;
            left: -303px !important;
            -webkit-transform-origin: 100% 0;
            transform-origin: 100% 0;
        }

        .logo a img{
            width:50%;
        }
        .dataTable{
            width:100% !important;
        }
    </style>
</head>
