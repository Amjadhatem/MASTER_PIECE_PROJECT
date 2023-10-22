<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ServicesController;
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
    
    Route::get('/Team', function () {
        return view('user.team');
    });
    
    Route::get('/Login', function () {
        return view('user.logIn');
    });
    
    Route::get('/SignUp', function () {
        return view('user.signUp');
    });
    
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
    
    /////////////////////////////////////////////////
    
    
    
    // --------------------------Auth------------------------
    
    Route::controller(AuthController::class)->group(function () {
        Route::get('register', 'register')->name('register');
        Route::post('register', 'registerSave')->name('register.save');
      
        Route::get('login', 'login')->name('login');
        Route::post('login', 'loginAction')->name('login.action');
      
        Route::get('logout', 'logout')->middleware('auth')->name('logout');
    });
      
    Route::middleware(['auth'])->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
    
        Route::controller(ServicesController::class)->prefix('services')->group(function () {
            Route::get('/', 'index')->name('services');
            Route::get('create', 'create')->name('services.create');
            Route::post('store', 'store')->name('services.store');
            Route::get('show/{id}', 'show')->name('services.show');
            Route::get('edit/{id}', 'edit')->name('services.edit');
            Route::put('edit/{id}', 'update')->name('services.update');
            Route::delete('destroy/{id}', 'destroy')->name('services.destroy');
        });

        Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');

    // --------------------------/Auth------------------------
    
});
