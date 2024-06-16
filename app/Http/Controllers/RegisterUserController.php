<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;

class RegisterUserController extends Controller
{
    public function create() {
        return view('auth.register');
    }

    public function store() {

        // validate

        $attributes =  request()->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'email', 'max:254'],
            'password' => ['required']
        ]);

        // create user

        $user = User::create($attributes);

        // login

        Auth::login($user);

        // redirect somewhere

        return redirect('/jobs');
    }
}
