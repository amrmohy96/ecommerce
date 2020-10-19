@extends('layouts.app')
@section('front_content')

    @php
        $charge = \App\Setting::first()->shipping_charge;
          $vat = \App\Setting::first()->vat;
           $cart = Cart::Content();
    @endphp
    <div class="app-content content">
        <div class="content-body">
            <div class="row">
                <div class="col-md-12 order-md-1">
                    <div class="card ">
                        <div class="card-header bg-black">
                            <h4 class="card-title text-white">Payment</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form action="{{route('charge')}}" method="post" id="payment-form">
                                    @csrf
                                    @method('post')
                                    <div class="form-row">
                                        <label for="card-element">
                                            Credit or debit card
                                        </label>
                                        <div id="card-element">
                                        </div>

                                        <!-- Used to display form errors. -->
                                        <div id="card-errors" role="alert"></div>
                                    </div>

                                    <input type="hidden" name="shipping" value="{{ $charge }} ">
                                    <input type="hidden" name="vat" value="{{ $vat }} ">
                                    <input type="hidden" name="total"
                                           value="{{ (float)Cart::Subtotal() + (float)$charge + (float)$vat }} ">

                                    <input type="hidden" name="ship_name" value="{{ $data['name'] }} ">
                                    <input type="hidden" name="ship_phone" value="{{ $data['phone'] }} ">
                                    <input type="hidden" name="ship_email" value="{{ $data['email'] }} ">
                                    <input type="hidden" name="ship_address" value="{{ $data['address'] }} ">
                                    <input type="hidden" name="ship_city" value="{{ $data['city'] }} ">
                                    <input type="hidden" name="paymentMethod"
                                           value="{{ $data['paymentMethod'] }} ">

                                    <button class="btn btn-info">Pay Now</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

