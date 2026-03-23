<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TaskPoint;
use App\Models\Task;
use App\Http\Requests\TaskRequest;
use App\Http\Requests\TaskEditRequest;

/**
 * @OA\Tag(
 *     name="Tasks",
 *     description="Управление задачами"
 * )
 */
class TaskController extends Controller
{
    /**
     * @OA\Get(
     *     path="/tasks",
     *     summary="Получить список задач текущего пользователя",
     *     tags={"Tasks"},
     *     @OA\Response(
     *         response=200,
     *         description="Список задач с пунктами",
     *         @OA\JsonContent(
     *             type="array",
     *             @OA\Items(
     *                 type="object",
     *                 @OA\Property(property="id", type="integer", example=1),
     *                 @OA\Property(property="task", type="string", example="Купить продукты"),
     *                 @OA\Property(property="user_id", type="integer", example=1),
     *                 @OA\Property(property="created_at", type="string", format="date-time"),
     *                 @OA\Property(property="updated_at", type="string", format="date-time"),
     *                 @OA\Property(
     *                     property="task_points",
     *                     type="array",
     *                     @OA\Items(
     *                         type="object",
     *                         @OA\Property(property="id", type="integer", example=1),
     *                         @OA\Property(property="task_point", type="string", example="Купить хлеб"),
     *                         @OA\Property(property="task_id", type="integer", example=1),
     *                         @OA\Property(property="status", type="boolean", example=false),
     *                         @OA\Property(property="created_at", type="string", format="date-time"),
     *                         @OA\Property(property="updated_at", type="string", format="date-time")
     *                     )
     *                 )
     *             )
     *         )
     *     )
     * )
     */
    public function index()
    {
        $tasks = Task::with('task_point')
            ->where('user_id', auth()->id())
            ->get();
        return view('task', ['tasks' => $tasks]);
    }

    /**
     * @OA\Post(
     *     path="/tasks",
     *     summary="Создать новую задачу",
     *     tags={"Tasks"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"task"},
     *             @OA\Property(property="task", type="string", example="Купить продукты")
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
    public function create(TaskRequest $request)
    {
        $task = new Task;
        $task->task = $request->task;
        $task->user_id = auth()->id();
        $task->save();
        return redirect(route('task'));
    }

    /**
     * @OA\Put(
     *     path="/tasks/{id}",
     *     summary="Редактировать задачу",
     *     tags={"Tasks"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID задачи",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"task_id", "task"},
     *             @OA\Property(property="task_id", type="integer", example=1),
     *             @OA\Property(property="task", type="string", example="Обновлённая задача")
     *         )
     *     ),
     *     @OA\Response(
     *         response=302,
     *         description="Перенаправление на список задач"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Задача не найдена"
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Ошибка валидации"
     *     )
     * )
     */
    public function edit(TaskEditRequest $request)
    {
        $task = Task::findorfail($request->task_id);
        $task->task = $request->task;
        $task->save();
        return redirect(route('task'));
    }

    /**
     * @OA\Delete(
     *     path="/tasks/{id}",
     *     summary="Удалить задачу",
     *     tags={"Tasks"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID задачи",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=302,
     *         description="Перенаправление на список задач"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Задача не найдена"
     *     )
     * )
     */
    public function delete(Request $request)
    {
        $task = Task::findorfail($request->id);
        $task->delete();
        return redirect(route('task'));
    }
}
