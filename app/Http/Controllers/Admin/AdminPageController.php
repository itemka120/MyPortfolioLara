<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;

class AdminPageController
{
    public function users()
    {
        $users = DB::table('users')
            ->get();

        return view('admin.users', compact('users'));
    }

    public function vacancies() {
        return view('admin.vacancies');
    }
}
