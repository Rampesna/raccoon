<?php

use Illuminate\Support\Facades\Auth;
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

Route::any('language/{language?}', [\App\Http\Controllers\HomeController::class, 'language'])->name('language');
Route::middleware(['auth', 'Language'])->namespace('App\\Http\\Controllers\\User')->group(function () {

    Route::any('example', [\App\Http\Controllers\HomeController::class, 'example'])->name('example');

    Route::middleware(['Wizard'])->group(function () {

        Route::namespace('Dashboard')->group(function () {
            Route::get('/', function () {
                return redirect()->route('user.dashboard.index');
            });
            Route::get('/index', 'DashboardController@index')->name('user.dashboard.index')->middleware('Has:1');
        });

        Route::namespace('Earnings')->prefix('earnings')->group(function () {

            Route::prefix('customer')->group(function () {
                Route::get('/', function () {
                    return redirect()->route('user.customer.index');
                });
                Route::get('/index/{company_id?}', 'Customer@index')->name('user.customer.index')->middleware('Has:2');
                Route::get('/create', 'Customer@create')->name('user.customer.create')->middleware('Has:3');
            });

        });

        Route::namespace('Expenses')->prefix('expenses')->group(function () {

            Route::prefix('supplier')->group(function () {
                Route::get('/', function () {
                    return redirect()->route('user.supplier.index');
                });
                Route::get('/index/{customer?}', 'Supplier@index')->name('user.supplier.index')->middleware('Has:1');
            });

        });

    });


});
