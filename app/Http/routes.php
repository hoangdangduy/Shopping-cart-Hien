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

/*
 * Route view start
 */
Route::get('/', [
    'as' => 'routeViewHome',
    'uses' => 'View\ViewController@viewHome'
]);

Route::get('/san-pham', [
    'as' => 'routeViewProduct',
    'uses' => 'View\ViewController@viewProduct'
]);

Route::get('/dich-vu', [
    'as' => 'routeViewService',
    'uses' => 'View\ViewController@viewService'
]);

Route::get('/tin-tuc', [
    'as' => 'routeViewNews',
    'uses' => 'View\ViewController@viewNews'
]);

Route::get('/lien-he', [
    'as' => 'routeViewContact',
    'uses' => 'View\ViewController@viewContact'
]);

Route::get('/dang-nhap', [
    'as' => 'routeViewLogin',
    'uses' => 'View\ViewController@viewLogin'
]);

Route::get('/dang-ky', [
    'as' => 'routeViewRegister',
    'uses' => 'View\ViewController@viewRegister'
]);
/*
 * Route view end
 */




Route::get('category/{id}', [
    'as' => 'getShowCategoryById',
    'uses' => 'CategoryController@getShowCategoryById'
]);

Route::get('category', [
    'as' => 'getShowCategory',
    'uses' => 'CategoryController@getShowCategory'
]);

/*
 * Restful api demo
 */
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



Route::auth();

Route::get('/home', 'HomeController@index');

Route::auth();

Route::get('/home', 'HomeController@index');
