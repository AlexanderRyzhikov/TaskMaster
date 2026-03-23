<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TaskPoint;
use App\Http\Requests\TaskPointRequest;
use App\Http\Requests\StatusRequest;

/**
 * @OA\Tag(
 *     name="TaskPoints",
 *     description="Управление пунктами задач"
 * )
 */
class TaskPointController extends Controller
{
    /**
     * @OA\Post(
     *     path="/task-points",
     *     summary="Создать пункт задачи",
     *     tags={"TaskPoints"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"task_point", "task_id"},
     *             @OA\Property(property="task_point", type="string", example="Купить хлеб"),
     *             @OA\Property(property="task_id", type="integer", example=1)
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
    public function create(TaskPointRequest $request)
    {
        echo($request);
        $taskPoint = new TaskPoint;
        $taskPoint->task_point = $request->task_point;
        $taskPoint->task_id = $request->task_id;
        $taskPoint->save();
        return redirect(route('task'));
    }

    /**
     * @OA\Put(
     *     path="/task-points/{id}",
     *     summary="Редактировать пункт задачи",
     *     tags={"TaskPoints"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID пункта задачи",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"task_point", "task_id"},
     *             @OA\Property(property="task_point", type="string", example="Купить батон"),
     *             @OA\Property(property="task_id", type="integer", example=1)
     *         )
     *     ),
     *     @OA\Response(
     *         response=302,
     *         description="Перенаправление на список задач"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Пункт не найден"
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Ошибка валидации"
     *     )
     * )
     */
    public function edit(TaskPointRequest $request)
    {
        echo($request);
        $taskPoint = TaskPoint::findorfail($request->task_id);
        $taskPoint->task_point = $request->task_point;
        $taskPoint->save();
        return redirect(route('task'));
    }

    /**
     * @OA\Delete(
     *     path="/task-points/{id}",
     *     summary="Удалить пункт задачи",
     *     tags={"TaskPoints"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID пункта задачи",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=302,
     *         description="Перенаправление на список задач"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Пункт не найден"
     *     )
     * )
     */
    public function delete(Request $request)
    {
        $taskPoint = TaskPoint::findorfail($request->id);
        $taskPoint->delete();
        return redirect(route('task'));
    }

    /**
     * @OA\Patch(
     *     path="/task-points/{id}/status",
     *     summary="Изменить статус пункта задачи",
     *     tags={"TaskPoints"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID пункта задачи",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"status"},
     *             @OA\Property(property="status", type="boolean", example=true)
     *         )
     *     ),
     *     @OA\Response(
     *         response=202,
     *         description="Статус обновлён",
     *         @OA\JsonContent(
     *             @OA\Property(property="status", type="string", example="Success"),
     *             @OA\Property(
     *                 property="data",
     *                 type="object",
     *                 @OA\Property(property="id", type="integer", example=1),
     *                 @OA\Property(property="task_point", type="string", example="Купить хлеб"),
     *                 @OA\Property(property="task_id", type="integer", example=1),
     *                 @OA\Property(property="status", type="boolean", example=true),
     *                 @OA\Property(property="created_at", type="string", format="date-time"),
     *                 @OA\Property(property="updated_at", type="string", format="date-time")
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Пункт не найден"
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Ошибка валидации"
     *     )
     * )
     */
    public function status($id, StatusRequest $request)
    {     
        $taskPoint = TaskPoint::findorfail($request->id);
        $taskPoint->status = $request->status;
        $taskPoint->save();
        return response()->json([
            'status'=> 'Success',
            'data' => $taskPoint
        ], 202);
    }
}