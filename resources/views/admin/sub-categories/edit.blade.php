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
                        <li class="breadcrumb-item active">{{__('site.edit_sub_category')}}
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
                            <form action="{{route('subcategories.update',$subcategory->id)}}" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                @method('put')

                                <div class="row">

                                    @foreach (config('translatable.locales') as $locale)
                                        <fieldset class="form-group col-12">

                                            <div class="controls">
                                                <label>{{__('site.' . $locale . '.name')}}</label>
                                                <input type="text" name="{{ $locale }}[name]"
                                                       id="contact-name"
                                                       class="contact-name form-control" required
                                                       placeholder="{{__('site.' . $locale . '.name')}}"
                                                       value="{{ $subcategory->translate($locale)->name}}">
                                                @error(''. $locale .'.name')
                                                <small class="text-danger">{{$message}}</small>
                                                @enderror
                                            </div>

                                        </fieldset>
                                    @endforeach
                                    <fieldset class="form-group col-12">

                                        <label>{{__('site.categories_local')}}</label>
                                        <select class="form-control" name="category_id">
                                            <option value="">{{__('site.choose_category_name')}}</option>
                                            @foreach($categories as $category)
                                                <option
                                                    value="{{$category->id}}" {{$category->id === $subcategory->category_id ? 'selected' : ''}}>{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror

                                    </fieldset>

                                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                        <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">
                                            {{__('site.save_changes')}}
                                        </button>
                                        <a href="{{route('categories.index')}}" type="reset"
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
