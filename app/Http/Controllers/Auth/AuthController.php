<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function register()
    {
        // Prepare data for rendering
        $data = [
            'title' => "Register",
        ];

        // Create a new View object with the title and content, then render it
        return view('register', $data);
    }

    public function registerPost(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ];

        $user = User::create($data);
        if ($user) {
            return redirect()->intended(route('login'));
        }

        return redirect(route('register'))->with('error', 'Registration failed. Please try again.');
    }

    public function login()
    {
        // Prepare data for rendering
        $data = [
            'title' => "Login",
        ];

        // Create a new View object with the title and content, then render it
        return view('login', $data);
    }

    public function loginPost(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        print_r($credentials);
        if (Auth::attempt($credentials)) {
            return redirect()->intended(route('home'))->with('successLogin', 'You\'ve successfully logout!');
        }

        return redirect(route('login'))->with('error', 'Invalid email or password.');

    }

    public function dashboard()
    {
        $users = DB::table('users')
            ->get();

        // Prepare data for rendering
        $data = [
            'users' => $users,
        ];

        // Create a new View object with the title and content, then render it
        return view('admin/dashboard', $data);
    }

    public function logout() {
        Session::flush();
        Auth::logout();
        return redirect(route('home'))->with('session', 'You\'ve successfully logout!');
    }
}
