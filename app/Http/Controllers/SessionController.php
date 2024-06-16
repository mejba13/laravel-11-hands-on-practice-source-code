<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use function PHPUnit\Framework\throwException;
use Illuminate\Support\Facades\Validator;

class SessionController extends Controller
{
    public function create(){
        return view('auth.login');
    }
    public function store(){

        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if(! Auth::attempt($attributes)){
            throw ValidationException::withMessages([
                'email' => __('Sorry, there was an error while logging in.')
            ]);
        }

        request()->session()->regenerate();
        return redirect('/jobs');
    }

    public function destroy(){
        auth()->logout();
        return redirect('/');
    }
}
