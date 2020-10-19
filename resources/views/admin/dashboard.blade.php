@extends('admin.layouts.main')

@section('bread_crumb')
    <div class="row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <h3 class="content-header-title white">Dashboard</h3>
            <div class="row breadcrumbs-top">
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Ecommerce</a>
                        </li>
                        <li class="breadcrumb-item active">Dashboard
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="content-header-right col-md-3 col-12">
            <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
                <button class="btn btn-primary round  box-shadow-2 px-2 mb-1" id="btnGroupDrop1" type="button">add
                </button>
            </div>
        </div>
    </div>
@endsection

@section('content')

@endsection
