<div class="modal fade" id="AddContactModal" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <section class="contact-form">
                <form action="{{route('categories.store')}}" method="POST"
                      id="form-add-contact" class="contact-input">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title"
                            id="exampleModalLabel1">{{__('site.add_category')}}</h5>
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
                    </div>
                    <div class="modal-footer">
                        <fieldset
                            class="form-group position-relative has-icon-left mb-0">
                            <button type="submit" id="add-contact-item"
                                    class="btn btn-dark text-white  add-contact-item">
                                <i
                                    class="la la-paper-plane-o d-block d-lg-none"></i>
                                <span
                                    class="d-none d-lg-block"> <i
                                        class="la la-save font-small-2"></i> {{__('site.save')}}</span>
                            </button>
                        </fieldset>
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>
