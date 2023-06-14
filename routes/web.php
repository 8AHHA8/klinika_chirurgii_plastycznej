<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\SurgeryController;
use App\Http\Controllers\TransactionController;
use App\Models\Transaction;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Doctors;
use Illuminate\Support\Facades\Auth;
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

    Route::delete('/transactions/{id}', function($id) {
        $transaction = Transaction::find($id);
        if ($transaction) {
            $transactionDate = Carbon::parse($transaction->date);
            if ($transactionDate->isPast()) {
                return redirect()->back()->with('error', 'you can not delete transaction from the past.');
            }
            $transaction->delete();
        }
        return redirect()->back();
    })->name('transactions.delete');

    Route::post('/transactions/{userId}/{doctorId}', function($userId, $doctorId) {
        $transaction = Transaction::find($userId);
        if ($transaction->date >= now()->startOfDay()) { // check if date is from the past
            if ($transaction->doctor_id === null) {
                if ($doctorId != $transaction->user_id) { // check if doctor is trying to perform a surgery on himself
                    if ($doctorId == Auth::user()->id) { // check if someone is trying someone elses id to a transaction
                        $transaction->doctor_id = $doctorId;
                    } else {
                        return redirect()->back()->with('error', 'you are not supposed to do that.');
                    }
                } else {
                    return redirect()->back()->with('error', 'you can not operate on yourself.');
                }
            } elseif ($transaction->doctor_id == $doctorId) { // unsign doctor
                $transaction->doctor_id = null;
            }
            $transaction->save();
        } else {
            return redirect()->back()->with('error', 'you can not accept transaction from the past.');
        }
        return redirect()->back();
    });

    Route::put('/transactions/{id}', [TransactionController::class, 'updateTransaction'])->name('transactions.update');


    Route::get('/bookings', [TransactionController::class, 'index'])->name('bookings');
    Route::post('/bookings', [TransactionController::class, 'booking'])->name('bookings');
});

Route::get('/doctors', [DoctorsController::class, 'index'])->name('doctors');

Route::get('/services', [SurgeryController::class, 'index'])->name('surgery');

Route::get('/disabled-dates', [TransactionController::class, 'getDisabledDates']);

require __DIR__.'/auth.php';


