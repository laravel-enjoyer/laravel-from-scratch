<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required|max:50|min:3',
            'username' => ['required','max:50', 'min:3', Rule::unique('users', 'username')],
            'email' => ['email', 'max:50', Rule::unique('users', 'email')],
            'password' => 'required|max:50|min:7'
        ]);

        $user = User::create($attributes);

        auth()->login($user);

        return redirect('/')->with('success', 'Your account has been created.');
    }
}
