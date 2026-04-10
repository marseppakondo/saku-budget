<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/login', [AuthController::class, 'loginPage'])->name('login');
// Route::post('/login', [AuthController::class, 'login']);
// Route::get('/register', [AuthController::class, 'registerPage'])->name('register');
// Route::post('/register', [AuthController::class, 'register']);
// Route::get('/home', [AuthController::class, 'home'])->middleware('auth');
// Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

// Route::get('/lat1', [Lat1Controller::class, 'index'] );
// Route::get('/lat1/m2', [Lat1Controller::class, 'method2'] );