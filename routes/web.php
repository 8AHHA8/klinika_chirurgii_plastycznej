<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\SurgeryController;
use App\Http\Controllers\TransactionController;
use App\Models\Transaction;
use Illuminate\Support\Facades\Redirect;

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
})->name('welcome');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::delete('/transactionsDelete/{id}', function($id){
        Transaction::destroy($id);
        // return view('profile.edit_role1');
        return Redirect::back();
    });

    Route::post('/acceptTransaction/{userId}', function($userId) {
        $transaction = Transaction::where('user_id', $userId)->whereNull('doctor_id')->first();
    
        if ($transaction) {
            $transaction->doctor_id = true;
            $transaction->save();
        }
        return Redirect::back();
    });

    Route::put('/updateTransaction/{id}', [TransactionController::class, 'updateTransaction'])->name('updateTransaction');


    Route::get('/booking', [TransactionController::class, 'index'])->name('booking');
    Route::post('/booking', [TransactionController::class, 'booking'])->name('booking');
});

Route::get('/doctors', [DoctorsController::class, 'index'])->name('doctors');

Route::get('/services', [SurgeryController::class, 'index'])->name('surgery');

Route::get('/disabled-dates', [TransactionController::class, 'getDisabledDates']);

require __DIR__.'/auth.php';


