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
                                    <div class="table-responsive">
                                        <table class="table table-borderless mb-0">
                                            <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Details</th>
                                                <th>Price</th>
                                                <th>No. Of Products</th>
                                                <th>Total</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($cartProducts as $cart)
                                                <tr>
                                                    <td hidden id="row" data-id="{{$cart->id}}"></td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img class="img-xl"
                                                                 src="{{asset('storage/'.$cart->options->image)}}"
                                                                 alt="Card image cap">
                                                        </div>
                                                    </td>
                                                    <td>

                                                        <div class="product-title">{{$cart->name}}</div>
                                                        <div class="product-color"><strong>Color
                                                                : </strong> {{$cart->options->color}}</div>
                                                        <div class="product-size"><strong>Size
                                                                : </strong> {{$cart->options->size}}</div>
                                                    </td>
                                                    <td>
                                                        <div class="product-price" id="price">{{$cart->price}}</div>
                                                    </td>
                                                    <td>
                                                        <form action="{{route('cart.product.update')}}"
                                                              style="display: inline-block;" method="post">
                                                            @csrf
                                                            <input class="center"
                                                                   style="width: 30px; border-radius: 5px;"
                                                                   type="number" name="qty" value="{{$cart->qty}}">
                                                            <input hidden name="rowId" value="{{$cart->rowId}}">
                                                            <button class="round btn-black" type="submit">
                                                                <i class="ft-edit-2"></i></button>
                                                        </form>
                                                    </td>

                                                    <td>
                                                        <div class="total-price">$<span
                                                                id="total">{{$cart->price * $cart->qty}}</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <form action="{{route('cart.delete',$cart->rowId)}}"
                                                              style="display: inline-block;" method="post">
                                                            @csrf
                                                            <button class="delete btn btn-sm text-danger" type="submit">
                                                                <i class="ft-trash-2"></i></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <a class="btn btn-primary btn-block" href="{{route('home')}}">Cancel</a>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="{{route('cart.user.checkout')}}"
                                                   class="btn btn-teal btn-block">CheckOut</a>
                                            </div>

                                            <div class="col-md-4">
                                                <p class="lead text-bold-300 text-black-50"> Total Price
                                                    : {{Cart::subtotal()}}</p>
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
    </div>
@endsection

