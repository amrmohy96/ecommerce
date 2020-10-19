@extends('admin.layouts.main')
@section('bread_crumb')
    <div class="row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <h3 class="content-header-title white">{{__('site.products')}}</h3>
            <div class="row breadcrumbs-top">
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{__('site.ecommerce')}}</a>
                        </li>
                        <li class="breadcrumb-item"><a
                                href="{{route('products.index')}}">{{__('site.products')}}</a>
                        </li>
                        <li class="breadcrumb-item active">{{__('site.add_product')}}
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


        <!-- Form wizard with number tabs section start -->
        <section id="number-tabs">
            <div class="row">
                <div class="col-12">
                    <div class="card bg-gradient-x2-black">
                        <div class="card-header">
                            <h4 class="card-title">{{__('site.add_product')}}</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body">
                                <form id="myForm" action="{{route('products.store')}}"
                                      class="steps-validation wizard-circle" method="post"
                                      enctype="multipart/form-data">
                                @csrf
                                @method('post')
                                <!-- Step 1 -->
                                    <h6>Step 1</h6>
                                    <fieldset>
                                        <div class="row">
                                            @foreach (config('translatable.locales') as $locale)
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" name="{{ $locale }}[name]"
                                                               id="{{ $locale }}[name]"
                                                               class="form-control border text-black "
                                                               placeholder="{{__('site.' . $locale . '.name')}}"
                                                               value="{{ old($locale . '.name') }}">
                                                        @error(''. $locale .'.name')
                                                        <small class="text-danger">{{$message}}</small>
                                                        @enderror

                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>

                                        <div class="row">
                                            @foreach (config('translatable.locales') as $locale)
                                                <div class="col-md-6">
                                                    <div class="form-group">

                                                        <input type="text" name="{{ $locale }}[code]"
                                                               id="{{ $locale }}[code]"
                                                               class="form-control border"
                                                               placeholder="{{__('site.' . $locale . '.code')}}"
                                                               value="{{ old($locale . '.code') }}">
                                                        @error(''. $locale .'.code')
                                                        <small class="text-danger">{{$message}}</small>
                                                        @enderror

                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">

                                                    <select class="custom-select form-control border "
                                                            name="category_id"
                                                            id="{{__('site.choose_category_name')}}">
                                                        <option
                                                            value="">{{__('site.choose_category_name')}}</option>
                                                        @foreach($categories as $category)
                                                            <option
                                                                value="{{$category->id}}">{{$category->name}}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('category_id')
                                                    <small class="text-danger">{{$message}}</small>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">

                                                    <select class="form-control border" name="subcategory_id">
                                                        <option
                                                            value="0">{{__('site.choose_subcategory_name')}}</option>
                                                    </select>
                                                    @error('subcategory_id')
                                                    <small class="text-danger">{{$message}}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">

                                                    <select class="form-control border" name="brand_id"
                                                            id="{{__('site.choose_brand_name')}}">
                                                        <option
                                                            value="">{{__('site.choose_brand_name')}}</option>
                                                        @foreach($brands as $brand)
                                                            <option
                                                                value="{{$brand->id}}">{{$brand->name}}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('brand_id')
                                                    <small class="text-danger">{{$message}}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" name="video_link" class="form-control border"
                                                           placeholder="{{__('site.video_link')}}">
                                                </div>
                                            </div>
                                        </div>

                                    </fieldset>

                                    <!-- Step 2 -->
                                    <h6>Step 2</h6>
                                    <fieldset>
                                        <div class="row">
                                            @foreach (config('translatable.locales') as $locale)
                                                <div class="col-md-6">
                                                    <div class="form-group">


                                                        <input type="text" name="{{ $locale }}[quantity]"
                                                               id="{{ $locale }}[quantity]"
                                                               class="form-control border"
                                                               placeholder="{{__('site.' . $locale . '.quantity')}}"
                                                               value="{{ old($locale . '.quantity') }}">
                                                        @error(''. $locale .'.quantity')
                                                        <small class="text-danger">{{$message}}</small>
                                                        @enderror

                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="row">
                                            @foreach (config('translatable.locales') as $locale)
                                                <div class="col-md-6">
                                                    <div class="form-group">


                                                        <input type="text" name="{{ $locale }}[size]"
                                                               id="{{ $locale }}[size]"
                                                               class="input-selectize"
                                                               placeholder="{{__('site.' . $locale . '.size')}}"
                                                               value="{{ old($locale . '.size') }}">
                                                        @error(''. $locale .'.size')
                                                        <small class="text-danger">{{$message}}</small>
                                                        @enderror

                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="row">
                                            @foreach (config('translatable.locales') as $locale)
                                                <div class="col-md-6">
                                                    <div class="form-group">


                                                        <input type="text" name="{{ $locale }}[discount]"
                                                               id="{{ $locale }}[discount]"
                                                               class="form-control border"
                                                               placeholder="{{__('site.' . $locale . '.discount')}}"
                                                               value="{{ old($locale . '.discount') }}">
                                                        @error(''. $locale .'.discount')
                                                        <small class="text-danger">{{$message}}</small>
                                                        @enderror

                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="row">

                                        </div>
                                    </fieldset>

                                    <!-- Step 3 -->
                                    <h6>Step 3</h6>
                                    <fieldset>
                                        <div class="row">
                                            @foreach (config('translatable.locales') as $locale)
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" id="{{ $locale }}[color]"
                                                               name="{{ $locale }}[color]"
                                                               placeholder="{{__('site.' . $locale . '.color')}}"
                                                               class="input-selectize">
                                                        @error(''. $locale .'.color')
                                                        <small class="text-danger">{{$message}}</small>
                                                        @enderror
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="row">
                                            @foreach (config('translatable.locales') as $locale)
                                                <div class="col-md-6">
                                                    <div class="form-group">


                                                        <input type="text" name="{{ $locale }}[price]"
                                                               id="{{ $locale }}[price]"
                                                               class="form-control border"
                                                               placeholder="{{__('site.' . $locale . '.price')}}"
                                                               value="{{ old($locale . '.price') }}">
                                                        @error(''. $locale .'.price')
                                                        <small class="text-danger">{{$message}}</small>
                                                        @enderror

                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="row">
                                            @foreach (config('translatable.locales') as $locale)
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <textarea type="text"
                                                                  placeholder="{{__('site.' . $locale . '.details')}}"
                                                                  name="{{ $locale }}[details]"
                                                                  id="{{ $locale }}[details]" cols="5" rows="5"
                                                                  class="form-control border">{{ old($locale . '.details') }}</textarea>
                                                        @error(''. $locale .'.details')
                                                        <small class="text-danger">{{$message}}</small>
                                                        @enderror
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </fieldset>

                                    <!-- Step 4 -->
                                    <h6>Step 4</h6>
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <div class="d-inline-block custom-control custom-checkbox">
                                                        <input type="checkbox" value="1" name="trend"
                                                               class="custom-control-input" id="trend">
                                                        <label class="custom-control-label"
                                                               for="trend">{{__('site.trend')}}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <div class="d-inline-block custom-control custom-checkbox">
                                                        <input type="checkbox" value="1" name="hot_deal"
                                                               class="custom-control-input" id="hot_deal">
                                                        <label class="custom-control-label"
                                                               for="hot_deal">{{__('site.hot_deal')}}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <div class="d-inline-block custom-control custom-checkbox">
                                                        <input type="checkbox" value="1" name="main_slider"
                                                               class="custom-control-input" id="main_slider">
                                                        <label class="custom-control-label"
                                                               for="main_slider">{{__('site.main_slider')}}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <div class="d-inline-block custom-control custom-checkbox">
                                                        <input type="checkbox" value="1" name="best_rated"
                                                               class="custom-control-input" id="best_rated">
                                                        <label class="custom-control-label"
                                                               for="best_rated">{{__('site.best_rated')}}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <div class="d-inline-block custom-control custom-checkbox">
                                                        <input type="checkbox" value="1" name="mid_slider"
                                                               class="custom-control-input" id="mid_slider">
                                                        <label class="custom-control-label"
                                                               for="mid_slider">{{__('site.mid_slider')}}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <div class="d-inline-block custom-control custom-checkbox">
                                                        <input type="checkbox" value="1" name="hot_new"
                                                               class="custom-control-input" id="hot_new">
                                                        <label class="custom-control-label"
                                                               for="hot_new">{{__('site.hot_new')}}</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="media-body mt-75">
                                                    <div
                                                        class="col-12 px-0 d-flex flex-sm-row flex-column justify-content-start">
                                                        <label
                                                            class="btn btn-sm btn-primary ml-50 mb-50 mb-sm-0 cursor-pointer"
                                                            for="account-upload">{{__('site.choose_product_image_one')}}</label>
                                                        <input type="file" name="image_one" class="image_one"
                                                               id="account-upload" hidden>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="media-body mt-75">
                                                    <div
                                                        class="col-12 px-0 d-flex flex-sm-row flex-column justify-content-start">
                                                        <label
                                                            class="btn btn-sm btn-primary ml-50 mb-50 mb-sm-0 cursor-pointer"
                                                            for="image_two">{{__('site.choose_product_image_two')}}</label>
                                                        <input type="file" class="image_two" name="image_two"
                                                               id="image_two" hidden>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="media-body mt-75">
                                                    <div
                                                        class="col-12 px-0 d-flex flex-sm-row flex-column justify-content-start">
                                                        <label
                                                            class="btn btn-sm btn-primary ml-50 mb-50 mb-sm-0 cursor-pointer"
                                                            for="image_three">{{__('site.choose_product_image_three')}}</label>
                                                        <input type="file" name="image_three" class="image_three"
                                                               id="image_three" hidden>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <img class="image_one image-preview_one">
                                            </div>

                                            <div class="col-md-3">
                                                <img
                                                    class="image_two  image-preview_two"
                                                >
                                            </div>

                                            <div class="col-md-3">
                                                <img
                                                    class="image_three image-preview_three">
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Form wizard with number tabs section end -->

    </div>
@endsection
