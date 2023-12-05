<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\BarbersController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\Displaydata;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ContactUsController;
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

    Route::get('/location', function () {
        return view('location');
    });
    
    ////////////////////////////////////////////////
    
    Route::get('/adminprofile', function () {
        return view('adminprofile');
    });
    
    Route::get('/services', function () {
        return view('adminservices');
    });

    //////////////////////////////////////////////////////////////////


    
    /////////////////////////////////////////////////
    
    
    
    // ----------------------------------------------------Auth----------------------------------------------------
    
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

    // ------------------------------Services-------------------------------------

    
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

    // ------------------------------Services-------------------------------------


    // ------------------------------Blogs-------------------------------------

        Route::controller(BlogsController::class)->prefix('Blogs')->group(function () {
            Route::get('/', 'index')->name('Blogs');
            Route::get('create', 'create')->name('Blogs.create');
            Route::post('store', 'store')->name('Blogs.store');
            Route::get('show/{id}', 'show')->name('Blogs.show');
            Route::get('edit/{id}', 'edit')->name('Blogs.edit');
            Route::put('edit/{id}', 'update')->name('Blogs.update');
            Route::delete('destroy/{id}', 'destroy')->name('Blogs.destroy');
        });

    // ------------------------------Blogs-------------------------------------


    // ------------------------------Barbers-------------------------------------

        Route::controller(BarbersController::class)->prefix('Barbers')->group(function () {
            Route::get('/', 'index')->name('Barbers');
            Route::get('create', 'create')->name('Barbers.create');
            Route::post('store', 'store')->name('Barbers.store');
            Route::get('show/{id}', 'show')->name('Barbers.show');
            Route::get('edit/{id}', 'edit')->name('Barbers.edit');
            Route::put('edit/{id}', 'update')->name('Barbers.update');
            Route::delete('destroy/{id}', 'destroy')->name('Barbers.destroy');
        });

    // ------------------------------Barbers-------------------------------------



    // ------------------------------Reservation-------------------------------------
    
    Route::controller(ReservationController::class)->prefix('Rese')->group(function () {
        Route::get('/Reservation', 'index')->name('Rese');
        Route::get('create', 'create')->name('Rese.appointment');
        Route::post('store', 'store')->name('Rese.store');
        Route::get('show/{id}', 'show')->name('Rese.show');
        Route::get('edit/{id}', 'edit')->name('Rese.edit');
        Route::put('edit/{id}', 'update')->name('Rese.update');
        Route::delete('destroy/{id}', 'destroy')->name('Rese.destroy');
    });

    // ------------------------------Reservation-------------------------------------



    // ------------------------------Contact Us-------------------------------------

    Route::controller(ContactUsController::class)->prefix('con')->group(function () {
        Route::get('/', 'index')->name('con');
        // Route::get('create', 'create')->name('con.appointment');
        Route::post('store', 'store')->name('con.store');
        Route::get('show/{id}', 'show')->name('con.show');
        Route::get('edit/{id}', 'edit')->name('con.edit');
        Route::put('edit/{id}', 'update')->name('con.update');
        Route::delete('destroy/{id}', 'destroy')->name('con.destroy');
    });

    // ------------------------------Contact Us-------------------------------------


    // ----------------------------------------------------/Auth----------------------------------------------------

    
    Route::get('/success', function () {
        return view('user.success');
    })->name('success.page');

    Route::get('/successContact', function () {
        return view('user.successContact');
    })->name('successCon.page');
    
});


    // ------------------------------Display Data-------------------------------------

Route::get('/', [Displaydata::class, 'displayda']);
Route::get('homepage', [Displaydata::class, 'displayho'])->name('homepage');

    // ------------------------------Display Data-------------------------------------

