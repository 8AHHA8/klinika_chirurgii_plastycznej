<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        // Walidacja danych rejestracji
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'e-mail' => 'required|string|e-mail|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Utworzenie nowego użytkownika
        $user = User::create([
            'name' => $validatedData['name'],
            'e-mail' => $validatedData['e-mail'],
            'password' => Hash::make($validatedData['password']),
        ]);

        // Logowanie nowo zarejestrowanego użytkownika
        Auth::login($user);

        // Przekierowanie na stronę po zarejestrowaniu
        return redirect('http://127.0.0.1:8000');
    }

    public function login(Request $request)
    {
        // Walidacja danych logowania
        $credentials = $request->validate([
            'e-mail' => 'required|string|e-mail',
            'password' => 'required|string',
        ]);

        // Sprawdzenie poprawności danych logowania
        if (Auth::attempt($credentials)) {
            // Logowanie udane
            return redirect('http://127.0.0.1:8000');
        } else {
            // Logowanie nieudane
            return back()->withErrors([
                'e-mail' => 'Nieprawidłowy adres e-mail lub hasło.',
            ]);
        }
    }

    public function logout(Request $request)
    {
        // Wylogowanie użytkownika
        Auth::logout();

        // Przekierowanie na stronę główną lub inną po wylogowaniu
        return redirect('http://127.0.0.1:8000');
    }

    public function showLoginForm()
    {
        // Sprawdzenie, czy użytkownik jest już zalogowany
        if (Auth::check()) {
            // Użytkownik jest już zalogowany, przekierowanie na stronę po zalogowaniu
            return redirect('http://127.0.0.1:8000');
        }

        // Wyświetlanie formularza logowania
        return view('login');
    }

    public function showRegistrationForm()
    {
        // Sprawdzenie, czy użytkownik jest już zalogowany
        if (Auth::check()) {
            // Użytkownik jest już zalogowany, przekierowanie na stronę po zalogowaniu
            return redirect('http://127.0.0.1:8000');
        }

        // Wyświetlanie formularza rejestracji
        return view('register');
    }
}