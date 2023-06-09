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
        // Create a new transaction
        $transaction = new Transaction();
        $transaction->surgery_id = $request->input('service');
        $transaction->doctor_id = $request->input('doctor');
        $transaction->user_id = auth()->user()->id;
        $transaction->date = $request->input('registrationDate');
        $transaction->price = optional(Surgery::find($request->input('service')))->price ?? 0;
        $transaction->save();

        return redirect()->route('booking.index')->with('success', 'Booking created successfully.');
    }

    public function edit(Transaction $transaction)
    {
        // Retrieve all occupied dates from transactions
        $occupiedDates = Transaction::pluck('date')->toArray();

        return View::make('edit-booking')->with([
            'transaction' => $transaction,
            'occupiedDates' => $occupiedDates
        ]);
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
        // Delete the transaction
        $transaction->delete();

        return redirect()->route('booking.index')->with('success', 'Booking deleted successfully.');
    }

    public function booking(Request $request)
    {
        // Walidacja danych wejściowych
        $request->validate([
            'e-mail' => 'required|email',
            'phone_number' => 'required',
            'service' => 'required',
            'date' => 'required',
        ]);

        // Pobranie ID użytkownika na podstawie adresu e-mail i hasła
        $email = $request->input('e-mail');
        $phone_number = $request->input('phone_number');
        $userId = DB::table('users')
            ->where('e-mail', $email)
            ->where('phone_number', $phone_number)
            ->value('id');
        
        // dd($email, $phone_number, $userId);

        if (!$userId) {
            return redirect()->back()->with('error', 'Invalid credentials.');
        }

        // Utworzenie nowej rezerwacji
        $transaction = new Transaction();
        // $transaction->email = $email;
        // $transaction->phone_number = $phone_number;
        $transaction->date = $request->input('date');

        // Pobranie danych zabiegu na podstawie nazwy
        $serviceId = $request->input('service');
        $surgery = Surgery::find($serviceId);

        // Uzupełnienie danych rezerwacji
        // $transaction->name = $surgery ? $surgery->name : 'do ustalenia';
        $transaction->price = $surgery ? $surgery->price : 'do ustalenia';
        $transaction->surgery_id = $surgery ? $surgery->id : null;
        $transaction->doctor_id = 1;
        $transaction->user_id = $userId;

        $transaction->save();

        return redirect()->route('welcome')->with('success', 'Booking created successfully.');

    }



}