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
Route::get('/', 'HomepageController@index');

// register users
Route::get('/dashboard', 'DashboardController@index')
    ->middleware('auth')
    ->middleware(\App\Http\Middleware\CheckUserApproved::class);

Route::get('/history', 'HistoryController@index')
    ->middleware('auth')
    ->middleware(\App\Http\Middleware\CheckUserApproved::class);

Route::get('/about', 'AboutController@index')
    ->middleware('auth')
    ->middleware(\App\Http\Middleware\CheckUserApproved::class);

Route::get('/cryptoDerivatives', 'CryptoDerivativesController@index')
    ->middleware('auth')
    ->middleware(\App\Http\Middleware\CheckUserApproved::class);

Route::get('/deposits', 'DepositsController@deposits')
    ->middleware('auth')
    ->middleware(\App\Http\Middleware\CheckUserApproved::class);

Route::post('/deposits', 'DepositsController@store')
    ->middleware('auth')
    ->middleware(\App\Http\Middleware\CheckUserApproved::class);

Route::get('/deposits', 'DepositsController@index')
    ->middleware('auth')
    ->middleware(\App\Http\Middleware\CheckUserApproved::class);

Route::get('/withdrawals', 'WithdrawalsController@withdrawals')
    ->middleware('auth')
    ->middleware(\App\Http\Middleware\CheckUserApproved::class);

Route::post('/withdrawals', 'WithdrawalsController@store')
    ->middleware('auth')
    ->middleware(\App\Http\Middleware\CheckUserApproved::class);

Route::get('/withdrawals', 'WithdrawalsController@index')
    ->middleware('auth')
    ->middleware(\App\Http\Middleware\CheckUserApproved::class);

Route::get('/data', 'ChartDataController@data');

Route::middleware(['can:admin'])->group(function () {

    Route::get('/admin', 'AdminController@index');
    Route::post('/admin/user/approve/{user_id}', 'Admin\UserController@approve');
    Route::post('/admin/user/deny/{user_id}', 'Admin\UserController@deny');
    Route::get('/admin/transactions', 'AdminController@transaction');
    Route::post('/admin/transactions/deposits/{deposit_id}', 'Admin\PendingTransactionController@deposits');
    Route::post('/admin/transactions/withdrawals/{withdrawal_id}', 'Admin\PendingTransactionController@withdrawals');
    Route::post('/admin/transactions/denydeposits/{deposit_id}', 'Admin\PendingTransactionController@denydeposits');
    Route::post('/admin/transactions/denywithdrawals/{withdrawal_id}', 'Admin\PendingTransactionController@denywithdrawals');

});
