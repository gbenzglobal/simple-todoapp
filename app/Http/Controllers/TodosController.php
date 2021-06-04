<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index()
    {

        // Fetch all Todos
        $todos = Todo::all();
        return view('todos.index')->with('todos', $todos);
    }

    public function show(Todo $todo)
    {
        return view('todos.show')->with('todo', $todo);
    }


    public function create()
    {
        return view('todos.create');
    }

    public function store(Request $request, Todo $todo)
    {

        $validatedData = $request->validate([
            'name' => 'required | min:3 | max: 30',
            'description' => 'required | min:3'
        ]);

        //$todo = new Todo;

        $todo->name = $validatedData['name'];
        $todo->description = $validatedData['description'];

        $todo->save();

        session()->flash('success', 'Todo created successfully');

        return redirect('/todos');
    }

    public function edit(Todo $todo)
    {
        return view('todos.edit')->with('todo', $todo);
    }

    public function update(Request $request, Todo $todo)
    {
        $validatedData = $request->validate([
            'name' => 'required | min:3 | max: 30',
            'description' => 'required | min:3'
        ]);

        $todo->name = $validatedData['name'];
        $todo->description = $validatedData['description'];

        $todo->save();

        session()->flash('success', 'Todo updated successfully');

        return redirect('/todos');
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();

        session()->flash('success', 'Todo deleted successfully');

        return redirect('/todos');
    }

    public function complete(Todo $todo)
    {
        $todo->completed = true;

        $todo->save();

        session()->flash('success', 'Todo completed successfully');

        return redirect('/todos');
    }

    public function notcomplete(Todo $todo)
    {
        $todo->completed = false;

        $todo->save();

        session()->flash('success', 'Todo undo successfully');

        return redirect('/todos');
    }
}
