<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('category/{id}', [
    'as' => 'getShowCategoryById',
    'uses' => 'CategoryController@getShowCategoryById'
]);

Route::get('category', [
    'as' => 'getShowCategory',
    'uses' => 'CategoryController@getShowCategory'
]);

Route::group(['prefix' => 'stripe'], function () {
    Route::post('category', [
        'as' => 'postShowCategoryById',
        'uses' => 'CategoryController@postShowCategoryById'
    ]);

    Route::put('category', [
        'as' => 'putUpdateCategoryById',
        'uses' => 'CategoryController@putUpdateCategoryById'
    ]);

    Route::delete('category', [
        'as' => 'deleteCategoryById',
        'uses' => 'CategoryController@deleteCategoryById'
    ]);

    Route::get('product-trademark/{trademark}', [
        'as' => 'getSearchProductyByTrademark',
        'uses' => 'ProductController@getSearchProductyByTrademark'
    ]);

    Route::get('product-origin/{origin}', [
        'as' => 'getSearchProductyByOrigin',
        'uses' => 'ProductController@getSearchProductyByOrigin'
    ]);
});


