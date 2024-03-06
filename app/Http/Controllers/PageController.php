<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function home()
    {
        // Prepare data for rendering
        $data = [
            'title' => 'Welcome!',
        ];

        // Create a new View object with the title and content, then render it
        return view('home', $data);

    }

    public function about()
    {
        // Prepare data for rendering
        $data = [
            'title' => 'About me',
        ];

        // Create a new View object with the title and content, then render it
        return view('about', $data);
    }
}
