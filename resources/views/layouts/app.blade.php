<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="{{LaravelLocalization::getCurrentLocaleDirection() }}">

@include('layouts.header')

<body class="vertical-layout vertical-content-menu material-vertical-layout material-layout 2-columns   fixed-navbar"
      data-open="click" data-menu="vertical-content-menu" data-col="2-columns">
<div id="app">
    @include('layouts.nav')
</div>
<div class="app-content content">

    <div class="content-overlay"></div>
    <div class="content-wrapper">
        @include('layouts.menu')
        @yield('front_content')
    </div>
</div>
@include('layouts.footer')
@include('incs.session')

</body>
<!-- END: Body-->
</html>
