<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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


Route::name('admin.')->prefix('admin')->group(function () {
    
    
    Route::middleware('auth')->group(function (): void
     {
        
        Route::get('/', function ()
         {
            return view('admin.index');
        })->name('index');
        
    });
    require __DIR__.'/auth.php';
});




// Route::get('/', function () {
//     return view('front.index');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });


