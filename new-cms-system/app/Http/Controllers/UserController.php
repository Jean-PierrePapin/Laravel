<?php

namespace App\Http\Controllers;
//namespace App\Http\Controllers\User;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function show(User $user) {
        return view('admin.users.profile', ['user' => $user]);
    }

    public function update(User $user){

        if(request('avatar')) {
            dd(request('avatar'));
        }
    }
}
