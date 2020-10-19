@extends('layouts.app')
@section('front_content')

    <div class="content-body">
        <!-- Shopping cards section start -->
        <section id="shopping-cards">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card text-white bg-gradient-y-info text-center">
                        <div class="card-content">
                            <img src="{{asset('app-assets/images/carousel/29.png')}}" alt="Relax" width="800"
                                 class="float-right pr-3 img-fluid">
                            <div class="card-body pt-3">
                                <h4 class="card-title mt-3 text-white">Brand Minute</h4>
                                <p class="card-text ">Donut toffee</p>
                                <button class="btn bg-white bg-darken-3 teal">Buy Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- // Shopping cards section end -->
        <div class="row">
            <div class="col-xl-8 col-md-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-6 col-md-12">
                                    <div class="">
                                        <h2>Top Rated</h2>
                                        <div class="rating warning mb-1">
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star-half-o"></i> 1290 review
                                        </div>
                                        <p>Nteresting furniture design from a man with an interesting background: Alain
                                            Gilles is an banker who quit finance to study industrial design.
                                        </p>
                                    </div>
                                    <h2 class="py-2">$329.00</h2>
                                    <button type="button" class="btn btn-teal btn-block btn-glow text-uppercase p-1">
                                        Purchase
                                    </button>
                                </div>
                                <div class="col-xl-6 col-md-12 pt-3">
                                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="img-fluid d-block w-100"
                                                     src="../../../app-assets/images/gallery/34.png" alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="img-fluid d-block w-100"
                                                     src="../../../app-assets/images/gallery/35.png" alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="img-fluid d-block w-100"
                                                     src="../../../app-assets/images/gallery/36.png" alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="img-fluid d-block w-100"
                                                     src="../../../app-assets/images/gallery/37.png" alt="First slide">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body text-center bg-teal p-0">
                            <h2 class="text-white pt-1">IPHONE X</h2>
                            <img class="img-fluid mx-auto d-block pt-1" width="120"
                                 src="{{asset('app-assets/images/icons/iphone.png')}}" alt="First slide">
                            <h2 class="text-white py-1 m-0">$999</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="content">
        <section id="component-swiper-cube-effect">
            <div class="card bg-teal">
                <div class="card-header">
                    <h4 class="card-title"><span class="badge badge-success">new</span></h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="swiper-cube-effect swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img class="img-fluid"
                                                               src="{{asset('app-assets/images/elements/11.png')}}"
                                                               alt="banner">
                                </div>
                                <div class="swiper-slide"><img class="img-fluid"
                                                               src="{{asset('app-assets/images/elements/apple-watch.png')}}"
                                                               alt="banner">
                                </div>
                                <div class="swiper-slide"><img class="img-fluid"
                                                               src="{{asset('app-assets/images/elements/fitbit-watch.png')}}"
                                                               alt="banner">
                                </div>
                                <div class="swiper-slide"><img class="img-fluid"
                                                               src="{{asset('app-assets/images/elements/sws.png')}}"
                                                               alt="banner">
                                </div>
                            </div>
                            <!-- Add Pagination -->
                            <div class="swiper-pagination swiper-pagination-white"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="row">
        <div class="col-xl-8 col-md-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-6 col-md-12">
                                <div class="">
                                    <h2>Unique Furniture</h2>
                                    <div class="rating warning mb-1">
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star-half-o"></i> 1290 review
                                    </div>
                                    <p>Nteresting furniture design from a man with an interesting background: Alain
                                        Gilles is an banker who quit finance to study industrial design.
                                    </p>
                                </div>
                                <h2 class="py-2">$329.00</h2>
                                <button type="button" class="btn btn-warning btn-block btn-glow text-uppercase p-1">
                                    Purchase
                                </button>
                            </div>
                            <div class="col-xl-6 col-md-12 pt-3">
                                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="img-fluid d-block w-100"
                                                 src="../../../app-assets/images/gallery/34.png" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="img-fluid d-block w-100"
                                                 src="../../../app-assets/images/gallery/35.png" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="img-fluid d-block w-100"
                                                 src="../../../app-assets/images/gallery/36.png" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="img-fluid d-block w-100"
                                                 src="../../../app-assets/images/gallery/37.png" alt="First slide">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6">
            <div class="card">
                <div class="card-content">
                    <div class="card-body text-center bg-danger p-0">
                        <h2 class="text-white pt-1">IPHONE X</h2>
                        <img class="img-fluid mx-auto d-block pt-1" width="120"
                             src="../../../app-assets/images/icons/iphone.png" alt="First slide">
                        <h2 class="text-white py-1 m-0">$999</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shopping cards section start -->
    <div class="content">
        <section id="shopping-cards">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card text-white bg-gradient-y-teal text-center">
                        <div class="card-content">
                            <img src="{{asset('app-assets/images/carousel/24.png')}}" alt="Relax" width="800"
                                 class="float-right pr-3 img-fluid">
                            <div class="card-body pt-3">
                                <h4 class="card-title mt-3 text-white">Brand Minute</h4>
                                <p class="card-text ">Donut toffee</p>
                                <button class="btn bg-white bg-darken-3 teal">Buy Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="row">
        <div class="col-xl-4 col-lg-12">
            <div class="card text-center">
                <div class="card-content">
                    <img class="card-img-top img-fluid" src="../../../app-assets/images/carousel/26.jpg"
                         alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Running Shoes</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8 col-lg-12">
            <div class="card text-white bg-gradient-y-pink text-center">
                <div class="card-content">
                    <img src="../../../app-assets/images/carousel/29.png" alt="Relax" width="600"
                         class="float-right pr-3 img-fluid">
                    <div class="card-body pt-3">
                        <h4 class="card-title mt-3 text-white">Brand Minute</h4>
                        <p class="card-text ">Donut toffee</p>
                        <button class="btn bg-white bg-darken-3 pink">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- // Shopping cards section end -->
    <div class="content">
        <div class="content-right">
            <div class="product-shop">
                <div class="row match-height">
                    @foreach($products as $product)
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                            <div class="card pull-up">
                                <div class="card-content">
                                    <div class="card-body">
                                        <a href="{{route('product.details.show',[$product->id, $product->name])}}">
                                            <div class="product-img d-flex align-items-center">
                                                <img class="img-fluid mb-0"
                                                     src="{{asset('storage/products/'.$product->image_one)}}"
                                                     alt="Card image cap">
                                            </div>
                                            <h4 class="product-title">{{$product->name}}</h4>
                                            <div class="price-reviews">
                                                    <span class="price-box">
                                                        <span class="price">{{$product->price}}</span>
                                                        <span class="old-price">{{$product->price}}</span>
                                                    </span>
                                                <span class="ratings float-right"></span>
                                            </div>
                                        </a>
                                        <div class="product-action d-flex justify-content-around">
                                            <a
                                                data-toggle="tooltip"
                                                data-id="{{$product->id}}"
                                                data-placement="top"
                                                class="addToWishList tito"
                                            >
                                                <i class="ft-heart xxx{{+$product->id}} {{(new \App\Wishlist)->checkIfInWishList($product->id) ? 'ft-heart-on red' : 'ft-heart' }}">
                                                    <span
                                                        class="titotext innerText{{+$product->id}}">{{(new \App\Wishlist)->checkIfInWishList($product->id) ? __('site.Remove From WishList'): __('site.Add To WishList') }}</span>
                                                </i>
                                            </a>
                                            <span
                                                class="saperator">|</span>
                                            <a href="#view" data-toggle="tooltip" data-placement="top"
                                               title="Quick View"><i class="ft-eye"></i></a><span
                                                class="saperator">|</span>
                                            <a href="#compare" data-toggle="tooltip" data-placement="top"
                                               title="Compare"><i class="ft-sliders"></i></a><span
                                                class="saperator">|</span>
                                            <a
                                                data-id="{{$product->id}}"
                                                data-toggle="tooltip"
                                                data-placement="top"
                                                class="addToCart"
                                                title="Add To Cart"><i class="ft-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body text-center bg-teal p-0">
                        <h2 class="text-white pt-1">IPHONE X</h2>
                        <img class="img-fluid mx-auto d-block pt-1" width="120"
                             src="../../../app-assets/images/icons/iphone.png" alt="First slide">
                        <h2 class="text-white py-1 m-0">$999</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

{{--title="{{(new \App\Wishlist)->checkIfInWishList($product->id) ? 'Remove From Wishlist' : 'Add To Wishlist' }}"--}}
