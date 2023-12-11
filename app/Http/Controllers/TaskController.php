<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TaskPoint;
use App\Models\Task;
use App\Http\Requests\TaskRequest;
use App\Http\Requests\TaskEditRequest;


class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::with('task_point')
        ->where('user_id', auth()->id())
        ->get();
        return view('task', ['tasks' => $tasks]);
    }
    public function create(TaskRequest $request)
    {
        $task = new Task;
        $task->task = $request->task;
        $task->user_id = auth()->id();
        $task->save();
        return redirect(route('task'));
    }
    public function edit(TaskEditRequest $request)
    {
        $task = Task::findorfail($request->task_id);
        $task->task = $request->task;
        $task->save();
        return redirect(route('task'));
    }
    public function delete(Request $request)
    {
        $task = Task::findorfail($request->id);
        $task->delete();
        return redirect(route('task'));
    }
}
