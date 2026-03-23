<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\User;

/**
 * @OA\Tag(
 *     name="User",
 *     description="Управление профилем пользователя"
 * )
 */
class UserController extends Controller
{
    /**
     * @OA\Put(
     *     path="/user",
     *     summary="Обновить данные текущего пользователя",
     *     tags={"User"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"surname", "name", "email"},
     *             @OA\Property(property="surname", type="string", example="Иванов"),
     *             @OA\Property(property="name", type="string", example="Иван"),
     *             @OA\Property(property="patronymic", type="string", example="Иванович"),
     *             @OA\Property(property="email", type="string", format="email", example="updated@example.com")
     *         )
     *     ),
     *     @OA\Response(
     *         response=302,
     *         description="Перенаправление на страницу аккаунта"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Пользователь не найден"
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Ошибка валидации"
     *     )
     * )
     */
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