<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    public function show($id)
    {
        $task = Task::findOrFail($id);
        return view('tasks.show', compact('task'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        // Validate the input data
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable|string',
            'long_description' => 'nullable|string',
        ]);
    
        // Handle checkbox conversion: if checked, use 1 (true), else 0 (false)
        $completed = $request->has('completed') ? 1 : 0;
    
        // Create the task and save it to the database
        Task::create([
            'title' => $request->title,
            'description' => $request->description,
            'long_description' => $request->long_description,
            'completed' => $completed,  // Store the boolean value (1 or 0)
        ]);
    
        // Redirect to the task list page with a success message
        return redirect()->route('tasks.index')->with('success', 'Task created successfully!');
    }
    

    public function edit($id)
    {
        $task = Task::findOrFail($id);
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);

        $task = Task::findOrFail($id);
        $task->update($request->all());

        return redirect()->route('tasks.index')->with('success', 'Task updated successfully!');
    }

    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();

        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully!');
    }
}
