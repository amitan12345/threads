<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterAccountController extends Controller
{
    public function index()
    {
        return view('register-account');
    }

    public function registerAccount(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $name = $validatedData['name'];
        $email = $validatedData['email'];
        $password = $validatedData['password'];

        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => $password,
        ]);

        Auth::login($user);
        
        $request->session()->regenerate();

        return redirect('/dashboard');
    }
}
