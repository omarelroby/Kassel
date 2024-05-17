<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){

            Route::get('dashboard/login',[\App\Http\Controllers\Dashboard\Admin\LoginController::class,'get'])->name('login');
            Route::post('dashboard/login/post',[\App\Http\Controllers\Dashboard\Admin\LoginController::class,'post']);
            Route::get('dashboard/logout',[\App\Http\Controllers\Dashboard\Admin\LoginController::class,'logout'])->name('logout');

Route::middleware(['auth:admin' ])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.home');
    })->name('dashboard');
    Route::group(['namespace' => '\App\Http\Controllers\Dashboard'], function() {

        Route::resource('careers', 'CareersController');
        Route::resource('blogs', 'CareersController');

    });
});
});


