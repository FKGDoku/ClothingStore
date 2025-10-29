<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function LoginIndex()
    {
        return view('login');
    }
    public function LoginStore(LoginRequest $request)
    {
        if (!Auth::attempt($request->only(['name', 'password']))) {
            return back()->withErrors(['name' => 'не верное имя или пароль.'])->onlyInput('name');
        }

        $request->session()->regenerate();
        return redirect()->route('home')->with('success', 'вы успешно вошли');

    }
}
