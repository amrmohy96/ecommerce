@extends('admin.layouts.main')
@section('bread_crumb')
    <div class="row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <h3 class="content-header-title white">{{__('site.all_users')}}</h3>
            <div class="row breadcrumbs-top">
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{__('site.ecommerce')}}</a>
                        </li>
                        <li class="breadcrumb-item"><a
                                href="{{route('users.index')}}">{{__('site.users')}}</a>
                        </li>
                        <li class="breadcrumb-item active">{{__('site.add_user')}}
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
    <div class="app-content container center-layout mt-2">

        <div class="row">
            <div class="col-12">
                <div class="card bg-gradient-x2-black">
                    <div class="card-header">
                        <h4 class="card-title">{{__('site.add_user')}}</h4>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body">
                            <form id="myForm" action="{{route('users.store')}}"
                                  class="steps-validation wizard-circle" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                @method('post')

                                <fieldset>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="name"
                                                       class="form-control border"
                                                       placeholder="name of user"
                                                       value="{{ old('name') }}">
                                                @error('name')
                                                <small class="text-danger">{{$message}}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="email" name="email"
                                                       class="form-control border"
                                                       placeholder="email of user"
                                                       value="{{ old('email') }}">
                                                @error('email')
                                                <small class="text-danger">{{$message}}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                </fieldset>

                                <fieldset>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="password" name="password"
                                                       class="form-control border"
                                                       placeholder="password of user"
                                                       value="{{ old('password') }}">
                                                @error('password')
                                                <small class="text-danger">{{$message}}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="phone"
                                                       class="form-control border"
                                                       placeholder="phone of user"
                                                       value="{{ old('phone') }}">
                                                @error('phone')
                                                <small class="text-danger">{{$message}}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                </fieldset>
                                <fieldset>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="d-inline-block custom-control custom-checkbox">
                                                    <input type="checkbox" value="1" name="product"
                                                           class="custom-control-input" id="product">
                                                    <label class="custom-control-label"
                                                           for="product">{{__('site.product')}}</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="d-inline-block custom-control custom-checkbox">
                                                    <input type="checkbox" value="1" name="order"
                                                           class="custom-control-input" id="order">
                                                    <label class="custom-control-label"
                                                           for="order">{{__('site.order')}}</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="d-inline-block custom-control custom-checkbox">
                                                    <input type="checkbox" value="1" name="category"
                                                           class="custom-control-input" id="category">
                                                    <label class="custom-control-label"
                                                           for="category">{{__('site.category')}}</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="d-inline-block custom-control custom-checkbox">
                                                    <input type="checkbox" value="1" name="coupon"
                                                           class="custom-control-input" id="coupon">
                                                    <label class="custom-control-label"
                                                           for="coupon">{{__('site.coupon')}}</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="d-inline-block custom-control custom-checkbox">
                                                    <input type="checkbox" value="1" name="brand"
                                                           class="custom-control-input" id="brand">
                                                    <label class="custom-control-label"
                                                           for="brand">{{__('site.brand')}}</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="d-inline-block custom-control custom-checkbox">
                                                    <input type="checkbox" value="1" name="role"
                                                           class="custom-control-input" id="role">
                                                    <label class="custom-control-label"
                                                           for="role">{{__('site.role')}}</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </fieldset>
                                <div class="row">
                                    <div class="col-12 d-flex flex-sm-row  flex-column justify-content-end mt-1">
                                        <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1 text-white">
                                            {{__('site.save_changes')}}
                                        </button>
                                        <a href="{{route('users.index')}}" type="reset"
                                           class="btn btn-light">{{__('site.cancel')}}</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
