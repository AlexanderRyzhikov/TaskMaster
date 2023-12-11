<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TaskPoint;
use App\Http\Requests\TaskPointRequest;
use App\Http\Requests\StatusRequest;


class TaskPointController extends Controller
{
    public function create(TaskPointRequest $request)
    {
        echo($request);
        $taskPoint = new TaskPoint;
        $taskPoint->task_point = $request->task_point;
        $taskPoint->task_id = $request->task_id;
        $taskPoint->save();
        return redirect(route('task'));
    }
    public function edit(TaskPointRequest $request)
    {
        echo($request);
        $taskPoint = TaskPoint::findorfail($request->task_id);
        $taskPoint->task_point = $request->task_point;
        $taskPoint->save();
        return redirect(route('task'));
    }
    public function delete(Request $request)
    {
        $taskPoint = TaskPoint::findorfail($request->id);
        $taskPoint->delete();
        return redirect(route('task'));
    }
    public function status($id, StatusRequest $request)
    {
        // echo($request);
        
        $taskPoint = TaskPoint::findorfail($request->id);
        $taskPoint->status = $request->status;
        $taskPoint->save();
        return response()->json([
			'status'=> 'Success',
			'data' => $taskPoint
		], 202);
    }
}
