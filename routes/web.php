<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


use Illuminate\Support\Facades\Route;


Route::group(['prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {
    // auth routes

    Auth::routes();
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/', 'HomeController@index')->name('home');
    // site routes
    Route::group(['middleware' => ['prevent-back-history', 'auth']], function () {

        Route::get('/show', 'HomeController@show')->name('show');
        Route::get('/user/logout', 'HomeController@logout')->name('user.logout');
        Route::get('/add/wishlist/{id}', 'WishlistController@addToWishList')->name('wishlist.add');
        // add cart
        Route::get('/add/cart/{id}', 'CartController@addToCart')
            ->name('cart.add');
        // show cart
        Route::get('/show/all/cart', 'CartController@showCart')
            ->name('cart.show');
        // check
        Route::get('/check', 'CartController@check')
            ->name('cart.check');

        Route::post('/cart/delete/{rowId}', 'CartController@deleteCart')
            ->name('cart.delete');
        // edit cart

        // edit cart

        Route::get('/show/product/details/{id}/{product}', 'ProductController@productDetails')->name('product.details.show');
        Route::post('/show/product/details/{id}', 'ProductController@addToCart')->name('product.cart.add');

        Route::post('/update/cart', 'CartController@updateCart')
            ->name('cart.product.update');

        // user checkout

        Route::get('/cart/user/checkout', 'CartController@UserCheckOut')
            ->name('cart.user.checkout');
        // user wishList
        Route::get('/user/wishlist', 'CartController@wishList')
            ->name('user.wishList');
        // apply coupon
        Route::post('/user/apply/coupon', 'CartController@coupon')
            ->name('apply.coupon');
        //remove.coupon
        Route::get('/user/remove/coupon', 'CartController@remove')
            ->name('remove.coupon');
        // payemnt
        Route::get('/user/payment/page', 'CartController@paymentPage')
            ->name('payment.page');

        Route::post('/user/payment/page/complete', 'PaymentController@paymentPageComplete')
            ->name('payment.page.complete');

        Route::post('/user/payment/charge', 'PaymentController@charge')
            ->name('charge');

        // shop routes

        Route::get('/shop/products/{id}', 'ProductController@products')
            ->name('shop.products');

        Route::any('user/notifications/get', 'NotificationController@getNotifications');
        Route::any('user/notifications/read', 'NotificationController@markAsRead');
        Route::any('user/notifications/read/{id}', 'NotificationController@markAsReadAndRedirect');
    });

});



