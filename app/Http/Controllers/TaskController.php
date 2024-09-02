<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Category;
use App\Models\Status;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::with('category', 'status')->get();
        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        $categories = Category::all();
        $statuses = Status::all();
        return view('tasks.create', compact('categories', 'statuses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'priority' => 'required|in:low,medium,high',
            'category_id' => 'nullable|exists:categories,id',
            'status_id' => 'nullable|exists:statuses,id',
        ]);

        // Add the logged-in user's ID
        $task = new Task($request->all());
        $task->user_id = auth()->id(); // Assign the user_id
        $task->save();

        return redirect()->route('tasks.index')->with('success', 'Task created successfully.');
    }


    public function show(Task $task)
    {
        return view('tasks.show', compact('task'));
    }

    public function edit(Task $task)
    {
        $categories = Category::all();
        $statuses = Status::all();
        return view('tasks.edit', compact('task', 'categories', 'statuses'));
    }

    public function update(Request $request, Task $task)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'priority' => 'required|in:low,medium,high',
            'category_id' => 'nullable|exists:categories,id',
            'status_id' => 'nullable|exists:statuses,id',
        ]);

        $task->update($request->all());
        return redirect()->route('tasks.index')->with('success', 'Task updated successfully.');
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully.');
    }
}
