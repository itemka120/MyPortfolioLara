<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{

    public function registerPost(Request $request)
    {
        // Check if the email already exists in the users table
        $existingEmail = DB::table('users')->where('email', $request->email)->exists();

        // If the email already exists, redirect with an error message
        if ($existingEmail) {
            return redirect()->route('register')->withErrors(['error' => 'This email is already used. Please try again.']);
        }

        // Create a new user if the email doesn't exist
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // If user creation is successful, redirect to the home page
        if ($user) {
            return redirect()->intended(route('home'));
        }

        // If user creation fails, redirect with an error message
        return redirect(route('register'))->withErrors(['error' => 'Registration failed. Please try again.']);
    }

    public function loginPost(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            //Checking for admin
            if (Auth::check() && Auth::user()->isAdmin()) {
                return redirect()->intended(route('dashboard.users'));
            }
            return redirect()->intended(route('home'));
        }

        return redirect(route('login'))->withErrors(['error' => 'Invalid email or password.']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route('home'))->with('success', 'You\'ve successfully logout');
    }
}
