<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTransactionRequest;
use App\Http\Requests\UpdateTransactionRequest;
use App\Models\Surgery;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Carbon;


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
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Retrieve all occupied dates from transactions
        $occupiedDates = Transaction::pluck('date')->toArray();

        return View::make('create-booking')->with('occupiedDates', $occupiedDates);
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

    /**
     * Show the form for editing the specified resource.
     */
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
}