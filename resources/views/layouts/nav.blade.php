<!-- BEGIN: Header-->
<nav
    class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-dark bg-gradient-y-dark  navbar-border navbar-shadow navbar-brand-center">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mobile-menu d-md-none mr-auto"><a
                        class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i
                            class="ft-menu font-large-1"></i></a></li>
                <li class="nav-item"><a class="navbar-brand" href="{{route('home')}}">
                        <img class="brand-logo"
                             alt="modern admin logo"
                             src="{{asset('app-assets/images/logo/logo.png')}}">
                        <h3 class="brand-text">Modern</h3>
                    </a>
                </li>
                <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse"
                                                  data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a></li>
            </ul>
        </div>
        <div class="navbar-container content">
            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs"
                                                              href="#"><i class="ft-menu"></i></a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand" href="#"><i
                                class="ficon ft-maximize"></i></a></li>
                    <li class="nav-item nav-search"><a class="nav-link nav-link-search" href="#"><i
                                class="ficon ft-search"></i></a>
                        <div class="search-input">
                            <input class="input" type="text" placeholder="Explore Modern..." tabindex="0"
                                   data-search="template-list">
                            <div class="search-input-close"><i class="ft-x"></i></div>
                            <ul class="search-list"></ul>
                        </div>
                    </li>
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
                    @if (Route::has('login'))
                        @auth
                            <user-notifications></user-notifications>
                            <li class="dropdown dropdown-notification nav-item">
                                <a class="nav-link nav-link-label" href="{{route('cart.show')}}">
                                    <i class="ft-shopping-cart  icons-small"></i>
                                    <span class="badge badge-pill badge-danger badge-up badge-glow">
                                        {{Cart::count() ?? 0}}
                                    </span>
                                </a>
                            </li>


                            <li class="dropdown dropdown-notification nav-item">
                                <a class="nav-link nav-link-label" href="{{route('user.wishList')}}">
                                    <i class="ft-heart icons-small"></i>
                                    <span class="countWish badge badge-pill badge-danger badge-up badge-glow">
                                        {{count(\App\Wishlist::where('user_id',Auth::id())->get()) ?? '' }}
                                    </span>
                                </a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                                </li>
                                @endif
                                @endauth
                                @endif
                                </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- END: Header-->
