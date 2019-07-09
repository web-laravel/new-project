<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('product', 'FrontendController@getHome');

Route::get('category/{id}.html','FrontendController@getCategory');

Route::get('test', function () {
    return view('frontend.product-details');
});

Route::group(['namespace' => 'Admin'], function () {
    Route::group(['prefix' => 'login', 'middleware' => 'CheckLogedIn'], function () {
        Route::get('/', 'LoginController@getLogin');
        Route::post('/', 'LoginController@postLogin');
    });

    Route::get('logout', 'HomeController@getlogout');
    Route::group(['prefix' => 'admin', 'middleware' => 'CheckLogedOut'], function () {
        Route::get('home', 'HomeController@getHome');

        Route::group(['prefix' => 'user'], function () {
            Route::get('/', 'UserController@getUser');
        });

        Route::group(['prefix' => 'category'], function () {
            Route::get('/', 'CategoryController@getCategory');
            Route::post('/', 'CategoryController@postCategory');

            Route::get('edit/{id}', 'CategoryController@getEditCategory');
            Route::post('edit/{id}', 'CategoryController@postEditCategory');

            Route::get('delete/{id}', 'CategoryController@getDeleteCategory');
        });

        Route::group(['prefix' => 'product'], function () {
            Route::get('/', 'ProductController@getProduct');

            Route::get('add', 'ProductController@getAddProduct');
            Route::post('add', 'ProductController@postAddProduct');

            Route::get('edit/{id}', 'ProductController@getEditProduct');
            Route::post('edit/{id}', 'ProductController@postEditProduct');

            Route::get('delete/{id}', 'ProductController@getDeleteProduct');

            Route::group(['prefix' => 'detail/{id_prod}'], function () {
                Route::get('/', 'ProductController@getProductDetail');

                Route::get('add', 'ProductController@getAddDetailProduct');
                Route::post('add', 'ProductController@postAddDetailProduct');

                Route::get('edit/{id_prod_detail}', 'ProductController@getEditDetailProduct');
                Route::post('edit/{id_prod_detail}', 'ProductController@postEditDetailProduct');

                Route::get('delete/{id_prod_detail}', 'ProductController@getDeleteDetailProduct');
            });
        });
    });
});