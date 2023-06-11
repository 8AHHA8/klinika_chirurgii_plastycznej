<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTransactionRequest;
use App\Http\Requests\UpdateTransactionRequest;
use App\Models\Surgery;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\Doctors;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;



class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookings = Transaction::with('surgery')->get();

        $dates = Transaction::all()->pluck('date')->map(function($date){
            return \Carbon\Carbon::parse($date)->format('Y-m-d');
        })->toArray();

        return View::make('booking')->with([
            'bookings' => $bookings,
            'dates' => $dates,
            'services'=>Surgery::all()
        ]);
    }

    public function getDisabledDates()
    {
        $dates = Transaction::all()->pluck('date')->map(function($date){
            return \Carbon\Carbon::parse($date)->format('Y-m-d');
        })->toArray();

        return response()->json($dates);
    }

    

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTransactionRequest $request)
    {
        
        $transaction = new Transaction(); // create a new transaction
        $transaction->surgery_id = $request->input('service');
        $transaction->doctor_id = $request->input('doctor');
        $transaction->user_id = auth()->user()->id;
        $transaction->date = $request->input('registrationDate');
        $transaction->price = optional(Surgery::find($request->input('service')))->price ?? 0;
        $transaction->save();

        return redirect()->route('booking.index')->with('success', 'Booking created successfully.');
    }

    public function updateTransaction(Request $request, $id)
{
    // Logika aktualizacji rekordu transakcji na podstawie danych z formularza
    $transaction = Transaction::find($id);
    $transaction->date = $request->input('date');
    $transaction->price = $request->input('price');

    // Update the fields from the users table
    $user = User::find($transaction->user_id);
    $user->name = $request->input('name');
    $user->surname = $request->input('surname');
    $user->email = $request->input('email');
    $user->phone_number = $request->input('phone_number');
    $user->save();

    // Update the surgery name field from the surgeries table
    $surgery = Surgery::find($transaction->surgery_id);
    $surgery->name = $request->input('surgery_name');
    $surgery->save();

    // Zapisz zmiany w rekordzie transakcji
    $transaction->save();

    // Przekieruj użytkownika na stronę z listą transakcji (lub inną stronę, którą uznasz za odpowiednią)
    return Redirect::back();
}

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTransactionRequest $request, Transaction $transaction)
    {
        // Update the transaction
        $transaction->surgery_id = $request->input('service');
        $transaction->doctor_id = $request->input('doctor');
        $transaction->date = $request->input('registrationDate');
        $transaction->price = optional(Surgery::find($request->input('service')))->price ?? 0;
        $transaction->save();

        return redirect()->route('booking.index')->with('success', 'Booking updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        
        $transaction->delete(); // delete the transaction

        return redirect()->route('booking.index')->with('success', 'Booking deleted successfully.');
    }

    public function booking(Request $request)
    {
        
        $request->validate([ // validation
            'email' => 'required|email',
            'phone_number' => 'required',
            'service' => 'required',
            'date' => 'required|date',
        ]);

        
        $email = $request->input('email'); // get users id by his/hers mail and phone number
        $phone_number = $request->input('phone_number');
        $userId = DB::table('users')
            ->where('email', $email)
            ->where('phone_number', $phone_number)
            ->value('id');

        
        $failedAttempts = session('failed_attempts', 0); // check how many times the user has failed to book a date
        
        if (Auth::check() && Auth::user()->id !== $userId) {
            $failedAttempts++;
            
            if ($failedAttempts >= 3) {
                
                Auth::logout(); // logout the user
                session()->forget('failed_attempts');

                return redirect()->back()->with('robber', 'Too many failed attempts. You have been logged out.');
            }

            
            session(['failed_attempts' => $failedAttempts]); // save the number of failed attempts

            return redirect()->back()->with('error', 'Wrong email or phone number');
        }

        
        session()->forget('failed_attempts'); // reset faile_attempts number if someone finally booked a surgery
        
        $transaction = new Transaction(); // create new transaction
        $transaction->date = $request->input('date');

        
        $serviceId = $request->input('service'); // get inputs by their names
        $surgery = Surgery::find($serviceId);

        
        if (!$surgery) { // check wether someone didn't mess with id of surgery while trying book a surgery
            return redirect()->back()->with('error', 'Invalid service selected.');
        }

        
        $selectedDate = $transaction->date; // make sure the date is available

        
        if (\Carbon\Carbon::parse($selectedDate)->isPast() && !\Carbon\Carbon::parse($selectedDate)->isToday()) { // Check wether the date isn't from the past
            return redirect()->back()->with('error', 'Selected date cannot be in the past.');
        }

        $existingTransaction = Transaction::where('date', $selectedDate)->first();

        if ($existingTransaction) {
            return redirect()->back()->with('error', 'Selected date is already booked.');
        }

        
        $price = $surgery->price; // chech wether the price is correct

        if (!is_numeric($price) || $price <= 0) {
            return redirect()->back()->with('error', 'Invalid price for the selected service.');
        }

        
        $transaction->price = $price;            // fill the price of reservation
        $transaction->surgery_id = $surgery->id; // fill the id addres of surgery for reservation
        $transaction->doctor_id = null;          // leave doctors id field as null until he/she accepts it
        $transaction->user_id = $userId;         // fill the id addres of user that books the surgery

        $transaction->save();

        return redirect()->route('welcome')->with('success', 'Booking created successfully.');
    }

    
}