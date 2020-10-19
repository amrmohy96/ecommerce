@extends('admin.layouts.main')
@section('bread_crumb')
    <div class="row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <h3 class="content-header-title white">{{__('site.orders')}}</h3>
            <div class="row breadcrumbs-top">
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{__('site.ecommerce')}}</a>
                        </li>
                        <li class="breadcrumb-item"><a
                                href="{{route('orders.index')}}">{{__('site.orders')}}</a>
                        </li>
                        <li class="breadcrumb-item active">{{__('site.all_pending_orders')}}
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
    <div class="shopping-cart">
        <div class="tab-content pt-1">
            <div role="tabpanel" class="tab-pane active" id="shop-cart-tab" aria-expanded="true"
                 aria-labelledby="shopping-cart">
                <div class="card">
                    <div class="card-header bg-black">
                        <h4 class="card-title text-white">Product Details</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <table class="table display responsive nowrap">
                                <thead>
                                <tr>
                                    <th class="wd-15p">Product ID</th>
                                    <th class="wd-15p">Product Name</th>
                                    <th class="wd-15p">Image</th>
                                    <th class="wd-15p">Color</th>
                                    <th class="wd-15p">Size</th>
                                    <th class="wd-15p">Quantity</th>
                                    <th class="wd-15p">Unit Price</th>
                                    <th class="wd-20p">Total</th>

                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                    <td>{{ $details->product->code }}</td>
                                    <td>{{ $details->product_name }}</td>

                                    <td><img alt=""
                                             src="{{asset('storage/'.$details->product->image_one)}}"
                                             height="50px;" width="50px;">
                                    </td>
                                    <td>{{ $details->color }}</td>
                                    <td>{{ $details->size }}</td>
                                    <td>{{ $details->quantity }}</td>
                                    <td>{{ $details->single_price }}</td>
                                    <td>{{ $details->total_price }}</td>

                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row match-height">
                    <div class="col-lg-6 col-md-12">
                        <div class="card pull-up">
                            <div class="card-header bg-black">
                                <h4 class="card-title text-white">Shipping Details</h4>
                            </div>
                            <div class="card-content text-black-50 text-bold-700">
                                <div class="card-body  ">
                                    <table class="table">
                                        <tr>
                                            <th> Name:</th>
                                            <th> {{ $shipping->ship_name }} </th>
                                        </tr>

                                        <tr>
                                            <th> Phone:</th>
                                            <th> {{ $shipping->ship_phone }} </th>
                                        </tr>


                                        <tr>
                                            <th> Email:</th>
                                            <th>{{ $shipping->ship_email }} </th>
                                        </tr>


                                        <tr>
                                            <th> Address:</th>
                                            <th> {{ $shipping->ship_address }} </th>
                                        </tr>


                                        <tr>
                                            <th> City :</th>
                                            <th> {{ $shipping->ship_city }} </th>
                                        </tr>

                                        <tr>
                                            <th> Status:</th>
                                            <th>
                                                @if($order->status == 0)
                                                    <span class="badge badge-warning">Pending</span>
                                                @elseif($order->status == 1)
                                                    <span class="badge badge-info">Payment Accept</span>
                                                @elseif($order->status == 2)
                                                    <span class="badge badge-warning">Progress</span>
                                                @elseif($order->status == 3)
                                                    <span class="badge badge-success">Delivered</span>
                                                @else
                                                    <span class="badge badge-danger">Cancel</span>

                                                @endif

                                            </th>

                                        </tr>


                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="card text-black-50 text-bold-700 border-teal pull-up ">
                            <div class="card-header bg-black">
                                <h4 class="card-title text-white">Order Details</h4>
                            </div>
                            <div class="card-content ">
                                <div class="card-body ">
                                    <table class="table">
                                        <tr>
                                            <th> Name:</th>
                                            <th> {{ $order->name }} </th>
                                        </tr>

                                        <tr>
                                            <th> Phone:</th>
                                            <th> {{ $order->phone }} </th>
                                        </tr>


                                        <tr>
                                            <th> Payment Type:</th>
                                            <th>{{ $order->payment_type }} </th>
                                        </tr>


                                        <tr>
                                            <th> Payment Id:</th>
                                            <th> {{ $order->payment_id }} </th>
                                        </tr>


                                        <tr>
                                            <th> Total :</th>
                                            <th> {{ $order->total }} $</th>
                                        </tr>

                                        <tr>
                                            <th> Month:</th>
                                            <th> {{ $order->month }} </th>
                                        </tr>

                                        <tr>
                                            <th> Date:</th>
                                            <th> {{ $order->date }} </th>
                                        </tr>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="text-right">
                                        @if($order->status == 0)

                                            <a href="{{route('order.cancel',$order->id)}}"
                                               class="btn btn-danger text-white mr-2">{{__('site.cancel_order')}}</a>
                                            <a href="{{route('order.accept',$order->id)}}"
                                               class="btn btn-info text-white mr-2">{{__('site.accept_order')}}</a>

                                        @elseif($order->status == 1)
                                            <a href="{{route('order.process',$order->id)}}"
                                               class="btn btn-info text-white mr-2">{{__('site.process_delivery')}}</a>
                                        @elseif($order->status == 2)
                                            <a href="{{route('order.delivery',$order->id)}}"
                                               class="btn btn-success text-white mr-2">{{__('site.delivery_done')}}</a>
                                        @elseif($order->status == 4)
                                            <strong class="text-danger "> This order are not valid </strong>
                                        @else
                                            <strong class="text-success ">This product are successfully
                                                Delivered </strong>
                                        @endif


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
