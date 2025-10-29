<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegController extends Controller
{
    public function registrationIndex()
    {
        return view('registrationIndex');
    }

    public function registrationStore(RegisterRequest $request)
    {
        $data = $request->validated();

        $user = User::create([
            'name' => $data['name'],
            'password' => Hash::make($data['password']),
        ]);
        Auth::login($user);

        return redirect('/')->with('success', 'Registration Successful!');

    }
}
