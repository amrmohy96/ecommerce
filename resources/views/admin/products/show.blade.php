@extends('admin.layouts.main')
@section('bread_crumb')
    <div class="row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <h3 class="content-header-title white">{{__('site.product_detail')}}</h3>
            <div class="row breadcrumbs-top">
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{__('site.ecommerce')}}</a>
                        </li>
                        <li class="breadcrumb-item"><a
                                href="{{route('brands.index')}}">{{__('site.products')}}</a>
                        </li>
                        <li class="breadcrumb-item active">{{__('site.product_detail')}}
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
    <div class="product-detail">
        <div class="card">
            <div class="card-body">
                <div class="card-content">
                    <div class="row">
                        <div class="col-sm-4 col-12">
                            <div class="product-img d-flex align-items-center">
                                <div class="badge badge-success round">
                                    -{{$product->discount}}%
                                </div>
                                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel-example-generic" data-slide-to="0"
                                            class="active"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active">
                                            <img src="{{asset('storage/products/'.$product->image_one)}}" class="d-block w-100"
                                                 alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{asset('storage/products/'.$product->image_two)}}" class="d-block w-100"
                                                 alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{asset('storage/products/'.$product->image_three)}}" class="d-block w-100"
                                                 alt="Third slide">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carousel-example-generic" role="button"
                                       data-slide="prev">
                                        <span class="la la-angle-left" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carousel-example-generic" role="button"
                                       data-slide="next">
                                        <span class="la la-angle-right icon-next" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    @if($product->status)
                                        <span class="tito">
                                    <button class="btn btn-sm btn-success">{{__('site.active')}}</button>
                                    <span class="titotext">{{__('site.ele_status_active')}}</span>
                                </span>
                                    @else
                                        <span class="tito">
                                    <button class="btn btn-sm btn-danger">{{__('site.inactive')}}</button>
                                    <span class="titotext">{{__('site.ele_status_inactive')}}</span>
                                </span>
                                    @endif
                                </div>
                                <div class="col-md-4">
                                    @if($product->main_slider)
                                        <span class="tito">
                                    <button class="btn btn-sm btn-success">{{__('site.main_slider')}}</button>
                                    <span class="titotext">{{__('site.ele_status_active')}}</span>
                                </span>
                                    @else
                                        <span class="tito">
                                    <button class="btn btn-sm btn-danger">{{__('site.main_slider')}}</button>
                                    <span class="titotext">{{__('site.ele_status_inactive')}}</span>
                                </span>
                                    @endif
                                </div>
                                <div class="col-md-4">
                                    @if($product->hot_new)
                                        <span class="tito">
                                    <button class="btn btn-sm btn-success">{{__('site.hot_new')}}</button>
                                    <span class="titotext">{{__('site.ele_status_active')}}</span>
                                </span>
                                    @else
                                        <span class="tito">
                                    <button class="btn btn-sm btn-danger">{{__('site.hot_new')}}</button>
                                    <span class="titotext">{{__('site.ele_status_inactive')}}</span>
                                </span>
                                    @endif
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
                                    @if($product->hot_deal)
                                        <span class="tito">
                                    <button class="btn btn-sm btn-success">{{__('site.hot_deal')}}</button>
                                    <span class="titotext">{{__('site.ele_status_active')}}</span>
                                </span>
                                    @else
                                        <span class="tito">
                                    <button class="btn btn-sm btn-danger">{{__('site.hot_deal')}}</button>
                                    <span class="titotext">{{__('site.ele_status_inactive')}}</span>
                                </span>
                                    @endif
                                </div>
                                <div class="col-md-4">
                                    @if($product->trend)
                                        <span class="tito">
                                    <button class="btn btn-sm btn-success">{{__('site.trend')}}</button>
                                    <span class="titotext">{{__('site.ele_status_active')}}</span>
                                </span>
                                    @else
                                        <span class="tito">
                                    <button class="btn btn-sm btn-danger">{{__('site.trend')}}</button>
                                    <span class="titotext">{{__('site.ele_status_inactive')}}</span>
                                </span>
                                    @endif
                                </div>
                                <div class="col-md-4">
                                    @if($product->mid_slider)
                                        <span class="tito">
                                    <button class="btn btn-sm btn-success">{{__('site.mid_slider')}}</button>
                                    <span class="titotext">{{__('site.ele_status_active')}}</span>
                                </span>
                                    @else
                                        <span class="tito">
                                    <button class="btn btn-sm btn-danger">{{__('site.mid_slider')}}</button>
                                    <span class="titotext">{{__('site.ele_status_inactive')}}</span>
                                </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8 col-12">
                            <div class="title-area clearfix">
                                <h2 class="product-title float-left">
                                    {{$product->name}}
                                    <span class="badge badge-primary round">{{$product->brand->name}}</span>
                                </h2>
                                @if($product->best_rated)
                                    <span class="ratings float-right">
                                </span>
                                @endif
                            </div>
                            <div class="price-reviews clearfix">
                                            <span class="price-box">
                                                <span class="price h4">
                                                     {{$product->total_price}} {{__('site.$')}}
                                                </span>
                                                <span class="old-price h4">
                                                     {{$product->format_price}} {{__('site.$')}}
                                                </span>
                                            </span>
                                @if($product->best_rated)
                                    <span class="float-right">
                                   <small>{{__('site.best_rated')}}</small>
                                </span>
                                @endif()
                            </div>
                            <!-- Product Information -->
                            <div class="product-info">
                                <p>
                                    {{$product->details}}
                                </p>
                            </div>
                            <!-- Product Information Ends-->
                            <!-- Color Options -->
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="product-options color-options mb-2">
                                        <ul>
                                            <li>
                                                <small class="option-title">
                                                    {{__('site.colors')}} :
                                                </small>
                                            </li>
                                            @foreach($product->colors  as $id => $color)
                                                <li>
                                                    <a>
                                                        <span class="color-info {{$color}}"></span>
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <!-- Size Options -->
                                    <div class="product-options size-filter mb-3">
                                        <ul>
                                            <li class="option-title">
                                                <small>  {{__('site.size')}} :</small>
                                            </li>
                                            @foreach($product->sizes as $size)
                                                <li>
                                                    <a>
                                                        <small>{{$size}}</small>
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Color Options Ends-->
                            <!-- Size Options Ends-->
                            <!-- video start-->
                            <div id="plyr-video-player">
                                {!! $product->video_link !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>

        $('#myImage img').attr('src', $('img', this).attr('src'));

        function image_1() {
            document.getElementById('myImage')
                .src = "{{asset('storage/'.$product->image_one)}}";
        }

        function image_2() {
            document.getElementById('myImage')
                .src = "{{asset('storage/'.$product->image_two)}}";
        }

        function image_3() {
            document.getElementById('myImage')
                .src = "{{asset('storage/'.$product->image_three)}}";
        }

    </script>

@endsection
