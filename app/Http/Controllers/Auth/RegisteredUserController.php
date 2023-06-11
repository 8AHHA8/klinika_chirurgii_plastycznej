<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Register a new user.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function register(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'surname' => $data['surname'],
            'phone_number' => $data['phone_number'],
            'pesel' => $data['pesel'],
            'e-mail' => $data['e-mail'],
            'password' => Hash::make($data['password']),
        ]);
    }
    
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'integer'],
            'pesel' => ['required', 'string', 'size:11'],
            'e-mail' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $data = $request->all();
        $data['role'] = 2; // assign 2 role for new user

        $user = $this->register($data);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}