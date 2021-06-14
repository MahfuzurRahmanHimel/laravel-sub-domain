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
Route::get('/', 'App\Http\Controllers\DomainsController@home');
Route::get('home', 'App\Http\Controllers\DomainsController@authHome')->middleware('auth');

Route::domain('{domain}.'.config('app.domain_url'))->middleware('auth')->group(function () {
    Route::get('admin', 'App\Http\Controllers\DomainsController@index')->name('users.index');
});
