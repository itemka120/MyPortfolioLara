<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;

class AdminPageController
{
    public function dashboard()
    {
        $users = DB::table('users')
            ->get();

        // Create a new View object with the title and content, then render it
        return view('admin.dashboard', compact('users'));
    }

}
