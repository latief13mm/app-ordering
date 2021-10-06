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
Route::get('/', 'Utama@front');

Route::get('/utama', 'Utama@index');

Route::get('/login', 'Login@index');

Route::post('/daftar', 'Login@register');

Route::post('/masuk', 'Login@masuk');

Route::get('/keluar', 'Login@keluar');

Route::post('/AddCart', 'Order@order');

Route::get('/keranjang', 'Order@keranjang');

Route::get('/checkout', 'Order@checkout');

Route::get('/checkout_list', 'Order@checkout_list');

Route::get('/confirm', 'Order@confirm');

Route::post('/Konfirm', 'Order@confirm_simpan');

// Route::get('/', function () {
//     return view('utama');
// });
