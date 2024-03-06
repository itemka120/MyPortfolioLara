<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ErrorController extends Controller
{
    public function show404()
    {
        $data = [
            'title' => 'Oups!',
        ];

        // Create a new View object with the title and content, then render it
        return view('404', $data);
    }
}
