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
require 'admin.php';

Route::view('/homepage', 'site.pages.homepage');

Route::view('/katalog', 'site.pages.category2');

Route::view('/', 'site.partials.header2');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Auth::routes();

Route::get('/category/{slug}', 'Site\CategoryController@show')->name('category.show');
Route::get('/products/{slug}', 'Site\ProductController@show')->name('product.show');

