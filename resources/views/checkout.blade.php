@extends('layouts.app')
@section('front_content')
    <div class="app-content content">
        <div class="content-body">
            <div class="shopping-cart">
                <div class="tab-content pt-1">
                    <div role="tabpanel" class="tab-pane active" id="shop-cart-tab" aria-expanded="true"
                         aria-labelledby="shopping-cart">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
                        <div class="row match-height">
                            <div class="col-lg-6 col-md-12">
                                <div class="card pull-up">
                                    <div class="card-header bg-gradient-y-">
                                        <h4 class="card-title text-white">Apply Coupon</h4>
                                    </div>
                                    <div class="card-content text-black-50 text-bold-700">
                                        <div class="card-body  ">
                                            <form action="{{route('apply.coupon')}}" method="post">
                                                @csrf
                                                @method('post')
                                                <div class="form-body">
                                                    <input type="text" name="coupon" class="form-control"
                                                           placeholder="Enter Coupon Code Here">
                                                </div>
                                                <div class="form-actions border-0 pb-0 text-right">
                                                    <button type="submit" class="btn btn-teal">Apply Code</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="card text-black-50 text-bold-700 border-teal pull-up ">
                                    <div class="card-header bg-gradient-y-teal">
                                        <h4 class="card-title text-white">Price Details</h4>
                                    </div>
                                    <div class="card-content ">
                                        <div class="card-body ">
                                            @php
                                                $ship = \App\Setting::first()->shipping_charge;
                                                 $vat = \App\Setting::first()->vat;
                                              if (Session::has('coupon')){
                                              $total_with_coupon = Session::get('coupon')['balance'];
                                              $coupon_name = Session::get('coupon')['name'];
                                              $coupon_discount = Session::get('coupon')['discount'];
                                              $Amount_coupon =  $total_with_coupon + $ship + $vat;
                                              }else{
                                                  //cart
                                                 $Subtotal =  Cart::Subtotal();
                                                 $Amount = $Subtotal  +  (int)$ship + (int)$vat;
                                              }
                                            @endphp
                                            @if(Session::has('coupon'))
                                                <div class="price-detail">Cart Subtotal <span
                                                        class="float-right">{{$total_with_coupon}}
                                                    </span>
                                                </div>
                                                <div class="price-detail">Coupon:({{$coupon_name}})
                                                    <a href="{{route('remove.coupon')}}">
                                                        <i class="ft-trash-2 text-danger"></i>
                                                    </a>
                                                    <span
                                                        class="float-right">{{$coupon_discount}}</span>
                                                </div>
                                            @else
                                                <div class="price-detail">Cart Subtotal <span
                                                        class="float-right">{{$Subtotal}}</span>
                                                </div>
                                            @endif

                                            <div class="price-detail">Shipping & Handling<span
                                                    class="float-right">{{$ship}}</span>
                                            </div>
                                            <div class="price-detail">TAX / VAT <span
                                                    class="float-right">{{$vat}}</span>
                                            </div>
                                            <hr class="bg-dark">
                                            <div class="price-detail">Payable Amount
                                                @if(Session::has('coupon'))
                                                    <span class="float-right">{{$Amount_coupon}}</span>
                                                @else
                                                    <span class="float-right">{{$Amount}}</span>
                                                @endif
                                            </div>
                                            {{--                                            <div class="total-savings">Your Total Savings on this order $550</div>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form action="#">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="card-body">
                                                <div class="text-right">
                                                    <a href="{{route('payment.page')}}"
                                                       class="btn btn-teal mr-2">{{__('site.continue_shopping')}}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

