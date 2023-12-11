<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class RegisterController extends Controller
{
    public function save(RegisterRequest $request)
    {
        if (Auth::check()) {
            return redirect(route('task'));
        }
        $user = User::create($request->validated());
        if ($user) {
            auth()->login($user);
            return redirect(route('task'));
        }
        echo($user);
        return redirect(route('registration'))->withError([
            'formError' => 'Произошла ошибка при сохранении пользователя'
        ]);
    }
}
