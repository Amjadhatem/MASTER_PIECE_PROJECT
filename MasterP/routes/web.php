<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\BarbersController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\Displaydata;
use App\Http\Controllers\ReservationController;
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
    Route::get('/', function () {
        return view('user.welcome');
    });
    
    // Route::get('/appointment', function () {
    //     return view('user.appointment');
    // });
    
    Route::get('/ContactUs', function () {
        return view('user.ContactUs');
    });
    
    ////////////////////////////////////////////////
    
    Route::get('/profile', function () {
        return view('adminprofile');
    });
    
    Route::get('/services', function () {
        return view('adminservices');
    });

    //////////////////////////////////////////////////////////////////


    
    /////////////////////////////////////////////////
    
    
    
    // --------------------------Auth------------------------
    
    Route::controller(AuthController::class)->group(function () {
        Route::get('register', 'register')->name('register');
        Route::post('register', 'registerSave')->name('register.save');
      
        Route::get('login', 'login')->name('login');
        Route::post('login', 'loginAction')->name('login.action');
      
        // Route::get('logout', 'logout')->middleware('auth')->name('logout');

        // Route::get('homepage', 'displayhome')->name('homepage');

        Route::get('/users', 'index')->name('users');
        Route::get('show/{id}', 'show')->name('user.show');
        Route::get('edit/{id}', 'edit')->name('user.edit');
        Route::put('edit/{id}', 'update')->name('user.update');
        Route::delete('destroy/{id}', 'destroy')->name('user.destroy');


        Route::get('/profile','profile')->name('profile');
        Route::put('/profile/update', 'updateProfile')->name('update-profile');


    });
      
    Route::middleware(['auth'])->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
    
    

        // -----------------------------------

    
            Route::controller(ServicesController::class)->prefix('services')->group(function () {
                Route::get('/', 'index')->name('services');
                Route::get('create', 'create')->name('services.create');
                Route::post('store', 'store')->name('services.store');
                Route::get('show/{id}', 'show')->name('services.show');
                Route::get('edit/{id}', 'edit')->name('services.edit');
                Route::put('edit/{id}', 'update')->name('services.update');
                Route::delete('destroy/{id}', 'destroy')->name('services.destroy');
                // Route::get('/services','displayServices')->name('welcome.services');

            });


        // -----------------------------------------------------------------

        Route::controller(BlogsController::class)->prefix('Blogs')->group(function () {
            Route::get('/', 'index')->name('Blogs');
            Route::get('create', 'create')->name('Blogs.create');
            Route::post('store', 'store')->name('Blogs.store');
            Route::get('show/{id}', 'show')->name('Blogs.show');
            Route::get('edit/{id}', 'edit')->name('Blogs.edit');
            Route::put('edit/{id}', 'update')->name('Blogs.update');
            Route::delete('destroy/{id}', 'destroy')->name('Blogs.destroy');
        });

        // -----------------------------------------------------------------


        Route::controller(BarbersController::class)->prefix('Barbers')->group(function () {
            Route::get('/', 'index')->name('Barbers');
            Route::get('create', 'create')->name('Barbers.create');
            Route::post('store', 'store')->name('Barbers.store');
            Route::get('show/{id}', 'show')->name('Barbers.show');
            Route::get('edit/{id}', 'edit')->name('Barbers.edit');
            Route::put('edit/{id}', 'update')->name('Barbers.update');
            Route::delete('destroy/{id}', 'destroy')->name('Barbers.destroy');
        });


    // --------------------------/Auth------------------------
    
    Route::controller(ReservationController::class)->prefix('Rese')->group(function () {
        Route::get('/Reservation', 'index')->name('Rese');
        Route::get('create', 'create')->name('Rese.appointment');
        Route::post('store', 'store')->name('Rese.store');
        Route::get('show/{id}', 'show')->name('Rese.show');
        Route::get('edit/{id}', 'edit')->name('Rese.edit');
        Route::put('edit/{id}', 'update')->name('Rese.update');
        Route::delete('destroy/{id}', 'destroy')->name('Rese.destroy');
    });
    // Route::get('/appointment', [ReservationController::class, 'create'])->name('book.appointment');

// Route for processing the submitted reservation form
    // Route::post('/book-appointment', [ReservationController::class, 'store'])->name('reservations.store');

    Route::get('/success', function () {
        return view('user.success');
    })->name('success.page');
    
});


Route::get('/', [Displaydata::class, 'displayda']);
Route::get('homepage', [Displaydata::class, 'displayho'])->name('homepage');
