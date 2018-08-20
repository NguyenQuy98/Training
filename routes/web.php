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
Route::get('/product','Guest\MainController@product')->name('guest.product');

Route::get('/{id}','Guest\MainController@product_detail')->name('guest.product_detail');
// Route::get('/Category/{category}','Guest\MainController@category')->name('guest.category');
Route::get('/cart','Guest\MainController@cart')->name('guest.cart');
Route::get('/blog','Guest\MainController@blog')->name('guest.blog');
Route::get('blog/blog-detail','Guest\MainController@blog_detail')->name('guest.blog_detail');
Route::get('/about','Guest\MainController@about')->name('guest.about');
