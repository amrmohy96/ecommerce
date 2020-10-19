<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
          content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords"
          content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    {{-- laravel echo --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{__('site.ecommerce')}}</title>
    <link rel="apple-touch-icon" href="{{asset('app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('app-assets/images/ico/favicon.ico')}}">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/fonts/material-icons/material-icons.css')}}">


    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css"
          href="{{asset('app-assets/vendors/css/pickers/daterange/daterangepicker.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/weather-icons/climacons.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/fonts/meteocons/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/charts/morris.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/charts/chartist.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('app-assets/vendors/css/charts/chartist-plugin-tooltip.css')}}">
    <!-- END: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/fonts/simple-line-icons/style.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/js/scripts/noty/noty.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/ui/prism.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/forms/tags/tagging.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/forms/selects/selectize.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('app-assets/vendors/css/forms/selects/selectize.default.css')}}">


    @if (app()->getLocale() == 'ar')
    <!-- BEGIN: Theme CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/material-vendors-rtl.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/material.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/components.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/bootstrap-extended.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/material-extended.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/material-colors.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/plugins/forms/wizard.css')}}">
        <link rel="stylesheet" type="text/css"
              href="{{asset('app-assets/css-rtl/plugins/pickers/daterange/daterange.css')}}">

        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/pages/users.css')}}">

        <link rel="stylesheet" type="text/css"
              href="{{asset('app-assets/css-rtl/plugins/forms/selectize/selectize.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/core/colors/palette-tooltip.css')}}">

        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/custom-rtl.css')}}">


        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css"
              href="{{asset('app-assets/css-rtl/core/menu/menu-types/material-vertical-menu-modern.css')}}">
        <link rel="stylesheet" type="text/css"
              href="{{asset('app-assets/css-rtl/core/menu/menu-types/material-horizontal-menu.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/core/colors/palette-gradient.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/pages/timeline.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/pages/dashboard-ecommerce.css')}}">

        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/core/colors/palette-noui.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/pages/ecommerce-shop.css')}}">
        <link rel="stylesheet" type="text/css"
              href="{{asset('app-assets/css-rtl/plugins/forms/checkboxes-radios.css')}}">
        <!-- END: Page CSS-->

        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style-rtl.css')}}">
        <!-- END: Custom CSS-->
    @else
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/material-vendors.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/material.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/components.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/bootstrap-extended.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/material-extended.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/material-colors.css')}}">
        <!-- END: Theme CSS-->
        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css"
              href="{{asset('app-assets/css/core/menu/menu-types/material-vertical-menu-modern.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/colors/palette-gradient.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/timeline.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/dashboard-ecommerce.css')}}">
        <!-- END: Page CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/page-users.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/forms/wizard.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/forms/selectize/selectize.css')}}">
        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/colors/palette-tooltip.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">

        <!-- BEGIN: Vendor CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/colors/palette-noui.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/ecommerce-shop.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/forms/checkboxes-radios.css')}}">
    @endif
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/extensions/nouislider.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/ui/prism.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/forms/icheck/icheck.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('app-assets/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css')}}">
    <!-- BEGIN: ALERT CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/extensions/toastr.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/extensions/toastr.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/extensions/sweetalert2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/ui/plyr.min.css')}}">


    <!-- END: ALERT CSS-->

    <style>
        input::-webkit-input-placeholder,
        textarea::-webkit-input-placeholder {
            color: black !important;
        }

        input:-moz-placeholder,
        textarea:-moz-placeholder {
            color: black !important;
        }

        input::-moz-placeholder,
        textarea::-moz-placeholder {
            color: black !important;
        }

        input:-ms-input-placeholder,
        textarea:-ms-input-placeholder {
            color: black !important;
        }

        .tito {
            position: relative;
            display: inline-block;
        }

        .tito .titotext {
            visibility: hidden;
            width: 80px;
            background-color: black;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 5px 0;

            /* Position the tooltip */
            position: absolute;
            z-index: 1;
            bottom: 100%;
            left: 50%;
            margin-left: -60px;
        }

        .tito:hover .titotext {
            visibility: visible;
        }
    </style>

</head>
