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
                                                <th>Image</th>
                                                <th>Details</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($data as $wishlist)
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img class="img-xl"
                                                                 src="{{asset('storage/products/'.$wishlist->image_one)}}"
                                                                 alt="Card image cap">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        {{$wishlist->name}}
                                                    </td>
                                                    <td>
                                                        {{$wishlist->details}}
                                                    </td>
                                                    <td>
                                                        <a class=" btn btn-teal text-white">
                                                            <i class="ft-shopping-cart"></i> Add Cart</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="card-footer">
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

