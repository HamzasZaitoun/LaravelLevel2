<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


/* 

Front Routes

*/

Route::name('front.')->group(function () {

    // Home viwe
    Route::get('/', function () {
        return view('front.index');
    })->name('index');
    Route::get('/index', function () {
        return view('front.index');
    })->name('index');

    Route::get('/about', function () {
        return view('front.about');
    })->name('about');

    Route::get('/services', function () {
        return view('front.services');
    })->name('services');

    Route::get('/contact', function () {
        return view('front.contact');
    })->name('contact');
});

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
*/

Route::name('admin.')->prefix(LaravelLocalization::setLocale() . '/admin')->middleware('localeSessionRedirect', 'localizationRedirect', 'localeViewPath')->group(function () {


    Route::middleware('auth')->group(
        function (): void {

            // Home viwe

            Route::get('/', function () {
                return view('admin.index');
            })->name('index');

            // services
            Route::controller(ServiceController::class)->group(function () {
                Route::resource('services', ServiceController::class);
            });
        }

    );
    require __DIR__ . '/auth.php';
});
