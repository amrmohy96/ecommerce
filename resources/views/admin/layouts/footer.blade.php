<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light navbar-border navbar-shadow">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span
            class="float-md-left d-block d-md-inline-block">Copyright &copy; 2020 <a class="text-bold-800 grey darken-2"
                                                                                     href="https://github.com/amrmohy96"
                                                                                     target="_blank">{{auth()->user()->name ?? ''}}</a></span><span
            class="float-md-right d-none d-lg-block">Hand-crafted & Made with<i class="ft-heart pink"></i><span
                id="scroll-top"></span></span></p>
</footer>
<!-- END: Footer-->


<!-- BEGIN: Vendor JS-->
<script src="{{asset('app-assets/vendors/js/material-vendors.min.js')}}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{asset('app-assets/vendors/js/charts/chartist.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/charts/chartist-plugin-tooltip.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/charts/raphael-min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/charts/morris.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/timeline/horizontal-timeline.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/ui/jquery.sticky.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/tables/buttons.flash.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/tables/jszip.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/tables/pdfmake.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/tables/vfs_fonts.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/tables/buttons.html5.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/tables/buttons.print.min.js')}}"></script>
<!-- END: Page Vendor JS-->
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{asset('app-assets/js/core/app-menu.js')}}"></script>
<script src="{{asset('app-assets/js/core/app.js')}}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{asset('app-assets/js/scripts/pages/dashboard-ecommerce.js')}}"></script>
<script src="{{asset('app-assets/js/scripts/tables/datatables/datatable-advanced.js')}}"></script>
<script src="{{asset('app-assets/js/scripts/noty/noty.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/extensions/toastr.min.js')}}"></script>
<script src="{{asset('app-assets/js/scripts/extensions/toastr.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/extensions/sweetalert2.all.min.js')}}"></script>
<script src="{{asset('app-assets/js/scripts/extensions/ex-component-sweet-alerts.js')}}"></script>
<script src="{{asset('app-assets/js/scripts/image_preview.js')}}"></script>
<script src="{{asset('app-assets/js/scripts/pages/page-users.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/extensions/jquery.steps.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/pickers/dateTime/moment-with-locales.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/pickers/daterange/daterangepicker.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('app-assets/js/scripts/pages/material-app.js')}}"></script>
<script src="{{asset('app-assets/js/scripts/forms/wizard-steps.js')}}"></script>

<script src="{{asset('app-assets/vendors/js/forms/select/selectize.min.js')}}"></script>
<script src="{{asset('app-assets/js/core/libraries/jquery_ui/jquery-ui.min.js')}}"></script>
<script src="{{asset('app-assets/js/scripts/forms/select/form-selectize.js')}}"></script>
<script src="{{asset('app-assets/js/scripts/tooltip/tooltip.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/charts/jquery.sparkline.min.js')}}"></script>
<!-- BEGIN: Page Vendor JS-->
<script src="{{asset('app-assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/ui/prism.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/extensions/jquery.raty.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/extensions/jquery.cookie.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/extensions/jquery.treeview.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/forms/icheck/icheck.min.js')}}"></script>
<script src="{{asset('app-assets/js/scripts/pages/ecommerce-product-details.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/ui/plyr.min.js')}}"></script>
<script src="{{asset('app-assets/js/scripts/pages/ex-component-media-player.js')}}"></script>


<script>
    $(document).ready(function () {
        {{--document.getElementById("myForm").method = "post";--}}
        {{--document.getElementById("myForm").action = "{{route('products.store')}}"--}}
        //delete
        $('.delete').click(function (e) {

            var that = $(this)

            e.preventDefault();

            var n = new Noty({
                text: "{{__('site.confirm_delete')}}",
                type: "success",
                killer: true,
                buttons: [
                    Noty.button("@lang('site.yes')", 'btn btn-danger mr-2', function () {
                        that.closest('form').submit();
                    }),

                    Noty.button("@lang('site.no')", 'btn btn-info  mr-2', function () {
                        n.close();
                        swal("Safe!", "Your Data Are Safe!", "success");
                    })
                ]
            });

            n.show();

        });//end of delete

        // // image preview
        $(".image").change(function () {

            if (this.files && this.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.image-preview').attr('src', e.target.result);
                }

                reader.readAsDataURL(this.files[0]);
            }

        });

        $(".image_one").change(function () {

            if (this.files && this.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.image-preview_one').attr('src', e.target.result).width(80)
                        .height(80);
                }

                reader.readAsDataURL(this.files[0]);
            }

        });
        $(".image_two").change(function () {

            if (this.files && this.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.image-preview_two').attr('src', e.target.result).width(80)
                        .height(80);
                }

                reader.readAsDataURL(this.files[0]);
            }

        });

        $(".image_three").change(function () {

            if (this.files && this.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.image-preview_three').attr('src', e.target.result).width(80)
                        .height(80);
                }

                reader.readAsDataURL(this.files[0]);
            }

        });

        $('select[name="category_id"]').on('change', function () {
            var category_id = $(this).val();
            if (category_id) {

                $.ajax({
                    url: "{{ url('/admin/products/sub/') }}/" + category_id,
                    type: "GET",
                    dataType: "json",
                    success: function (data) {
                        var d = $('select[name="subcategory_id"]').empty();
                        $.each(data, function (key, value) {

                            $('select[name="subcategory_id"]').append('<option value="' + value.id + '">' + value.name + '</option>');

                        });
                    },
                });

            } else {
                alert('danger');
            }

        });


    });//end of ready
</script>


<script>


    // $(".number-tab-steps").steps({
    //     headerTag: "h6",
    //     bodyTag: "fieldset",
    //     transitionEffect: "fade",
    //     titleTemplate: '<span class="step">#index#</span> #title#',
    //     labels: {
    //         finish: 'Submit'
    //     },
    //     onFinished: function (event, currentIndex) {
    //         var form = $(this);
    //         // Submit form input
    //         form.submit();
    //     }
    // });
</script>


<!-- BEGIN: Page Vendor JS-->
