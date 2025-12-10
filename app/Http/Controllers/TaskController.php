<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Http\Resources\TaskResource;
use App\Models\task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function add(TaskRequest $request, Task $task)
    {
        Task::create($request->all());
        return response()->json([
            'message' => 'Task added successfully',
            'data'  => new TaskResource($task)
        ],200);
    }
}
