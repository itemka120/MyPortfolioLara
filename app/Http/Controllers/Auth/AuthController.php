<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{


    public function registerPost(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        if ($user) {
            return redirect()->intended(route('home'));
        }

        return redirect(route('register'))->with('error', 'Registration failed. Please try again.');
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

        return redirect(route('login'))->with('error', 'Invalid email or password.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route('home'));
    }
}
