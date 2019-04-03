<?php

Route::get('/login','Auth\LoginController@getLogin')->name('admin.get.login');
Route::post('/login','Auth\LoginController@postLogin')->name('admin.post.login');
Route::get('/logout','Auth\LogoutController@getLogout')->name('admin.get.logout');

Route::get('/dashboard','HomeController@index')->name('admin.index');
Route::resource('users','UserController');
Route::resource('category','CategorylistController');
Route::resource('products','ProductController');
Route::get('/list-view-products','ProductController@index2')->name('products.index2');
Route::resource('orders','OrderController');