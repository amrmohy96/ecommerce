<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
          content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords"
          content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    {{--- laravel echo ---}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="userId" content="{{ Auth::check() ? auth()->id() : '' }}">
    <title></title>
    <link rel="apple-touch-icon" href="{{asset('app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('app-assets/images/ico/favicon.ico')}}">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/fonts/material-icons/material-icons.css')}}">
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/material-vendors-rtl.min.css')}}">
    <!-- END: Vendor CSS-->


    @if (app()->getLocale() == 'ar')

    <!-- BEGIN: Theme CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/material.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/components.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/bootstrap-extended.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/material-extended.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/material-colors.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/custom-rtl.css')}}">
        <!-- END: Theme CSS-->

        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css"
              href="{{asset('app-assets/css-rtl/core/menu/menu-types/material-vertical-content-menu.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/pages/single-page.css')}}">
        <!-- END: Page CSS-->
        <link rel="stylesheet" href="{{ asset('app-assets/css-rtl/pages/ecommerce-cart.css')}}">

        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/pages/ecommerce-shop.css')}}">

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style-rtl.css')}}">
        <!-- END: Custom CSS-->
    @else


    <!-- BEGIN: Theme CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/material.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/components.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/bootstrap-extended.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/material-extended.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/material-colors.css')}}">
        <!-- END: Theme CSS-->


        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css"
              href="{{asset('app-assets/css/core/menu/menu-types/material-vertical-content-menu.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/single-page.css')}}'">
        <!-- END: Page CSS-->
        <link rel="stylesheet" href="{{ asset('app-assets/css/pages/ecommerce-cart.css')}}">

        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/ecommerce-shop.css')}}">
        <!-- BEGIN: Custom CSS-->

        <!-- END: Custom CSS-->
    @endif
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/extensions/toastr.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/extensions/toastr.css')}}">
    <link rel="stylesheet" href="{{ asset('app-assets/js/scripts/noty/noty.css')}}">
    <link rel="stylesheet" href="{{ asset('app-assets/css/plugins/extensions/ex-component-swiper.css')}}">
    <link rel="stylesheet" href="{{ asset('app-assets/vendors/css/extensions/swiper.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/material-vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/extensions/nouislider.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/ui/prism.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/forms/icheck/icheck.css')}}">


    <link rel="stylesheet" type="text/css"
          href="{{asset('app-assets/css/core/menu/menu-types/material-vertical-menu-modern.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/extensions/noui-slider.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/colors/palette-noui.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/forms/checkboxes-radios.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/extensions/toastr.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/extensions/toastr.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/extensions/sweetalert2.min.css')}}">

    <link rel="stylesheet" href="{{ asset('app-assets/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css')}}">
    <link href="https://lowercolumbia.edu/_resources/plugins/royal-slider/templates/assets/royalslider/royalslider.css"
          rel="stylesheet">
    <link
        href="https://lowercolumbia.edu/_resources/plugins/royal-slider/templates/assets/royalslider/skins/universal/rs-universal.css"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/js/scripts/noty/noty.css')}}">

    <style>
        .tito {
            position: relative;
            display: inline-block;
        }

        .tito .titotext {
            visibility: hidden;
            width: 150px;
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

        #gallery-2 {
            width: 100%;
            background: transparent;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        .rsUni, .rsUni .rsOverflow, .rsUni .rsSlide, .rsUni .rsVideoFrameHolder, .rsUni .rsThumbs {
            background: transparent;
        }

        .rsUni .rsThumb {
            height: 130px;

        }

        .rsUni .rsThumbsVer {
            width: 120px;
        }

        .rsUni .rsFullscreenBtn {
            display: none;
        }

        /*Royal Slider*/
        #gallery-2 {
            height: 455px !important;
        }

        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }


        /**
* The CSS shown here will not be introduced in the Quickstart guide, but shows
* how you can use CSS to style your Element's container.
*/
        .StripeElement {
            box-sizing: border-box;

            height: 40px;
            width: 100%;
            padding: 10px 12px;

            border: 1px solid transparent;
            border-radius: 4px;
            background-color: white;

            box-shadow: 0 1px 3px 0 #e6ebf1;
            -webkit-transition: box-shadow 150ms ease;
            transition: box-shadow 150ms ease;
        }

        .StripeElement--focus {
            box-shadow: 0 1px 3px 0 #cfd7df;
        }

        .StripeElement--invalid {
            border-color: #fa755a;
        }

        .StripeElement--webkit-autofill {
            background-color: #fefde5 !important;
        }

    </style>

</head>
<!-- END: Head-->
