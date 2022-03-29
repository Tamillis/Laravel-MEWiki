<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function store(Request $request)
    {
        //validate
        $request->validate([
            'username' => 'required|max:255',
            'password' => 'required|max:255',
        ]);

        //login
        if(!auth()->attempt([
            'username' => $request->username,
            'password' => $request->password,
        ])) return back();

        //redirect
        return redirect()->route('home');
    }
}
