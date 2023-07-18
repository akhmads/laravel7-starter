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
    return view('welcome');
});

Route::match(['get', 'post'], '/customer', 'CustomerController@index')->name('customer.index');
Route::get('/customer/{customer}', 'CustomerController@show')->name('customer.show');
Route::get('customer/create', 'CustomerController@create')->name('customer.create');
Route::post('customer/store', 'CustomerController@store')->name('customer.store');
Route::get('customer/{customer}/edit', 'CustomerController@edit')->name('customer.edit');
Route::put('customer/{customer}', 'CustomerController@update')->name('customer.update');
Route::delete('customer/{customer}', 'CustomerController@destroy')->name('customer.destroy');

Route::resource('contact','ContactController');
Route::post('contact/json', 'ContactController@json')->name('contact.json');

// Auth
Route::get('/login', 'Auth\LoginController@index')->middleware('guest')->name('login.index');
Route::post('/login', 'Auth\LoginController@authenticate');
Route::delete('/logout', 'Auth\LoginController@logout');

Route::prefix('/admin')->group(function () {
    Route::get('/home', 'HomeController@index');
});