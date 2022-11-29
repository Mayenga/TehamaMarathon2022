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

Route::get('/registercustomer', 'App\Http\Controllers\CustomersController@index')->name('registercustomer');
Route::post('/storecustomer', 'App\Http\Controllers\CustomersController@store')->name('storecustomer');
Route::get('/payments', function () {
    return view('payments.index');
});
Route::get('/search', function () {
    return view('payments.search');
});

Route::get('/terms', function () {
    return view('terms.terms');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
