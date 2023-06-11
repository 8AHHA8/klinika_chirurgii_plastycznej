<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        Auth::login($user);

        return redirect('/');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            return redirect('/');
        } else {
            return back()->withErrors([
                'email' => 'Nieprawidłowy adres email lub hasło.',
            ]);
        }
    }

    public function logout(Request $request) 
    {
        Auth::logout();
        return redirect('/');
    }

    public function showLoginForm()
    {
        if (Auth::check()) {
            return redirect('/');
        }

        return view('login');
    }

    public function showRegistrationForm()
    {
        if (Auth::check()) {
            return redirect('/');
        }

        return view('registration');
    }
}