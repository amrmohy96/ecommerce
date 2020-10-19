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
                        <li class="breadcrumb-item active">{{__('site.edit_brand')}}
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
    <section class="users-edit">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">

                            <!-- users edit account form start -->
                            <form action="{{route('brands.update',$brand->id)}}" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                @method('put')

                                <div class="media mb-2">
                                    <div class="mr-2">
                                        <img src="{{asset('storage/'.$brand->logo)}}"
                                             alt="users avatar"
                                             class="users-avatar-shadow image rounded-circle image-preview" height="64"
                                             width="64">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">{{__('site.Logo')}}</h4>
                                        <div class="col-12 px-0 d-flex">
                                            <label class="btn btn-sm btn-primary mr-25">
                                                <input type="file" class="image" name="logo" style="display: none">
                                                {{__('site.change')}}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    @foreach (config('translatable.locales') as $locale)
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label>{{__('site.' . $locale . '.name')}}</label>
                                                    <input type="text" name="{{ $locale }}[name]"
                                                           id="contact-name"
                                                           class="contact-name form-control" required
                                                           placeholder="{{__('site.' . $locale . '.name')}}"
                                                           value="{{ $brand->translate($locale)->name}}">
                                                    @error(''. $locale .'.name')
                                                    <small class="text-danger">{{$message}}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                        <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">
                                            {{__('site.save_changes')}}
                                        </button>
                                        <a href="{{route('brands.index')}}" type="reset"
                                           class="btn btn-light">{{__('site.cancel')}}</a>
                                    </div>
                                </div>
                            </form>
                            <!-- users edit account form ends -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
