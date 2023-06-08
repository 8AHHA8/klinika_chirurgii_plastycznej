<?php

namespace App\Http\Controllers;

use App\Models\Surgery;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSurgeryRequest;
use App\Http\Requests\UpdateSurgeryRequest;
use Illuminate\Support\Facades\View;

class SurgeryController extends Controller
{
    public function index(){

        return view('services', ['services'=>Surgery::all()]);
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
    public function store(StoreSurgeryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Surgery $surgery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Surgery $surgery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSurgeryRequest $request, Surgery $surgery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Surgery $surgery)
    {
        //
    }
}