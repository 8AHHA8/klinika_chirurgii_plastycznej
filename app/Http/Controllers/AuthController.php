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
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'e-mail' => 'required|string|e-mail|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $validatedData['name'],
            'e-mail' => $validatedData['e-mail'],
            'password' => Hash::make($validatedData['password']),
        ]);

        Auth::login($user);

        return redirect('/');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'e-mail' => 'required|string|e-mail',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            return redirect('/');
        } else {
            return back()->withErrors([
                'e-mail' => 'Nieprawidłowy adres e-mail lub hasło.',
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