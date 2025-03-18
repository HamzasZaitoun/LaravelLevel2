<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\SettingController;
use App\Models\Subscriber;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\FrontController;

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

Route::name('front.')->controller(FrontController::class)->group(function () {

    Route::post('/subscriber/store', 'subescriberStore')->name('subscriber.store');
    // Home viwe
    Route::get('/', 'index')->name('index');

    // About viwe
    Route::get('/about', 'about')->name('about');

    // Services viwe
    Route::get('/services', 'services')->name('services');

    // contact viwe 
    Route::get('/contact', 'contact')->name('contact');
    Route::post('/contact/store', 'storeContact')->name('contact.store');
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

            //features
            Route::controller(FeatureController::class)->group(function () {
                Route::resource('features', FeatureController::class);
            });


            //messages
            Route::controller(MessageController::class)->group(function () {
                Route::resource('messages', MessageController::class)->only(['index', 'show', 'destroy']);
            });
            //subscribers
            Route::controller(SubscriberController::class)->group(function () {
                Route::resource('subscriptions', SubscriberController::class)->only(['index', 'destroy']);
            });
            //testimonials
            Route::controller(TestimonialController::class)->group(function () {
                Route::resource('testimonials', TestimonialController::class);
            });
            //settings
            Route::controller(SettingController::class)->group(function () {
                Route::resource('settings', SettingController::class)->only(['index', 'update']);
            });
        }

    );
    require __DIR__ . '/auth.php';
});
