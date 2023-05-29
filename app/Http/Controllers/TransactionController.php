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
    // public function index()
    // {
    //     $bookings =  Transaction::with('surgery')->get();

    //     return View::make('booking')->with('bookings', $bookings);
    // }

    public function index()
    {
        $bookings = Transaction::with('surgery')->get();

        $occupiedDates = Transaction::pluck('registration_date')->toArray();
        $occupiedDates = array_map(function ($date) {
            return Carbon::parse($date)->format('Y-m-d');
        }, $occupiedDates);

        return View::make('booking', compact('bookings', 'occupiedDates'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTransactionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTransactionRequest $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
