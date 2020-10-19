@extends('admin.layouts.main')

@section('bread_crumb')
    <div class="row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <h3 class="content-header-title white">{{__('site.brands_list')}}</h3>
            <div class="row breadcrumbs-top">
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{__('site.ecommerce')}}</a>
                        </li>
                        <li class="breadcrumb-item"><a
                                href="{{route('brands.index')}}">{{__('site.brands')}}</a>
                        </li>
                        <li class="breadcrumb-item active">{{__('site.all_brands')}}
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
                        <h4 class="card-title">{{__('site.all_brands')}}</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>

                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <button class="btn btn-primary btn-sm " data-toggle="modal"
                                        data-target="#AddContactModal"><i class="d-md-none d-block ft-plus white"></i>
                                    <span class="d-md-block d-none"> <i
                                            class="la la-plus font-small-2"></i> {{__('site.add_brand')}}</span>
                                </button>
                                @include('admin.brands.create')
                                @include('admin.categories.create')
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                <li><a data-action="close"><i class="ft-x"></i></a></li>
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
                                    <th>{{__('site.Logo')}}</th>
                                    <th>{{__('site.Actions')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($brands as $index => $brand)
                                    <tr class="pull-up">
                                        <td>{{$index + 1}}</td>
                                        <td class="name">{{$brand->name}}
                                        <td class="text-truncate p-1">
                                            <ul class="list-unstyled users-list m-0">
                                                <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-original-title="{{$brand->name}}"
                                                    class="avatar avatar-sm pull-up">
                                                    <img class="media-object rounded-circle"
                                                         src="{{asset('storage/'.$brand->logo)}}"
                                                         alt="Avatar">
                                                </li>
                                            </ul>
                                        </td>
                                        <td><a class="btn btn-sm"
                                               href="{{route('brands.edit',$brand->id)}}"><i
                                                    class="ft-edit text-info"></i></a>
                                            <form action="{{route('brands.destroy',$brand->id)}}" method="post"
                                                  style="display: inline-block;">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-sm delete" type="submit">
                                                    <i class="ft-trash-2 text-danger"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr class="pull-up">
                                    <th>{{__('site.ID')}}</th>
                                    <th>{{__('site.Name')}}</th>
                                    <th>{{__('site.Logo')}}</th>
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

