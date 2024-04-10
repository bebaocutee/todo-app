<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function listTask(Request $request)
    {
        $tasks = Task::where('name','LIKE', '%' . $request->name . '%')->get();
//        dd($tasks); //kiemtra tasks
        return response()->json($tasks);
    }

    public function create(Request $request)
    {
//        dd($request->only(['name', 'status'])); //k nen de all
        $task = Task::create($request->only(['name', 'status']));
        return response()->json($task);
    }

    public function update(Request $request, $id)
    {
        $task = Task::find($id);
        $task->update($request->only(['name', 'status']));
        return response()->json($task);
    }

    public function show($id)
    {
        $task = Task::find($id);
        return response()->json($task);
    }

    public function delete($id)
    {
        $task = Task::find($id);
        $task->delete();
        return response()->json(['message' => 'Xoa thanh cong']);
    }
}
