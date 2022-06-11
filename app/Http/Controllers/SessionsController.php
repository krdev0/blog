<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        //validate request
        $attributes = request()->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        //attempt to auth and login user based on provided credentials
        if(!auth()->attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'Your provided credentials could not be verified'
            ]);
        }

        session()->regenerate();

        return redirect('/')->with('success', 'Welcome back!');
    }
    
    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'You have been logged out!');
    }
}
