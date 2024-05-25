<?php

namespace App\Http\Controllers\Admin\Features;

use App\Http\Controllers\Admin\AdminPageController;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends AdminPageController
{
public function create(Request $request) {
    User::create($request->all());

    return redirect('"/dashboard/users"');
}
public function update(Request $request, User $user) {
    $user->update($request->all());

    return redirect("/dashboard/users");
}

public function delete(User $user) {
    $user->delete();

    return redirect('/dashboard/users');
}

}
