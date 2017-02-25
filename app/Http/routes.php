<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('profile', function () {

})->middleware('auth');

Route::resource('customers','CustomerController');

Route::resource('customers','CustomerController');

Route::resource('stocks','StockController');

Route::resource('investments','InvestmentController');

Route::resource('mutualfunds','MutualfundController');

Route::get('customers/{id}/stringify', 'CustomerController@stringify');

Route::auth();

Route::get('/home', 'HomeController@index');

Route::auth();

Route::get('/home', 'HomeController@index');

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('customers/{id}/stringify', 'CustomerController@stringify');

Route::get('stocks/{id}/stringify', 'StockController@stringify');

Route::get('investments/{id}/stringify', 'InvestmentController@stringify');

