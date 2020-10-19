<nav
    class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-light">
    <div class="navbar-wrapper">
        <div class="navbar-header">
        </div>
        <div class="navbar-container content">
            <div class="collapse navbar-collapse" id="navbar-mobile">
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
                </ul>
            </div>
        </div>
    </div>
</nav>
