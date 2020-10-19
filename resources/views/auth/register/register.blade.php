@include('auth.register.header')
<body class="vertical-layout vertical-menu 1-column   blank-page" data-open="click" data-menu="vertical-menu"
      data-col="1-column">
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-header row">
    </div>
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-body">
            <section class="row flexbox-container">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="col-lg-4 col-md-8 col-10 box-shadow-2 p-0">
                        <div class="card border-grey border-lighten-3 px-2 py-2 m-0">
                            <div class="card-header border-0">
                                <div class="card-title text-center">
                                    <img src="{{asset('app-assets/images/logo/logo-dark.png')}}" alt="branding logo">
                                </div>
                                <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2"><span>Create Account</span>
                                </h6>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <form class="form-horizontal form-simple" method="POST"
                                          action="{{ route('register') }}">
                                        @csrf


                                        <fieldset class="form-group position-relative has-icon-left mb-1">
                                            <input id="name" type="text" placeholder="{{ __('Name') }}"
                                                   class="form-control @error('name') is-invalid @enderror"
                                                   name="name" value="{{ old('name') }}" required
                                                   autocomplete="name" autofocus>

                                            @error('name')
                                            <span class="invalid-feedback"
                                                  role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                            <div class="form-control-position">
                                                <i class="la la-user"></i>
                                            </div>
                                        </fieldset>


                                        <fieldset class="form-group position-relative has-icon-left mb-1">
                                            <input id="email" type="email" placeholder=" {{ __('E-Mail Address') }}"
                                                   class="form-control @error('email') is-invalid @enderror"
                                                   name="email" value="{{ old('email') }}" required
                                                   autocomplete="email" autofocus>
                                            <div class="form-control-position">
                                                <i class="la la-envelope"></i>
                                            </div>
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong></span>
                                            @enderror
                                        </fieldset>

                                        <fieldset class="form-group position-relative has-icon-left mb-1">
                                            <input id="password" type="password" placeholder="{{ __('Password') }}"
                                                   class="form-control @error('password') is-invalid @enderror"
                                                   name="password" required autocomplete="current-password">
                                            <div class="form-control-position">
                                                <i class="la la-key"></i>
                                            </div>
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                   <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </fieldset>


                                        <fieldset class="form-group position-relative has-icon-left mb-1">
                                            <input id="password" type="password"
                                                   placeholder="{{ __('Confirm Password') }}"
                                                   class="form-control"
                                                   name="password_confirmation" required autocomplete="new-password">
                                            <div class="form-control-position">
                                                <i class="la la-key"></i>
                                            </div>
                                        </fieldset>

                                        <button type="submit" class="btn btn-info btn-block"><i
                                                class="ft-unlock"></i> {{ __('Register') }}</button>
                                    </form>
                                </div>
                                <p class="text-center">Already have an account ? <a href="{{route('login')}}"
                                                                                    class="card-link">{{__('Login')}}</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>

@include('auth.register.footer')
</body>
</html>
