<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        var_dump(request()->all());
//        request()->validate([
//           'name' => 'required',
//           'username' => 'required|min:4',
//           'email' => 'required|email',
//           'password' => 'required|min:6'
//        ]);
    }
}
