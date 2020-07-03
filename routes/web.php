<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Middleware\Authenticate;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/licornes', 'LicorneController@index')->name('licornes.index');
Route::get('/licornes/{id}/show', 'LicorneController@show')->name('licornes.show');
Route::get('/licornes/create', 'LicorneController@create')->name('licornes.create');
Route::get('/licornes/{id}/edit', 'LicorneController@edit')->name('licornes.edit');
Route::post('/licornes', 'LicorneController@store')->name('licornes.store');
Route::put('/licornes/{id}', 'LicorneController@update')->name('licornes.update');
Route::delete('/licornes', 'LicorneController@destroy')->name('licornes.destroy');

Route::get('/users', 'UserController@index')->name('users.index');
Route::get('/users/{id}/show', 'UserController@show')->name('users.show');
Route::get('/users/create', 'UserController@create')->name('users.create');
Route::get('/users/{id}/edit', 'UserController@edit')->name('users.edit');
Route::post('/users', 'UserController@store')->name('users.store');
Route::put('/users/{id}', 'UserController@update')->name('users.update');
Route::delete('/users', 'UserController@destroy')->name('users.destroy');

Route::get('/sellers', 'SellerController@index')->name('sellers.index');
Route::get('/sellers/{id}/show', 'SellerController@show')->name('sellers.show');
Route::get('/sellers/create', 'SellerController@create')->name('sellers.create')->middleware('auth');
Route::get('/sellers/{id}/edit', 'SellerController@edit')->name('sellers.edit')->middleware('auth');
Route::post('/sellers', 'SellerController@store')->name('sellers.store')->middleware('auth');
Route::put('/sellers/{id}', 'SellerController@update')->name('sellers.update')->middleware('auth');
Route::delete('/sellers', 'SellerController@destroy')->name('sellers.destroy')->middleware('auth');

Route::get('/breeders', 'BreederController@index')->name('breeders.index');
Route::get('/breeders/{id}/show', 'BreederController@show')->name('breeders.show');
Route::get('/breeders/create', 'BreederController@create')->name('breeders.create');
Route::get('/breeders/{id}/edit', 'BreederController@edit')->name('breeders.edit');
Route::post('/breeders', 'BreederController@store')->name('breeders.store');
Route::put('/breeders/{id}', 'BreederController@update')->name('breeders.update');
Route::delete('/breeders', 'BreederController@destroy')->name('breeders.destroy');
