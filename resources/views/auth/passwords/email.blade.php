@include('auth.login.header')

<body class="vertical-layout vertical-menu 1-column   blank-page" data-open="click" data-menu="vertical-menu"
      data-col="1-column">
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section class="row flexbox-container">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="col-lg-4 col-md-8 col-10 box-shadow-2 p-0">
                        <div class="card border-grey border-lighten-3 px-2 py-2 m-0">
                            <div class="card-header border-0 pb-0">
                                <div class="card-title text-center">
                                    <img src="{{asset('app-assets/images/logo/logo-dark.png')}}" alt="branding logo">
                                </div>
                                <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2"><span>We will send you a link
                                            to reset password.</span></h6>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif

                                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                                        @csrf

                                        <fieldset class="form-group position-relative has-icon-left mb-1">
                                            <input id="email" type="email" placeholder="{{ __('E-Mail Address') }}"
                                                   class="form-control @error('email') is-invalid @enderror"
                                                   name="email" value="{{ old('email') }}" required
                                                   autocomplete="email" autofocus>

                                            @error('email')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                            <div class="form-control-position">
                                                <i class="la la-envelope"></i>
                                            </div>
                                        </fieldset>

                                        <button type="submit" class="btn btn-info btn-block"><i class="ft-unlock"></i>
                                            {{ __('Send Password Reset Link') }}
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="card-footer border-0">
                                <p class="float-sm-left text-center"><a href="{{route('login')}}" class="card-link">Login</a>
                                </p>
                                <p class="float-sm-right text-center">New to Modern ? <a href="{{route('register')}}"
                                                                                         class="card-link">Create
                                        Account</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>
<!-- END: Content-->
@include('auth.login.footer')
</body>
<!-- END: Body-->

