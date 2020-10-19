<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light navbar-border">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span
            class="float-md-left d-block d-md-inline-block">Copyright &copy; 2019 <a class="text-bold-800 grey darken-2"
                                                                                     href="https://1.envato.market/modern_admin"
                                                                                     target="_blank">PIXINVENT</a></span><span
            class="float-md-right d-none d-lg-block">Hand-crafted & Made with<i class="ft-heart pink"></i><span
                id="scroll-top"></span></span></p>
</footer>
<!-- END: Footer-->


<!-- BEGIN: Vendor JS-->

<script src="{{asset('app-assets/vendors/js/material-vendors.min.js')}}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{asset('app-assets/vendors/js/ui/headroom.min.js')}}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{asset('app-assets/js/core/app-menu.js')}}"></script>

<script src="{{asset('app-assets/js/core/app.js')}}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{asset('app-assets/js/scripts/pages/material-app.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/extensions/swiper.min.js')}}"></script>
<script src="{{asset('app-assets/js/scripts/extensions/ex-component-swiper.js')}}"></script>

<script src="{{asset('app-assets/vendors/js/ui/prism.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/extensions/jquery.raty.js')}}"></script>

<script src="{{asset('app-assets/vendors/js/extensions/jquery.cookie.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/extensions/jquery.treeview.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/extensions/wNumb.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/extensions/nouislider.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/forms/icheck/icheck.min.js')}}"></script>
<!-- END: Page Vendor JS-->

<script src="{{asset('app-assets/vendors/js/extensions/sweetalert2.all.min.js')}}"></script>
<script src="{{asset('app-assets/js/scripts/extensions/ex-component-sweet-alerts.js')}}"></script>

<script src="{{asset('app-assets/js/scripts/pages/content-panel-sidebar.js')}}"></script>
<script src="{{asset('app-assets/js/scripts/pages/ecommerce-product-shop.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/extensions/toastr.min.js')}}"></script>
<script src="{{asset('app-assets/js/scripts/extensions/toastr.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/extensions/jquery.cookie.js')}}"></script>
<!-- END: Page Vendor JS-->

<script src="{{asset('app-assets/js/scripts/pages/ecommerce-product-details.js')}}"></script>
<script src="{{asset('assets/js/jquery.royalslider.min.js')}}"></script>
<script src="{{asset('app-assets/js/scripts/pages/ecommerce-cart.js')}}"></script>
<script src="{{asset('app-assets/js/scripts/noty/noty.min.js')}}"></script>
<script src="https://js.stripe.com/v3/"></script>

<script>
    $(document).ready(function () {

        $('.addToWishList').on('click', function () {
                {{--// ""--}}
            var id = $(this).data('id');
            if (id) {
                $.ajax({
                    url: " {{ url('/add/wishlist/') }}/" + id,
                    type: "GET",
                    datType: "json",
                    success: function (data) {
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            onOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal.stopTimer)
                                toast.addEventListener('mouseleave', Swal.resumeTimer)
                            }
                        })

                        if ($.isEmptyObject(data.error)) {

                            Toast.fire({
                                icon: 'success',
                                title: data.success
                            });
                            $('.xxx' + id).addClass('ft-heart-on red');
                            $('.xxx' + id).removeClass('ft-heart');
                            $('.innerText' + id).text("{{__('site.Remove From WishList')}}");
                            $('.countWish').text(data.count_add);
                        } else {
                            Toast.fire({
                                icon: 'error',
                                title: data.error
                            });
                            $('.xxx' + id).addClass('ft-heart');
                            $('.xxx' + id).removeClass('ft-heart-on red');
                            $('.innerText' + id).text("{{__('site.Add To WishList')}}");

                            $('.countWish').text(data.count_remove);
                        }


                    },
                });

            } else {
                alert('danger');
            }
        });
        $('.addToCart').on('click', function () {
            var id = $(this).data('id');
            if (id) {
                $.ajax({
                    url: " {{ url('/add/cart/') }}/" + id,
                    type: "GET",
                    datType: "json",
                    success: function (data) {
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            onOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal.stopTimer)
                                toast.addEventListener('mouseleave', Swal.resumeTimer)
                            }
                        })

                        if ($.isEmptyObject(data.error)) {

                            Toast.fire({
                                icon: 'success',
                                title: data.success
                            });
                            // $('.xxx'+id).addClass('ft-heart-on red');
                            // $('.xxx'+id).removeClass('ft-heart');
                            {{--// $('.innerText').text("{{__('site.Remove From WishList')}}");--}}
                        } else {
                            Toast.fire({
                                icon: 'error',
                                title: data.error
                            });
                            // $('.xxx'+id).addClass('ft-heart');
                            // $('.xxx'+id).removeClass('ft-heart-on red');
                            {{--$('.innerText').text("{{__('site.Add To WishList')}}");--}}
                        }


                    },
                });

            } else {
                alert('danger');
            }
        });

        $('#gallery-2').royalSlider({
            fullscreen: {
                enabled: true,
                nativeFS: true
            },
            controlNavigation: 'thumbnails',
            thumbs: {
                orientation: 'vertical',
                paddingBottom: 4,
                appendSpan: true
            },
            transitionType: 'fade',
            autoScaleSlider: true,
            autoScaleSliderWidth: 1000,
            autoScaleSliderHeight: 800,
            loop: true,
            arrowsNav: false,
            keyboardNavEnabled: true

        });

        $(".bootstrap-touchspin-up").on('click', function (e) {
            var number = Number($('#coins').val());

            var orgPrice = Number($('.product-price').text()); //25

            let textPrice = Number($('#raw').text());

            let last = orgPrice * 10;

            var total = textPrice + orgPrice;
            if (total <= last) {
                $('#raw').text(total);
            }
        })

        $('.bootstrap-touchspin-down').on('click', function (e) {
            let number = Number($("#coins").val());
            let textPrice = Number($("#raw").text());
            let orgPrice = Number($(".product-price").text());
            let total = textPrice - orgPrice;
            if (total >= orgPrice) {
                $('#raw').text(total);
            }
            // $('#raw').text(total);
        })

        //$('.old_price').text(parseFloat($('#bread1').val()) * 2.5);

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

        // notifications
        let read = {};
        let unread = {};
        let unreadCount = 0

        function getNotifications() {
            axios.get('user/notifications/get').then(res => {
                $(this).read = res.data.read;
                $(this).unread = res.data.unread;
                $(this).unreadCount = res.data.unread.length;
            }).catch(error => Exception.handle(error))
        }

        function readNotifications(notification) {
            axios.post('user/notifications/read', {id: notification.id}).then(res => {
                $(this).unread.splice(notification, 1);
                $(this).read.push(notification);
                $(this).unreadCount--;
            })
        }

        getNotifications();
        let userId = $('meta[name="userId"]').attr('content');
        Echo.private('App.User.' + userId)
            .notification((notification) => {
                $(this).unread.unshift(notification);
                $(this).unreadCount++;
            });
    });

</script>
<script>
    // Create a Stripe client.
    var stripe = Stripe('pk_test_uJ4FiMMYgSG7L4CX3kZYCoP300WfOF1Cj8');

    // Create an instance of Elements.
    var elements = stripe.elements();

    // Custom styling can be passed to options when creating an Element.
    // (Note that this demo uses a wider set of styles than the guide below.)
    var style = {
        base: {
            color: '#32325d',
            fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
            fontSmoothing: 'antialiased',
            fontSize: '16px',
            '::placeholder': {
                color: '#aab7c4'
            }
        },
        invalid: {
            color: '#fa755a',
            iconColor: '#fa755a'
        }
    };

    // Create an instance of the card Element.
    var card = elements.create('card', {style: style});

    // Add an instance of the card Element into the `card-element` <div>.
    card.mount('#card-element');
    // Handle real-time validation errors from the card Element.
    card.on('change', function (event) {
        var displayError = document.getElementById('card-errors');
        if (event.error) {
            displayError.textContent = event.error.message;
        } else {
            displayError.textContent = '';
        }
    });

    // Handle form submission.
    var form = document.getElementById('payment-form');
    form.addEventListener('submit', function (event) {
        event.preventDefault();

        stripe.createToken(card).then(function (result) {
            if (result.error) {
                // Inform the user if there was an error.
                var errorElement = document.getElementById('card-errors');
                errorElement.textContent = result.error.message;
            } else {
                // Send the token to your server.
                stripeTokenHandler(result.token);
            }
        });
    });

    // Submit the form with the token ID.
    function stripeTokenHandler(token) {
        // Insert the token ID into the form so it gets submitted to the server
        var form = document.getElementById('payment-form');
        var hiddenInput = document.createElement('input');
        hiddenInput.setAttribute('type', 'hidden');
        hiddenInput.setAttribute('name', 'stripeToken');
        hiddenInput.setAttribute('value', token.id);
        form.appendChild(hiddenInput);

        // Submit the form
        form.submit();
    }
</script>
{{--<script src="{{ asset(mix('js/app.js')) }}"></script>--}}
<!-- END: Page JS-->


