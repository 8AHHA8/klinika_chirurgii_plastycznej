<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\SurgeryController;

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
    return view('welcome');
});

// Route::get('/services', function () {
//     return view('services');
// });

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/booking', function () {
    return view('booking');
});

// Trasa do formularza logowania
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/doctors', [DoctorsController::class, 'index'])->name('doctors');

Route::get('/services', [SurgeryController::class, 'index'])->name('surgery');

// Trasa do formularza rejestracji
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Trasa do wylogowywania użytkownika
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');