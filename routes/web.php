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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin','as' => 'admin.', 'middleware' => 'auth', 'namespace' => 'Admin'],function (){
    Route::get('/media','MediaController@index')->name('media');
    Route::resource('/user','UserController');
    Route::resource('/category','CategoryController');
    Route::resource('/product','ProductController');
    Route::resource('/order','OrderController',['only'=>['index','show','destroy','edit','update']]);
    Route::post('/media','MediaController@upload')->name('media.upload');
});


Route::get('/media/{url}', 'FileController@image')->where('url', '.*')->name('image');
Route::get('/cart','CartController@index')->name('cart');
Route::post('/addtocart/{product}','CartController@addToCart')->name('addtocart');
Route::post('/cart/order','CartController@order')->middleware('auth')->name('order');
Route::post('/cart/remove/{id}','CartController@remove')->name('cart.remove');

Route::get('/product','HomeController@product')->name('product');
Route::get('/product/{product}','HomeController@detail')->name('detail');
Route::get('/contact','HomeController@contact')->name('contact');