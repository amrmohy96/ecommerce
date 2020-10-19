@extends('layouts.app')
@section('front_content')
    <div class="app-content content">
        <div class="content-body">
            <div class="shopping-cart">
                <div class="tab-pane" id="checkout-tab">
                    <div class="row">
                        <div class="col-md-4 order-md-2 mb-4">
                            <div class="card">
                                <div class="card-header bg-black  mb-3">
                                    <h4 class="card-title bold-font-3 text-white">Your Cart ({{Cart::count() }})</h4>
                                </div>
                                <div class="card-content">
                                    <ul class="list-group  mb-3">
                                        @foreach($cart as $item)
                                            <li class="list-group-item d-flex justify-content-between pull-up lh-condensed">
                                                <div>
                                                    <h6 class="my-0">{{$item->name}}</h6>
                                                </div>
                                                <span class="text-muted">${{$item->price}}</span>
                                            </li>
                                        @endforeach

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
                                             $total = $Subtotal  +  (int)$ship + (int)$vat;
                                          }
                                        @endphp
                                        <li class="list-group-item d-flex justify-content-between">
                                            <span class="product-name"><strong>Cart Subtotal</strong></span>
                                            <span class="product-price"><strong>${{Cart::Subtotal()}}</strong></span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between">
                                            <span class="product-name">Shipping &amp; Handling</span>
                                            <span class="product-price">${{$ship}}</span>
                                        </li>
                                        @if (Session::has('coupon'))
                                            <li class="list-group-item d-flex justify-content-between">
                                                <span class="product-name success">Coupon : {{$coupon_name}} </span>
                                                <span class="product-price">${{$coupon_discount}}</span>
                                            </li>
                                        @else
                                        @endif

                                        <li class="list-group-item d-flex justify-content-between">
                                            <span class="product-name">TAX / VAT</span>
                                            <span class="product-price">${{$vat}}</span>
                                        </li>
                                        @if (Session::has('coupon'))
                                            <li class="list-group-item d-flex justify-content-between">
                                                <span class="product-name success">Order Total</span>
                                                <span class="product-price">${{$Amount_coupon}}</span>
                                            </li>
                                        @else
                                            <li class="list-group-item d-flex justify-content-between">
                                                <span class="product-name success">Order Total</span>
                                                <span class="product-price">${{$total}}</span>
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-8 order-md-1">
                            <div class="card ">
                                <div class="card-header bg-black">
                                    <h4 class="card-title text-white">Billing address</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="needs-validation" method="post"
                                              action="{{route('payment.page.complete')}}" novalidate="">
                                            @csrf
                                            @method('post')

                                            <div class="mb-3">
                                                <label for="name">Name</label>
                                                <input type="text" name="name" class="form-control"
                                                       id="name"
                                                       placeholder="" value="" required="">
                                                <div class="invalid-feedback">
                                                    Valid name is required.
                                                </div>
                                            </div>


                                            <div class="mb-3">
                                                <label for="email">Email <span
                                                        class="text-muted">(Optional)</span></label>
                                                <input type="email" name="email" class="form-control" id="email"
                                                       placeholder="you@example.com">
                                                <div class="invalid-feedback">
                                                    Please enter a valid email address for shipping updates.
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label for="address">Address</label>
                                                <input type="text" name="address" class="form-control" id="address"
                                                       placeholder="1234 Main St" required="">
                                                <div class="invalid-feedback">
                                                    Please enter your shipping address.
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label for="email">Phone</label>
                                                <input type="text" name="phone" class="form-control" id="phone"
                                                       placeholder="0120000000">
                                                <div class="invalid-feedback">
                                                    Please enter a valid phone number for shipping updates.
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label for="address">City</label>
                                                <input type="text" name="city" class="form-control" id="city"
                                                       placeholder="City Name" required="">
                                                <div class="invalid-feedback">
                                                    Please enter your shipping city.
                                                </div>
                                            </div>

                                            <h4 class="mb-1">Payment</h4>

                                            <div class="d-block my-2">
                                                <div class="custom-control custom-radio">
                                                    <input id="credit" name="paymentMethod" value="stripe" type="radio"
                                                           class="custom-control-input" checked="" required="">
                                                    <label class="custom-control-label" for="credit">Mater card</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input id="paypal" name="paymentMethod" value="paypal" type="radio"
                                                           class="custom-control-input" required="">
                                                    <label class="custom-control-label" for="paypal">Paypal</label>
                                                </div>
                                            </div>
                                            {{--                                            <div class="row">--}}
                                            {{--                                                <div class="col-md-6 mb-3">--}}
                                            {{--                                                    <label for="cc-name">Name on card</label>--}}
                                            {{--                                                    <input type="text" class="form-control" id="cc-name" placeholder=""--}}
                                            {{--                                                           required="">--}}
                                            {{--                                                    <small class="text-muted">Full name as displayed on card</small>--}}
                                            {{--                                                    <div class="invalid-feedback">--}}
                                            {{--                                                        Name on card is required--}}
                                            {{--                                                    </div>--}}
                                            {{--                                                </div>--}}
                                            {{--                                                <div class="col-md-6 mb-3">--}}
                                            {{--                                                    <label for="cc-number">Credit card number</label>--}}
                                            {{--                                                    <input type="number" class="form-control" id="cc-number"--}}
                                            {{--                                                           placeholder="" required="">--}}
                                            {{--                                                    <div class="invalid-feedback">--}}
                                            {{--                                                        Credit card number is required--}}
                                            {{--                                                    </div>--}}
                                            {{--                                                </div>--}}
                                            {{--                                            </div>--}}
                                            {{--                                            <div class="row">--}}
                                            {{--                                                <div class="col-md-3 mb-3">--}}
                                            {{--                                                    <label for="cc-expiration">Expiration</label>--}}
                                            {{--                                                    <input type="text" class="form-control" id="cc-expiration"--}}
                                            {{--                                                           placeholder="" required="">--}}
                                            {{--                                                    <div class="invalid-feedback">--}}
                                            {{--                                                        Expiration date required--}}
                                            {{--                                                    </div>--}}
                                            {{--                                                </div>--}}
                                            {{--                                                <div class="col-md-3 mb-3">--}}
                                            {{--                                                    <label for="cc-expiration">CVV</label>--}}
                                            {{--                                                    <input type="number" class="form-control" id="cc-cvv" placeholder=""--}}
                                            {{--                                                           required="">--}}
                                            {{--                                                    <div class="invalid-feedback">--}}
                                            {{--                                                        Security code required--}}
                                            {{--                                                    </div>--}}
                                            {{--                                                </div>--}}
                                            {{--                                            </div>--}}
                                            <button class="btn btn-info btn-lg" type="submit">Continue to checkout
                                            </button>
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
@endsection

