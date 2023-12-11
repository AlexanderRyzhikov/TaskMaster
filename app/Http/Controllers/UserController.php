<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\User;

class UserController extends Controller
{
    public function edit(UserRequest $request)
    {
        $user = User::findorfail(auth()->id());
        $user->surname = $request->surname;
        $user->name = $request->name;
        $user->patronymic = $request->patronymic;
        $user->email = $request->email;
        $user->save();
        return redirect(route('account'));
    }
}
