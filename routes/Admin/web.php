<?php


Route::
group(
    ['prefix'
    => LaravelLocalization::setLocale(),
        'middleware' =>
            ['localeSessionRedirect',
                'localizationRedirect',
                'localeViewPath']]
    , function () {

    Route::prefix('admin')
        ->group(function () {
            // admin auth
            Route::get('/login', 'LoginController@showLoginForm')
                ->name('admin.login');

            Route::post('/login', 'LoginController@login')
                ->name('admin.login.store');

            Route::get('/logout', 'LoginController@logout')
                ->name('admin.logout');

            Route::middleware('auth:admin')->group(function () {
                // dashboard
                Route::get('/dashboard', 'DashboardController@index')
                    ->name('admin.dashboard');

                // categories routes
                Route::resource('categories', 'CategoryController');
                Route::resource('brands', 'BrandController');
                Route::resource('subcategories', 'SubCategoryController');
                Route::resource('coupons', 'CouponController');
                Route::resource('products', 'ProductController');
                Route::get('products/sub/{category_id}', 'ProductController@getAllSubCategories');
                Route::get('products/activate/{id}', 'ProductController@activate')
                    ->name('products.activate');
                Route::get('products/deactivate/{id}', 'ProductController@deactivate')
                    ->name('products.deactivate');
                Route::resource('orders', 'OrderController');


                Route::get('orders/accept/{id}', 'OrderController@accept')
                    ->name('order.accept');

                Route::get('orders/process/{id}', 'OrderController@process')
                    ->name('order.process');

                Route::get('orders/delivery/{id}', 'OrderController@delivery')
                    ->name('order.delivery');

                Route::get('orders/cancel/{id}', 'OrderController@cancel')
                    ->name('order.cancel');

                Route::get('accepted/orders', 'OrderController@AcceptedOrders')
                    ->name('orders.accepted');

                Route::get('canceled/orders', 'OrderController@CanceledOrders')
                    ->name('orders.canceled');

                Route::get('processed/orders', 'OrderController@ProcessedOrders')
                    ->name('orders.processed');

                Route::get('succeeded/orders', 'OrderController@SucceededOrders')
                    ->name('orders.succeeded');

                // roles
                Route::resource('users', 'UserRoleController');

            });
        });
});



