@extends('admin.layouts.main')

@section('bread_crumb')
    <div class="row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <h3 class="content-header-title white">{{__('site.subcategories_list')}}</h3>
            <div class="row breadcrumbs-top">
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{__('site.ecommerce')}}</a>
                        </li>
                        <li class="breadcrumb-item"><a
                                href="{{route('subcategories.index')}}">{{__('site.sub_categories')}}</a>
                        </li>
                        <li class="breadcrumb-item active">{{__('site.all_subcategories')}}
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
                        <h4 class="card-title">{{__('site.all_subcategories')}}</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>

                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <a class="btn btn-primary btn-sm" href="{{route('subcategories.create')}}"><i
                                        class="d-md-none d-block ft-plus white"></i>
                                    <span class="d-md-block d-none"> <i
                                            class="la la-plus font-small-2"></i> {{__('site.add_subcategory')}}</span>
                                </a>
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
                                    <th>{{__('site.category_name')}}</th>
                                    <th>{{__('site.Actions')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($subcategories as $index => $subcategory)
                                    <tr class="pull-up">
                                        <td>{{$index + 1}}</td>
                                        <td class="name">{{$subcategory->name}}</td>
                                        <td class="name">{{$subcategory->category->name}}</td>
                                        <td><a class="btn btn-sm"
                                               href="{{route('subcategories.edit',$subcategory->id)}}"><i
                                                    class="ft-edit text-info"></i></a>
                                            <form action="{{route('subcategories.destroy',$subcategory->id)}}"
                                                  method="post"
                                                  style="display: inline-block;">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-sm delete" type="submit"><i
                                                        class="ft-trash-2 text-danger "></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr class="pull-up">
                                    <th>{{__('site.ID')}}</th>
                                    <th>{{__('site.Name')}}</th>
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
