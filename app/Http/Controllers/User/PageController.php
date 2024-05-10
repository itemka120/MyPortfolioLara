<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{

    public function home()
    {
        // Create a new View object with the title and content, then render it
        return view('user.home');
    }

    public function projects()
    {
        // Create a new View object with the title and content, then render it
        return view('user.projects');
    }
}
