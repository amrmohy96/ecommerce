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
                                href="{{route('brands.index')}}">{{__('site.products')}}</a>
                        </li>
                        <li class="breadcrumb-item active">{{__('site.all_products')}}
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
    <section id="file-export">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{__('site.products')}}</h4>

                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>

                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <a class="btn btn btn-sm" href="{{route('products.create')}}"><i
                                        class="d-md-none d-block ft-plus white"></i>
                                    <span class="d-md-block d-none"> <i
                                            class="la la-plus font-small-2"></i> {{__('site.add_product')}}</span>
                                </a>
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            </ul>
                        </div>

                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body card-dashboard dataTables_wrapper dt-bootstrap">

                            <table class="table table-striped table-bordered file-export">
                                <thead>

                                <tr class="pull-up">
                                    <th>{{__('site.ID')}}</th>
                                    <th>{{__('site.Name')}}</th>
                                    <th>{{__('site.image')}}</th>
                                    <th>{{__('site.category_name')}}</th>
                                    <th>{{__('site.brand_name')}}</th>
                                    <th>{{__('site.quantity')}}</th>
                                    <th>{{__('site.status')}}</th>
                                    <th>{{__('site.Actions')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $index => $product)
                                    <tr class="pull-up">
                                        <td width="10px;">{{$index + 1}}</td>
                                        <td>{{$product->name}}</td>
                                        <td><img src="{{asset('storage/products/'.$product->image_one)}}" width="80px;"
                                                 height="80px;" alt="{{$product->name}}"></td>
                                        <td>{{$product->category->name}}</td>
                                        <td>{{$product->brand->name}}</td>
                                        <td width="10px;">{{$product->quantity}}</td>
                                        <td width="30px;">
                                            @if($product->status)
                                                <span class="badge badge-success">{{__('site.active')}}</span>
                                            @else
                                                <span class="badge badge-danger">{{__('site.inactive')}}</span>
                                            @endif
                                        </td>
                                        <td width="200px;">
                                            @if($product->status)
                                                <a href="{{route('products.deactivate',$product->id)}}" class="tito">
                                                    <i class="ft-toggle-left btn btn-sm text-danger"></i>
                                                    <span class="titotext">{{__('site.deactivate')}}</span>
                                                </a>
                                            @else
                                                <a href="{{route('products.activate',$product->id)}}" class="tito">
                                                    <i class="ft-toggle-right btn btn-sm text-success"></i>
                                                    <span class="titotext">{{__('site.activate')}}</span>
                                                </a>
                                            @endif

                                            <a href="{{route('products.show',$product->id)}}" class="tito">
                                                <i class="ft-eye btn btn-sm text-dark"></i>
                                                <span class="titotext">{{__('site.show')}}</span>
                                            </a>

                                            <a href="{{route('products.edit',$product->id)}}" class="tito">
                                                <i class="ft-edit btn btn-sm text-info"></i>
                                                <span class="titotext">{{__('site.edit')}}</span>
                                            </a>
                                            <form action="{{route('products.destroy',$product->id)}}" method="post"
                                                  style="display: inline-block;">
                                                @method('delete')
                                                @csrf
                                                <div class="tito">
                                                    <button style="border : none;" class="delete" type="submit"><i
                                                            class="ft-trash-2 btn btn-sm  text-danger "></i>
                                                        <span class="titotext">{{__('site.delete')}}</span>
                                                    </button>
                                                </div>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr class="pull-up">
                                    <th>{{__('site.ID')}}</th>
                                    <th>{{__('site.Name')}}</th>
                                    <th>{{__('site.image')}}</th>
                                    <th>{{__('site.category_name')}}</th>
                                    <th>{{__('site.brand_name')}}</th>
                                    <th>{{__('site.quantity')}}</th>
                                    <th>{{__('site.status')}}</th>
                                    <th>{{__('site.Actions')}}</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- File export table -->
@endsection
