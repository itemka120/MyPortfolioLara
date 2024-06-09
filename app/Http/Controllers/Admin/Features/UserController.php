<?php

namespace App\Http\Controllers\Admin\Features;

use App\Http\Controllers\Admin\AdminPageController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends AdminPageController
{
public function create(Request $request) {
    $request->validate([
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
    ]);

    // Check if the email already exists in the users table
    $existingEmail = DB::table('users')->where('email', $request->email)->exists();

    // If the email already exists, redirect with an error message
    if ($existingEmail) {
        return redirect("/dashboard/users")->withErrors(['error' => 'This email is already used. Please try again.']);
    }



    // Create a new user if the email doesn't exist
    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
    ]);

    // If user creation is successful, redirect to the home page
    if ($user) {
        return redirect("/dashboard/users");
    } else {
        // If user creation fails, redirect with an error message
        return redirect("/dashboard/users")->withErrors(['error' => 'Registration failed. Please try again.']);
    }
}
    public function update(Request $request, User $user) {
        // Filter out null values from the request data
        $filteredData = array_filter($request->all(), function($value) {
            return !is_null($value);
        });

        // Update the user with the filtered data
        $user->update($filteredData);

        return redirect("/dashboard/users");
    }

public function delete(User $user) {
    $user->delete();

    return redirect('/dashboard/users');
}

}
