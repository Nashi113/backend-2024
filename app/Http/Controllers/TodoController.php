<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Todo::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>['required','string','max:255'],
        ]);

        $todo = Todo::create([
            'title' => $request->title,
        ]);

        return response()->json([
            'message'=>'Todo created succesfully',
            'todo'=>$todo,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Todo $todo)
    {
        $request->validate([
            'title'=>['required','string','max:255'],
        ]);

        $todo->update([
            'title'=>$request->title,
        ]);

        return response()->json([
            'message'=>'Todo update succesfully',
            'data'=>$todo,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $todo)
    {
        $todo->delete();

        return response()->json([
            'message' => 'Todo deleted succesfully',
        ]);
    }

    public function completed(Request $request, Todo $todo)
    {
        $request->validate([
            'completed'=>['required','boolean'],
        ]);

        $todo->update([
            'completed'=>$request->completed,
        ]);

        return response()->json([
            'message'=>'Update succesfully',
            'data'=>$todo,
        ]);
    }
    
}
