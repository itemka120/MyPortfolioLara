<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
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

    public function login()
    {
        // Prepare data for rendering
        $data = [
            'title' => "Login",
        ];

        // Create a new View object with the title and content, then render it
        return view('login', $data);
    }
}
