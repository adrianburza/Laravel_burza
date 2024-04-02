<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        if (Auth::check()) {
            return redirect('/');
        }

        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'meno' => 'required|string|max:255',
            'priezvisko' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if (User::where('email', $request->email)->exists()) {
            return back()->withErrors(['email' => 'Táto e-mailová adresa je už zaregistrovaná.']);
        }

        User::create([
            'meno' => $request->meno,
            'priezvisko' => $request->priezvisko,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('hlavnastranka')->with('success', 'Registrácia úspešná. Teraz sa môžete prihlásiť.');
    }
}