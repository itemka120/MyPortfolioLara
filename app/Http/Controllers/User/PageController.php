<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{

    public function home()
    {
        // Prepare data for rendering
        $data = [

        ];

        // Create a new View object with the title and content, then render it
        return view('user.home', $data);

    }

    public function about()
    {
        $info = DB::table('abouts')->get();

        // Prepare data for rendering
        $data = [
            'info' => $info,
        ];

        // Create a new View object with the title and content, then render it
        return view('user.about', $data);
    }

    public function register()
    {
        return view('user.register');
    }

    public function login()
    {
        return view('user.login');
    }
}
