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

Route::get('/','homepageController@awal');
Route::get('/login','homepageController@login');
Route::post('/login-proses','loginController@loginproses');
//search
Route::get('/search','homepageController@search');

Route::get('/product-{product}','homepageController@produk');
Route::get('/produk-all','productController@all');
Route::get('/produk-plates','productController@plates');
Route::get('/produk-barbell','productController@barbell');
Route::get('/produk-dumbbell','productController@dumbbell');
Route::get('/produk-forlegs','productController@forlegs');
Route::get('/produk-gymset','productController@gymset');
//cart
Route::get('addcart-{product}','cartController@add');
Route::get('delcart-{product}','cartController@delete');
Route::get('clear','cartController@clear');
Route::post('simpan','cartController@simpan');
//checkout
Route::get('checkout','cartController@checkout');

//admin
Route::get('/home','adminController@homepage');
Route::get('/user','adminController@user');
Route::get('/barang','adminController@barang');
Route::get('/add_barang','adminController@add_barang');
Route::post('/store_barang','adminController@store_barang');
Route::get('/transaksi','adminController@transaksi');
Route::get('/logout','loginController@logout');


//review
Route::post('/post-review','reviewController@store_review');