<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index()
    {
      $tasks = Auth::user()->tasks()->get();
      return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
      return view('tasks.create');
    }

    public function store(Request $request)
    {
      $task = new Task;
      $task->name = $request->input('name');
      $task->description = $request->input('description');
      $task->priority = $request->input('priority');
      $task->user_id = Auth::id();
      $task->save();

      return redirect()->route('tasks.index');
    }

    public function edit($id)
    {
      $task = Auth::user()->tasks()->find($id);
      return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, $id)
    {
      $task = Auth::user()->tasks()->find($id);

      $task->name = $request->input('name');
      $task->description = $request->input('description');
      $task->priority = $request->input('priority');
      $task->update();

      return redirect()->route('tasks.index');
    }

    public function destroy($id)
    {
      $task = Auth::user()->tasks()->find($id);
      $task->delete();
      
      return redirect()->route('tasks.index');
    }
}
