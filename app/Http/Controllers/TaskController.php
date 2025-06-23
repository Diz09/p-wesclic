<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::latest()->get();
        return view('task.index', compact('tasks'));
    }
    
    public function create()
    {
        return view('task.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string',
            'deskripsi' => 'required|string|min:10',
        ]);

        Task::create($validated);
        
        return redirect()->back()->with('success', 'Tugas berhasil dibuat.');
    }
}
