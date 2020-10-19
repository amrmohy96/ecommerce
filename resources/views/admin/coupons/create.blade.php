@extends('admin.layouts.main')
@section('bread_crumb')
    <div class="row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <h3 class="content-header-title white">{{__('site.coupons')}}</h3>
            <div class="row breadcrumbs-top">
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{__('site.ecommerce')}}</a>
                        </li>
                        <li class="breadcrumb-item"><a
                                href="{{route('coupons.index')}}">{{__('site.coupons')}}</a>
                        </li>
                        <li class="breadcrumb-item active">{{__('site.add_coupon')}}
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="content-header-right col-md-3 col-12">
        </div>
    </div>
@endsection

@section('content')
    <section class="users-edit">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
                            <form action="{{route('coupons.store')}}" method="POST"
                                  id="form-add-contact" class="contact-input">
                                @csrf
                                <div class="row">
                                    @foreach (config('translatable.locales') as $locale)
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <input type="text" name="{{ $locale }}[coupon]"
                                                           id="contact-name"
                                                           class="contact-name form-control" required
                                                           placeholder="{{__('site.' . $locale . '.coupon')}}"
                                                           value="{{ old($locale . '.coupon') }}">
                                                    @error(''. $locale .'.coupon')
                                                    <small class="text-danger">{{$message}}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="row">
                                    @foreach (config('translatable.locales') as $locale)
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <input type="text" name="{{ $locale }}[discount]"
                                                           id="contact-name"
                                                           class="contact-name form-control" required
                                                           placeholder="{{__('site.' . $locale . '.discount')}}"
                                                           value="{{ old($locale . '.discount') }}">
                                                    @error(''. $locale .'.discount')
                                                    <small class="text-danger">{{$message}}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                <div class="row">
                                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                        <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">
                                            {{__('site.save_changes')}}
                                        </button>
                                        <a href="{{route('coupons.index')}}" type="reset"
                                           class="btn btn-light">{{__('site.cancel')}}</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
