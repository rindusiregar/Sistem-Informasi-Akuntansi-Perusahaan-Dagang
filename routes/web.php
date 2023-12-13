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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/login', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');
Route::get('/register', 'AuthController@register');
Route::post('/postregister', 'AuthController@postregister');

Route::group(['middleware' => 'auth'],function(){
    Route::get('/dashboard', 'DashboardController@index');

    Route::get('/supplier', 'SupplierController@index');
    Route::post('/supplier/create', 'SupplierController@create');

    Route::get('/pembelian', 'PembelianController@index');
    Route::post('/pembelian/create', 'PembelianController@create');

    Route::get('/penjualan', 'PenjualanController@index');
    Route::post('/penjualan/create', 'PenjualanController@create');

    Route::get('/barang', 'BarangController@index');
    Route::post('/barang/create', 'BarangController@create');
    Route::get('/barang/{id}/edit', 'BarangController@edit');
    Route::post('/barang/{id}/update', 'BarangController@update');

    Route::get('/profile', 'ProfileController@index');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
