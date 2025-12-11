<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Http\Resources\TaskResource;
use App\Models\task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function add(TaskRequest $taskRequest)
    {
        Task::create($taskRequest->all());
        return response()->json([
            'message' => 'Task added successfully',
            'data'  => new TaskResource($taskRequest)
        ],200);
    }
}
