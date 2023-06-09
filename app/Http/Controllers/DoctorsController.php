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
        // Pobierz wszystkich doktorów
        $doctors = Doctors::all();

        // Przekazanie danych do widoku
        return view('team')->with('doctors', $doctors);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Wyświetl formularz tworzenia nowego doktora
        return view('doctors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Walidacja danych z formularza
        $validatedData = $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'password' => 'required',
            'email' => 'required|email',
            'speciality' => 'required',
            'description' => 'required',
            'advancement_level' => 'required',
            'role' => 'required',
        ]);

        // Utworzenie nowego doktora w bazie danych
        Doctors::create($validatedData);

        // Przekierowanie po zapisaniu
        return redirect()->route('doctors.index')->with('success', 'Doctor created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Doctors $doctors)
    {
        // Wyświetl dane o konkretnym doktorze
        return view('doctors.show', compact('doctor'));
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