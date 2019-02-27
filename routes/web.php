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
Route::post('/login','Auth\LoginController@postLogin')->name('web.post.login');
Route::get('/register','Auth\RegisterController@getRegister')->name('web.get.register');
Route::post('/register','Auth\RegisterController@postRegister')->name('web.post.register');
Route::get('/','HomeController@index')->name('web.index');
Route::get('/contact','HomeController@getContact')->name('web.contact');

Route::get('/redirect/{social}', 'Auth\SocialAuthController@redirect');
Route::get('/callback/{social}', 'Auth\SocialAuthController@callback');

Route::get('/logout','Auth\LogoutController@getLogout')->name('web.get.logout');

Route::group(['prefix' => 'products'],function(){
    Route::get('/','ProductController@getProducts')->name('web.products');
    Route::get('/{slug}','ProductController@getSingle_product')->name('web.product.single');
});
Route::get('/catelogs/{slug}','ProductController@getListProducts')->name('web.catelogs');


Route::get('/cart','CartController@index')->name('web.cart');
Route::post('/add-cart','CartController@getAddtoCart')->name('web.cart.add');
Route::post('/delete-cart','CartController@deleteCart')->name('web.cart.delete');
Route::post('/delete-one','CartController@deleteOneCart')->name('web.cart.deleteone');

Route::post('/order','OrderController@create')->name('web.order');

Route::resource('profile','ProfileController');

Route::post('/search','HomeController@search')->name('web.search');
