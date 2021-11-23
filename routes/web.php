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
Route::get('/notapproved', 'HomepageController@notapproved');

// Route::get('/dashboard', 'DashboardController@index')
//     ->middleware('auth')
//     ->middleware(\App\Http\Middleware\CheckUserApproved::class);
// Route::view('/profile/edit', 'profile.edit');

Route::middleware(['can:investor'])->group(function () {

    // Route::get('/profile/edit', 'DashboardController@edit');

    // Route::view('/my-account', 'profile.edit');
    // Route::view('/profile/password', 'profile.password');
    Route::get('/my-account', 'MyAccountController@password');
    Route::get('/my-account', 'MyAccountController@edit');
    Route::get('/dashboard', 'DashboardController@index');
    Route::get('/history', 'HistoryController@index');
    Route::get('/about', 'AboutController@index');
    Route::get('/cryptoDerivatives', 'CryptoDerivativesController@index');
    Route::get('/deposits', 'DepositsController@deposits');
    Route::post('/deposits', 'DepositsController@store');
    Route::get('/deposits', 'DepositsController@index');
    Route::get('/withdrawals', 'WithdrawalsController@withdrawals');
    Route::post('/withdrawals', 'WithdrawalsController@store');
    Route::get('/withdrawals', 'WithdrawalsController@index');
    Route::get('/data', 'ChartDataController@accountData');
    Route::get('/account-data', 'ChartDataController@accountData');
});

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
