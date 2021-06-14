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
Auth::routes();

Route::get('/', 'App\Http\Controllers\DomainsController@home');
// Route::get('/',function(){
//     return view('welcome');
// });

Route::domain('{domain}.'.config('app.domain_url'))->group(function () {
    Route::get('home', 'App\Http\Controllers\DomainsController@index')->name('users.index')->middleware('auth');
    // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});


