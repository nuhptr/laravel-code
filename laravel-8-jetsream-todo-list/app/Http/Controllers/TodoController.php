<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view("todo.index", [
            'todos' => $todos
        ]);
    }

    public function create()
    {
        return view("todo.create");
    }

    public function store(Request $request)
    {
        $todo = new Todo;

        // TODO: menyimpan ke field row todo dan request ke todo
        $todo->todo = $request->todo;
        $todo->save();

        return redirect()->route("todo.index");
    }

    public function show(Todo $todo)
    {
        //
    }

    public function edit(Todo $todo)
    {
        return view("todo.edit", [
            "todo" => $todo
        ]);
    }

    public function update(Request $request, Todo $todo)
    {
        $todo->todo = $request->todo;
        $todo->save();

        return redirect()->route("todo.index");
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();

        return redirect()->route("todo.index");
    }
}
