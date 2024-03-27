<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

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
        $info = DB::table('abouts')->get();

        // Prepare data for rendering
        $data = [
            'info' => $info,
        ];

        // Create a new View object with the title and content, then render it
        return view('about', $data);
    }
}
