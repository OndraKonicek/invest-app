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

// all users
Route::get('/', 'App\Http\Controllers\HomepageController@index');

// register users
Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')
    ->middleware('auth')
    ->middleware(\App\Http\Middleware\CheckUserApproved::class);

Route::get('/admin', 'App\Http\Controllers\AdminController@index');

Route::get('/history', 'App\Http\Controllers\HistoryController@index')
    ->middleware('auth')
    ->middleware(\App\Http\Middleware\CheckUserApproved::class);

Route::get('/deposits', 'App\Http\Controllers\DepositsController@deposits')
    ->middleware('auth')
    ->middleware(\App\Http\Middleware\CheckUserApproved::class);

Route::get('/withdrawals', 'App\Http\Controllers\WithdrawalsController@withdrawals')
    ->middleware('auth')
    ->middleware(\App\Http\Middleware\CheckUserApproved::class);
