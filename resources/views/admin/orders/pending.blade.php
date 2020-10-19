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
    <section id="file-export">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{__('site.coupons')}}</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>

                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <a class="btn btn btn-sm" href="{{route('coupons.create')}}"><i
                                        class="d-md-none d-block ft-plus white"></i>
                                    <span class="d-md-block d-none"> <i
                                            class="la la-plus font-small-2"></i> {{__('site.add_coupon')}}</span>
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
                                    <th>{{__('site.payment_type')}}</th>
                                    <th>{{__('site.order_id')}}</th>
                                    <th>{{__('site.total')}}</th>
                                    <th>{{__('site.status')}}</th>
                                    <th>{{__('site.date')}}</th>
                                    <th>{{__('site.Actions')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($orders as  $order)
                                    <tr class="pull-up">
                                        <td>{{$order->payment_type}}</td>
                                        <td class="name">#{{$order->stripe_order_id}}</td>
                                        <td class="name">{{$order->total}}</td>
                                        <td>
                                            @if($order->status == 0)
                                                <span class="badge badge-warning">Pending</span>
                                            @elseif($order->status == 1)
                                                <span class="badge badge-info">Accepted</span>
                                            @elseif($order->status == 2)
                                                <span class="badge badge-warning">Progress</span>
                                            @elseif($order->status == 3)
                                                <span class="badge badge-success">Delivered</span>
                                            @else
                                                <span class="badge badge-danger">Cancel</span>

                                            @endif

                                        </td>
                                        <td class="name">{{$order->date}}</td>
                                        <td><a class="btn btn-sm"
                                               href="{{route('orders.show',$order->id)}}"><i
                                                    class="ft-eye text-info"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr class="pull-up">
                                    <th>{{__('site.payment_type')}}</th>
                                    <th>{{__('site.order_id')}}</th>
                                    <th>{{__('site.total')}}</th>
                                    <th>{{__('site.status')}}</th>
                                    <th>{{__('site.date')}}</th>
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
