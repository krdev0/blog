<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        $attributes = request()->validate([
           'name' => 'required|min:4',
           'username' => 'required|min:4',
           'email' => 'required|email',
           'password' => 'required|min:6'
        ]);

        User::create($attributes);

        return redirect('/');
    }
}
