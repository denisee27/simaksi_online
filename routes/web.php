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


Route::get('/login','loginController@index');
Route::post('/login','loginController@action');
Route::get('/logout','loginController@logout');
Route::get('/registrasi','RegistrasiController@index');
Route::post('/registrasi','RegistrasiController@store');

// Auth
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// before auth
Route::get('/', 'simaksiController@index');

// after auth
Route::get('/welcome', 'simaksiController@welcome')->middleware('auth');
Route::post('/welcome', 'simaksiController@welcome');

// pemesanan
Route::get('/pemesanan', 'PemesananController@index'  );
Route::get('/pemesanan/create', 'PemesananController@create'  );
Route::get('/pemesanan/create/{gunung_id}', 'PemesananController@input' );
Route::post('/pemesanan/{gunung_id}','PemesananController@store' );
Route::get('/pemesanan/{id}', 'PemesananController@show' );
Route::get('/pemesanan/{id}/edit', 'PemesananController@edit');
Route::put('/pemesanan/{id}', 'PemesananController@update');
Route::delete('/pemesanan/{id}', 'PemesananController@destroy' );
Route::get('/pemesanan/{id}/pdf', 'PemesananController@pdf' );

// gunung
Route::get('/gunung', 'GunungController@index' );

// jalur
Route::get('/jalur',  'JalurController@index' );






