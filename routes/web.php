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
    Route::get('/', [\App\Http\Controllers\web\HomeController::class,'index'])->name('home');
    Route::get('/about', [\App\Http\Controllers\web\HomeController::class,'about'])->name('about');
    Route::get('/jobs', [\App\Http\Controllers\web\HomeController::class,'careers'])->name('jobs');
    Route::get('/services', [\App\Http\Controllers\web\HomeController::class,'services'])->name('services');
    Route::get('/contact', [\App\Http\Controllers\web\HomeController::class,'contact_us'])->name('contact');

});



//Route::middleware(['auth:web' ])->group(function () {
//
//});
Route::get('/migrate', function(){
    \Artisan::call('migrate');
    dd('migrated!');
});
