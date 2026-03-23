<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

/**
 * @OA\Tag(
 *     name="Authentication",
 *     description="Вход и регистрация"
 * )
 */
class LoginController extends Controller
{
    /**
     * @OA\Post(
     *     path="/login",
     *     summary="Авторизация пользователя",
     *     tags={"Authentication"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"email", "password"},
     *             @OA\Property(property="email", type="string", format="email", example="user@example.com"),
     *             @OA\Property(property="password", type="string", format="password", example="secret123")
     *         )
     *     ),
     *     @OA\Response(
     *         response=302,
     *         description="Перенаправление на список задач"
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Ошибка валидации"
     *     )
     * )
     */
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