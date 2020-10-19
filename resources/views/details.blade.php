@extends('layouts.app')
@section('front_content')
    <div class="app-content content">
        <div class="content-body">
            <div class="product-detail">
                <div class="card">
                    <div class="card-body">
                        <div class="card-content">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div id="gallery-2" class="royalSlider rsUni">
                                        <a class="rsImg" data-rsbigimg="{{asset('storage/products/'.$product->image_one)}}"
                                           href="{{asset('storage/products/'.$product->image_one)}}" data-rsw="500"
                                           data-rsh="500"> <img
                                                class="rsTmb" src="{{asset('storage/products/'.$product->image_one)}}"
                                                alt=""></a>
                                        <a class="rsImg" data-rsbigimg="{{asset('storage/products/'.$product->image_two)}}"
                                           href="{{asset('storage/products/'.$product->image_two)}}" data-rsw="500"
                                           data-rsh="500"> <img
                                                class="rsTmb" src="{{asset('storage/products/'.$product->image_two)}}"
                                                alt=""></a>
                                        <a class="rsImg" data-rsbigimg="{{asset('storage/products/'.$product->image_three)}}"
                                           href="{{asset('storage/products/'.$product->image_three)}}" data-rsw="500"
                                           data-rsh="500"> <img
                                                class="rsTmb" src="{{asset('storage/products/'.$product->image_three)}}"
                                                alt=""></a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">

                                    <div class="title-area clearfix">
                                        <h2 class="product-title float-left">
                                            {{$product->name}}
                                        </h2>
                                        <span class="float-right">
                                            data
                                        </span>
                                    </div>
                                    <div class="price-reviews clearfix">
                                            <span class="price-box">
                                                <span class="price h4">
                                                    $ {{$product->price}}
                                                </span>
                                                <span class="old-price h4">
                                                    $ {{$product->price}}
                                                </span>
                                            </span>
                                        <span class="float-right">

                                            </span>
                                    </div>
                                    <!-- Product Information -->
                                    <div class="product-info">
                                        {{$product->details}}
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
                                    <div class="row">


                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-content">
                                                    <form action="{{route('product.cart.add',$product->id)}}"
                                                          method="post">
                                                        @csrf
                                                        <div class="col-md-6">
                                                            <div class="product-count pr-1">
                                                                <div class="input-group">
                                                                    <input class="text-center count touchspin"
                                                                           name="qyt" type="text" value="1"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <select name="color" id="inputState" class="form-control">
                                                                <option value="">{{__('site.choose_color')}}</option>
                                                                @foreach($product->colors as $color)
                                                                    <option value="{{$color}}">{{$color}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col">
                                                            <select name="size" id="inputState" class="form-control">
                                                                <option value="">{{__('site.choose_size')}}</option>
                                                                @foreach($product->sizes as $size)
                                                                    <option value="{{$size}}">{{$size}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="row">
                                                            <div
                                                                class="col-md-12 mt-1">
                                                                <div class="product-buttons pl-2">
                                                                    <button type="submit"
                                                                            class="btn btn-black btn-block btn-lg">
                                                                        <i class="la la-shopping-cart">
                                                                        </i>
                                                                        {{__('site.add_to_cart')}}
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <ul class="product-tabs nav nav-tabs nav-underline no-hover-bg">
                                        <li class="nav-item">
                                            <a aria-controls="desc" aria-expanded="true" class="nav-link active"
                                               data-toggle="tab" href="#desc" id="description">
                                                Description
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a aria-controls="ratings" aria-expanded="false" class="nav-link"
                                               data-toggle="tab" href="#ratings" id="review">
                                                Ratings
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a aria-controls="comment" aria-expanded="false" class="nav-link"
                                               data-toggle="tab" href="#comment" id="comments">
                                                Comments
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="product-content tab-content px-1 pt-1">
                                        <div aria-expanded="true" aria-labelledby="description" class="tab-pane active"
                                             id="desc" role="tabpanel">
                                            <h2 class="my-1">
                                                Fitbit Alta HR Special Edition
                                            </h2>
                                            <br>
                                            <h4>
                                                Special Features :
                                            </h4>
                                            <ul>
                                                <li>
                                                    Jelly-o candy toffee caramels jelly-o marshmallow.
                                                </li>
                                                <li>
                                                    Cotton candy jujubes cupcake.
                                                </li>
                                                <li>
                                                    Donut cake pie.
                                                </li>
                                                <li>
                                                    Dessert liquorice gummi bears.
                                                </li>
                                                <li>
                                                    Lemon drops halvah pastry.
                                                </li>
                                            </ul>
                                        </div>
                                        <div aria-labelledby="review" class="tab-pane" id="ratings">
                                            <h2 class="my-1">
                                                Customer Rating & Review
                                            </h2>
                                            <div class="media-list media-bordered">
                                                <div class="media">
                                                    <span class="media-left">
                                                        <img alt="Generic placeholder image" class="media-object"
                                                             src="{{asset('app-assets/images/portrait/small/avatar-s-1.png')}}"
                                                             width="64" height="64"/>
                                                    </span>
                                                    <div class="media-body">

                                                        <h5 class="media-heading mb-0 text-bold-600">
                                                            Cookie candy
                                                        </h5>
                                                        <div class="media-notation mb-1">
                                                            2 Oct, 2018 at 8:39am
                                                        </div>
                                                        desc
                                                    </div>
                                                </div>
                                            </div>
                                            <h2 class="my-1">
                                                Leave Your Review
                                            </h2>
                                            <form class="form">
                                                <div class="form-body">
                                                    <label>
                                                        Ratings
                                                    </label>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="name">
                                                                    Your Name
                                                                </label>
                                                                <input class="form-control" id="name" name="name"
                                                                       placeholder="Your Name" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="subject">
                                                                    Subject
                                                                </label>
                                                                <input class="form-control" id="subject" name="subject"
                                                                       placeholder="Subject" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="review-desc">
                                                            Your Review
                                                        </label>
                                                        <textarea class="form-control" id="review-desc" name="comment"
                                                                  placeholder="Your Review" rows="5"></textarea>
                                                    </div>
                                                    <button class="btn btn-info" type="submit">
                                                        <i class="la la-check-square-o">
                                                        </i>
                                                        Submit Review
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                        <div aria-labelledby="comments" class="tab-pane" id="comment">
                                            <h2 class="my-1">
                                                Comments
                                            </h2>
                                            <div class="media-list media-bordered">
                                                <div class="media">
                                                    <span class="media-left">
                                                        <img alt="Generic placeholder image" class="media-object"
                                                             src="{{asset('app-assets/images/portrait/small/avatar-s-7.png')}}"
                                                             width="64" height="64"/>
                                                    </span>
                                                    <div class="media-body">
                                                        <h5 class="media-heading mb-0 text-bold-600">
                                                            Caramels marshmallow
                                                        </h5>
                                                        <div class="media-notation mb-1">
                                                            19 Jun, 2018 at 1:11pm
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <h2 class="my-1">
                                                Leave Comment
                                            </h2>
                                            <form class="form">
                                                <div class="form-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="pr-name">
                                                                    Name
                                                                </label>
                                                                <input class="form-control" id="pr-name" name="name"
                                                                       placeholder="Name" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="pr-subject">
                                                                    Subject
                                                                </label>
                                                                <input class="form-control" id="pr-subject" name="lname"
                                                                       placeholder="Subject" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="review-desc-comment">
                                                            Your Comment
                                                        </label>
                                                        <textarea class="form-control" id="review-desc-comment"
                                                                  name="comment" placeholder="Your Comment"
                                                                  rows="5"></textarea>
                                                    </div>
                                                    <button class="btn btn-info" type="submit">
                                                        <i class="la la-check">
                                                        </i>
                                                        Submit
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
{{--<script src="{{asset('assets/js/jquery-1.8.3.min.js')}}"></script>--}}
{{--<script src="{{asset('assets/js/jquery.royalslider.js')}}"></script>--}}
{{--<script src="{{asset('assets/js/jquery.easing-1.3.js')}}"></script>--}}
