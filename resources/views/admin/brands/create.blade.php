<div class="modal fade" id="AddContactModal" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <section class="contact-form">
                <form action="{{route('brands.store')}}" method="POST"
                      id="form-add-contact" class="contact-input" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title"
                            id="exampleModalLabel1">{{__('site.add_brand')}}</h5>
                        <button type="button" class="close" data-dismiss="modal"
                                aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @foreach (config('translatable.locales') as $locale)
                            <fieldset class="form-group col-12">
                                <input type="text" name="{{ $locale }}[name]"
                                       id="contact-name"
                                       class="contact-name form-control" required
                                       placeholder="{{__('site.' . $locale . '.name')}}"
                                       value="{{ old($locale . '.name') }}">
                                @error(''. $locale .'.name')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </fieldset>
                        @endforeach

                        <fieldset>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="file" name="logo" class="form-control" id="logo" required>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex">
                            <div class="mx-auto">
                                <button type="submit" class="btn btn-success btn-lg round btn-glow">
                                    {{__('site.save')}}</button>
                            </div>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>
