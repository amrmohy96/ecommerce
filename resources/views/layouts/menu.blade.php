<!-- BEGIN: Main Menu-->

<div class="main-menu material-menu menu-static menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="user-profile">
        @auth
            <div class="user-info text-center pt-1 pb-1">
                <img class="user-img img-fluid rounded-circle"
                     src="{{asset('app-assets/images/portrait/small/avatar-s-1.png')}}"/>
                <div class="name-wrapper d-block dropdown">
                    <a class="white dropdown-toggle ml-2" id="user-account" href="#"
                       data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false"><span
                            class="user-name">{{Auth::user()->name ?? ''}}</span>
                    </a>
                    <div class="dropdown-menu arrow" aria-labelledby="dropdownMenuLink"><a class="dropdown-item"><i
                                class="material-icons align-middle mr-1">person</i><span
                                class="align-middle">Profile</span></a><a
                            class="dropdown-item"><i
                                class="material-icons align-middle mr-1">message</i><span
                                class="align-middle">Messages</span></a><a class="dropdown-item"><i
                                class="material-icons align-middle mr-1">attach_money</i><span
                                class="align-middle">Balance</span></a><a class="dropdown-item"><i
                                class="material-icons align-middle mr-1">settings</i><span
                                class="align-middle">Settings</span></a><a class="dropdown-item"><i
                                class="material-icons align-middle mr-1">power_settings_new</i><span
                                class="align-middle">Log Out</span></a>
                    </div>
                </div>
            </div>
        @endauth
    </div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="nav-item   pull-up">
                <a>
                    <i class="material-icons">library_books</i>
                    <span class="menu-title" data-i18n="{{__('site.categories')}}"> {{__('site.categories')}} </span>
                </a>
            </li>

            @php
                $cats = \App\Models\Admin\Category::all();
            @endphp
            @foreach($cats as $key => $cat)
                <li style="" class="nav-item  pull-up">
                    <a>
                        <i class="material-icons">menu</i>
                        <span class="menu-title"
                              data-i18n="Navbars">
                            {{$cat->name}}
                        </span>
                    </a>
                    @foreach($cat->subcategories as $subcategory)
                        <ul class="menu-content">
                            <li>
                                <a class="menu-item" href="{{route('shop.products',$subcategory->id)}}">
                                    <i class="material-icons">
                                    </i><span data-i18n="{{$subcategory->name}}">{{$subcategory->name}}</span></a>
                            </li>
                        </ul>
                    @endforeach
                </li>
            @endforeach
        </ul>
    </div>
</div>

<!-- END: Main Menu-->
