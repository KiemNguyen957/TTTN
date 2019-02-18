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
//web

Route::get('/login','Auth\LoginController@getLogin')->name('web.get.login');
Route::post('/login','Auth\LoginController@postLogin')->name('web.post.login');
Route::get('/register','Auth\RegisterController@getRegister')->name('web.get.register');
Route::post('/register','Auth\RegisterController@postRegister')->name('web.post.register');
Route::get('/','HomeController@index')->name('web.index');;

Route::get('/redirect/{social}', 'Auth\SocialAuthController@redirect');
Route::get('/callback/{social}', 'Auth\SocialAuthController@callback');

Route::get('/logout','Auth\LogoutController@getLogout')->name('web.get.logout');

Route::group(['prefix' => 'products'],function(){
    Route::get('/','HomeController@getProducts')->name('web.products');
    Route::get('/{name}','HomeController@getSingle_product')->name('web.product.single');
    
});
