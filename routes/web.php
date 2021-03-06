<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index')->name('home');
Route::get('categories', 'CategoryController@index')->name('categories');
Route::get('category/{slug}', 'CategoryController@show')->name('category');
Route::get('products', 'ProductController@index')->name('products');
Route::get('product/{slug}', 'ProductController@show')->name('product');
Route::get('about-us', 'AboutUsController@index')->name('about-us');
Route::resource('contact-us', 'ContactUsController');

