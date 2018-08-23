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

Route::get('/','Guest\MainController@main')->name('guest.home');
Route::get('/contact',['as' => 'guest.contact','uses' => 'Guest\MainController@contact']);
Route::get('/categories/{slug}','Guest\MainController@getProductByCategory')->name('guest.category'); 
Route::get('/products','Guest\MainController@getProduct')->name('guest.product'); 

Route::post('/Login','Guest\MainController@postLogin')->name('guest.Login');
Route::post('/Register','Guest\MainController@postRegister')->name('guest.Register');
Route::get('/searchProduct','Guest\MainController@getSearch')->name('guest.search');

Route::get('/searchBlog','Guest\MainController@getSearchBlog')->name('guest.searchBlog');

Route::get('/cart','Guest\MainController@cart')->name('guest.cart');
Route::get('/blog','Guest\MainController@blog')->name('guest.blog');
Route::get('/blog-detail','Guest\MainController@blog_detail')->name('guest.blog_detail');
Route::get('/about','Guest\MainController@about')->name('guest.about');
Route::get('/{id}','Guest\MainController@product_detail')->name('guest.product_detail');
