<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(LoginRequest $request)
    {
        if (Auth::check()) {
            return redirect(route('task'));
        }
        if (Auth::attempt($request->validated())) {
            return redirect(route('task'));
        }
        return redirect(route('login'))->withErrors([
            'auth' => 'Не удалось авторизоваться'
        ]);
    }
}
