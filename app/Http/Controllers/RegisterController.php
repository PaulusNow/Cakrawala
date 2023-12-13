<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index() 
    {
        return view('register.index', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'email' => ['required', 'email:dns', 'unique:users'],
            'notlp' => ['required', 'min:10', 'max:14', 'unique:users'],
            'password' => ['required', 'min:5', 'max:255']
        ]);

        User::created($validatedData);
    }
}
