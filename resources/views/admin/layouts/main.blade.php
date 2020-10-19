<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="{{LaravelLocalization::getCurrentLocaleDirection() }}">
<!-- BEGIN: Head-->
@include('admin.layouts.header')

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern material-vertical-layout material-layout 2-columns   fixed-navbar"
      data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

{{--@include('admin.layouts.nav')--}}

<!-- BEGIN: Nav-->
<nav
    class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-dark  navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mobile-menu d-lg-none mr-auto"><a
                        class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i
                            class="ft-menu font-large-1"></i></a></li>
                <li class="nav-item mr-auto"><a class="navbar-brand" href="{{route('admin.dashboard')}}"><img
                            class="brand-logo"
                            alt="modern admin logo"
                            src="{{asset('app-assets/images/logo/logo.png')}}">
                        <h3 class="brand-text">Modern</h3>
                    </a></li>
                <li class="nav-item d-none d-lg-block nav-toggle"><a class="nav-link modern-nav-toggle pr-0"
                                                                     data-toggle="collapse"><i
                            class="toggle-icon ft-toggle-right font-medium-3 white"
                            data-ticon="ft-toggle-right"></i></a></li>
                <li class="nav-item d-lg-none"><a class="nav-link open-navbar-container" data-toggle="collapse"
                                                  data-target="#navbar-mobile"><i
                            class="material-icons mt-50">more_vert</i></a></li>
            </ul>
        </div>
        <div class="navbar-container content">
            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle" href="#"><i
                                class="ft-menu"></i></a></li>
                    <li class="nav-item nav-search"><a class="nav-link nav-link-search" href="#"><i
                                class="material-icons">search</i></a>
                        <div class="search-input">
                            <input class="input round form-control search-box" type="text"
                                   placeholder="Explore Modern Admin" tabindex="0" data-search="template-list">
                            <div class="search-input-close"><i class="ft-x"></i></div>
                            <ul class="search-list"></ul>
                            <div class="dropdown-menu arrow">
                                <div class="dropdown-item">
                                    <input class="round form-control" type="text" placeholder="Search Here">
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link nav-link-expand mx-md-1 mx-0" href="#"><i
                                class="ficon ft-maximize"></i></a></li>
                </ul>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link"
                                                                       id="dropdown-flag" href="#"
                                                                       data-toggle="dropdown" aria-haspopup="true"
                                                                       aria-expanded="false"><i
                                class="flag-icon flag-icon-{{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'eg' : 'us'}}"></i>{{LaravelLocalization::getCurrentLocaleName()}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-flag">

                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <a class="dropdown-item" data-language="{{ $localeCode }}" rel="alternate" hreflang=""
                                   href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    <i class="flag-icon flag-icon-{{$localeCode == 'en' ? 'us': 'eg'}}"></i> {{ $properties['native'] }}
                                    <span class="selected-language"></span>
                                </a>
                            @endforeach
                        </div>
                    </li>
                    
                    <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link"
                                                                   href="#" data-toggle="dropdown"><span
                                class="mr-1 user-name text-bold-700">{{auth()->user()->name ?? ''}}</span><span
                                class="avatar avatar-online"><img
                                    src="{{asset('/app-assets/images/portrait/small/avatar-s-19.png')}}"
                                    alt="avatar"><i></i></span></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('admin.logout')}}"><i class="material-icons">power_settings_new</i>
                                Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- END: Nav-->

<!-- BEGIN: Main Menu-->

<div class="main-menu material-menu menu-fixed menu-dark  menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="user-profile">
        <div class="user-info text-center pb-2"><img class="user-img img-fluid rounded-circle w-25 mt-2"
                                                     src="{{asset('/app-assets/images/portrait/small/avatar-s-1.png')}}"
                                                     alt=""/>
            <div class="name-wrapper d-block dropdown mt-1"><a class="white dropdown-toggle ml-2" id="user-account"
                                                               href="#" data-toggle="dropdown" aria-haspopup="true"
                                                               aria-expanded="false"><span
                        class="user-name">{{auth()->user()->name ?? ''}}</span></a>
                <div class="dropdown-menu arrow">
                    <a class="dropdown-item" href="{{route('admin.logout')}}">
                        <i
                            class="material-icons align-middle mr-1">power_settings_new</i>
                        <span class="align-middle">Log Out</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li><a href="{{route('admin.dashboard')}}"><i
                        class="material-icons">settings_input_svideo</i><span
                        class="menu-title" data-i18n="Ecommerce">{{__('site.ecommerce')}}</span></a>
            </li>
            <li class=" nav-item"><a><i class="material-icons">view_stream</i><span class="menu-title"
                                                                                    data-i18n="Categories">{{__('site.all_categories')}}</span></a>
                <ul class="menu-content">

                    <li>
                        <a href="{{route('categories.index')}}" class="menu-item">
                            <i class="material-icons">layers</i>
                            <span data-i18n="Category">{{__('site.categories')}}</span>
                        </a>
                    </li>
                    <li>
                        <a class="menu-item" href="{{route('subcategories.index')}}">
                            <i class="material-icons">layers</i>
                            <span data-i18n="Sub Category">{{__('site.sub_categories')}}</span>
                        </a>
                    </li>

                    <li>
                        <a class="menu-item" href="{{route('brands.index')}}">
                            <i class="material-icons">layers</i>
                            <span data-i18n="Brand">{{__('site.brands')}}</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class=" nav-item"><a><i class="material-icons">card_membership</i><span class="menu-title"
                                                                                        data-i18n="coupons">{{__('site.coupons')}}</span></a>
                <ul class="menu-content">

                    <li>
                        <a href="{{route('coupons.index')}}" class="menu-item">
                            <i class="material-icons">redeem</i>
                            <span data-i18n="coupon"> {{__('site.coupon')}} </span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class=" nav-item"><a><i class="material-icons">dashboard</i><span class="menu-title"
                                                                                  data-i18n="products list">{{__('site.all_products')}}</span></a>
                <ul class="menu-content">

                    <li>
                        <a href="{{route('products.index')}}" class="menu-item">
                            <i class="material-icons">view_quilt</i>
                            <span data-i18n="coupon"> {{__('site.products')}} </span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class=" nav-item"><a><i class="material-icons">done</i><span
                        class="menu-title" data-i18n="Order">{{__('site.all_orders')}}</span></a>
                <ul class="menu-content">

                    <li>
                        <a href="{{route('orders.index')}}" class="menu-item">
                            <i class="material-icons">done</i>
                            <span data-i18n="Order"> {{__('site.orders')}} </span>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('orders.accepted')}}" class="menu-item">
                            <i class="material-icons">done</i>
                            <span data-i18n="Order"> {{__('site.accepted_orders')}} </span>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('orders.canceled')}}" class="menu-item">
                            <i class="material-icons">done</i>
                            <span data-i18n="Order"> {{__('site.canceled_orders')}} </span>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('orders.processed')}}" class="menu-item">
                            <i class="material-icons">done</i>
                            <span data-i18n="Order"> {{__('site.processed_orders')}} </span>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('orders.succeeded')}}" class="menu-item">
                            <i class="material-icons">done</i>
                            <span data-i18n="Order"> {{__('site.succeeded_orders')}} </span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a><i class="ft-users"></i><span class="menu-title"
                                                                   data-i18n="users">{{__('site.user_role')}}</span></a>
                <ul class="menu-content">
                    <li>
                        <a href="{{route('users.index')}}" class="menu-item">
                            <i class="la la-users"></i>
                            <span data-i18n="user"> {{__('site.all_users')}} </span>
                        </a>
                    </li>
                    <li>
                        <a class="menu-item">
                            <i class="ft-plus"></i>
                            <span data-i18n="user"> {{__('site.create_user')}} </span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>

<!-- END: Main Menu-->


<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-header row">
        <div class="content-header-dark bg-img col-12">
            @yield('bread_crumb')
        </div>
    </div>
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-body">
            @yield('content')
        </div>
    </div>
</div>
<!-- END: Content-->


<div class="sidenav-overlay"></div>
<div class="drag-target"></div>
@include('admin.layouts.footer')
@include('incs.session')
</body>
<!-- END: Body-->

</html>
