<?php

header('Access-Control-Allow-Origin', '*');
header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers', ' Origin, Content-Type, Accept, Authorization, X-Request-With');
header('Access-Control-Allow-Credentials', ' true');

Route::group(['prefix' => 'user', 'middleware' => 'auth'], function ($router) {
    $router->get('/dashboard', [
        'uses' => 'UserController@index',
        'as' => 'user.dashboard'
    ]);
    $router->get('/profile', [
        'uses' => 'UserController@profile',
        'as' => 'user.profile'
    ]);
    $router->post('/profile', [
        'uses' => 'UserController@profileUpdate',
        'as' => 'user.profile.update'
    ]);
    $router->get('/check-estate', [
        'uses' => 'UserController@CheckEstate',
        'as' => 'user.check.estate'
    ]);
    $router->post('/ticket', [
        'uses' => 'UserController@RegTiket',
        'as' => 'user.ticket.register'
    ]);
    $router->get('/ticket', [
        'uses' => 'UserController@UserTicket',
        'as' => 'user.ticket'
    ]);
    $router->get('/ticket/{TicketId}', [
        'uses' => 'UserController@ShowTicket',
        'as' => 'user.ticket.show'
    ]);
    $router->get('/add-estate', [
        'uses' => 'UserController@addEstate',
        'as' => 'user.add.estate'
    ]);
    $router->post('/add-estate', [
        'uses' => 'UserController@addEstateStep1',
        'as' => 'user.add.estate.step1'
    ]);
});


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
