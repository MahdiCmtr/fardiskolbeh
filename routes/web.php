<?php

Route::group([], function ($router) {
    $router->get('/buy-sales', [
        'uses' => 'EstateController@buyEstateList',
        'as' => 'list-Estate-Buy-Sales'
    ]);
    $router->get('/buy-sales/{category}', [
        'uses' => 'EstateController@buyEstateCategoryList',
        'as' => 'list-Estate-category-Buy-Sales'
    ]);
});
Route::group([], function ($router) {
    $router->get('/rent', [
        'uses' => 'EstateController@rentEstateList',
        'as' => 'list-Estate-rent'
    ]);
    $router->get('/rent/{category}', [
        'uses' => 'EstateController@rentEstateCategoryList',
        'as' => 'list-Estate-category-rent'
    ]);
});
Route::get('/', [
    'uses' => 'EstateController@index',
    'as' => 'index'
]);
Route::get('/estate/{estate}/view', [
    'uses' => 'EstateController@ShowEstate',
    'as' => 'show-Estate'
]);

Route::group([], function ($router) {
    $router->get('/logout', [
        'uses' => 'Auth\LoginController@logout'
    ]);
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
