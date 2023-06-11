<?php

namespace App\Http\Controllers;

use App\Models\Doctors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class DoctorsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $doctors = Doctors::all(); // get all doctors

        
        return view('team')->with('doctors', $doctors); // return data to the team view
    }

    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Doctors $doctors)
    {
        // Wyświetl formularz edycji doktora
        return view('doctors.edit', compact('doctor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Doctors $doctors)
    {
        // Walidacja danych z formularza
        $validatedData = $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'password' => 'required',
            'email' => 'required|email',
            'description' => 'required',
            'advancement_level' => 'required',
            'advancement_level' => 'required',
            'role' => 'required',
        ]);

        // Zaktualizuj dane doktora w bazie danych
        $doctors->update($validatedData);

        // Przekierowanie po aktualizacji
        return redirect()->route('doctors.index')->with('success', 'Doctor updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doctors $doctors)
    {
        // Usunięcie doktora z bazy danych
        $doctors->delete();

        // Przekierowanie po usunięciu
        return redirect()->route('doctors.index')->with('success', 'Doctor deleted successfully.');
    }
}