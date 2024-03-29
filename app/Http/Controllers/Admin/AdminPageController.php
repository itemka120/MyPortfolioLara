<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;

class AdminPageController
{
    public function dashboardUsers()
    {
        $users = DB::table('users')
            ->get();

        // Prepare data for rendering
        $data = [
            'users' => $users,
        ];

        // Create a new View object with the title and content, then render it
        return view('admin.dashboard_users', $data);
    }

    public function dashboardAbout()
    {
        $users = DB::table('users')
            ->get();

        // Prepare data for rendering
        $data = [
            'users' => $users,
        ];

        // Create a new View object with the title and content, then render it
        return view('admin.dashboard_about', $data);
    }
}
