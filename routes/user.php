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

Route::middleware(['auth'])->namespace('App\\Http\\Controllers\\User')->group(function () {

    Route::get('example', function () {
        return \App\Models\Country::find(1)->cities;
    });

    Route::namespace('Dashboard')->group(function () {
        Route::get('/', function () {
            return redirect()->route('user.dashboard.index');
        })->middleware('Has:1');
        Route::get('/index', 'DashboardController@index')->name('user.dashboard.index')->middleware('Has:1');
    });

});
