@extends('admin.layouts.main')
@section('bread_crumb')
    <div class="row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <h3 class="content-header-title white">{{__('site.all_users')}}</h3>
            <div class="row breadcrumbs-top">
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{__('site.ecommerce')}}</a>
                        </li>
                        <li class="breadcrumb-item"><a
                                href="{{route('users.index')}}">{{__('site.users')}}</a>
                        </li>
                        <li class="breadcrumb-item active">{{__('site.all_users')}}
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
                        <h4 class="card-title">{{__('site.users')}}</h4>

                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>

                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <a class="btn btn btn-sm" href="{{route('users.create')}}"><i
                                        class="d-md-none d-block ft-plus white"></i>
                                    <span class="d-md-block d-none"> <i
                                            class="la la-plus font-small-2"></i> {{__('site.add_user')}}</span>
                                </a>
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
                                    <th>{{__('site.Access')}}</th>
                                    <th>{{__('site.Actions')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $index => $user)
                                    <tr class="pull-up">
                                        <td width="10px;">{{$index + 1}}</td>
                                        <td>{{$user->name}}</td>
                                        <td width="350px;">
                                            @if($user->product == 1)
                                                <span class="badge badge-success">{{__('site.products')}}</span>
                                            @else
                                            @endif
                                            @if($user->category == 1)
                                                <span class="badge badge-success">{{__('site.categories')}}</span>
                                            @else
                                            @endif
                                            @if($user->role == 1)
                                                <span class="badge badge-success">{{__('site.roles')}}</span>
                                            @else
                                            @endif
                                            @if($user->order == 1)
                                                <span class="badge badge-success">{{__('site.orders')}}</span>
                                            @else
                                            @endif
                                            @if($user->coupon == 1)
                                                <span class="badge badge-success">{{__('site.coupons')}}</span>
                                            @else
                                            @endif
                                                @if($user->brand == 1)
                                                    <span class="badge badge-success">{{__('site.brands')}}</span>
                                                @else
                                                @endif
                                        </td>
                                        <td >
                                            <a href="{{route('users.edit',$user->id)}}" class="tito">
                                                <i class="ft-edit btn btn-sm text-info"></i>
                                                <span class="titotext">{{__('site.edit')}}</span>
                                            </a>
                                            <form action="{{route('users.destroy',$user->id)}}" method="post"
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
                                    <th>{{__('site.Access')}}</th>
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
