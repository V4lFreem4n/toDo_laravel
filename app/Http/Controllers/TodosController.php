<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodosController extends Controller
{
    public function store(Request $request){

        $request -> validate(['entrada' => 'required|min:3']); // VALIDAMOS

        $todo = new Todo;                   //
        $todo->titulos = $request->entrada;  // GUARDAMOS LOS DATOS
        $todo->description = "Esto es un ejemplo";
        $todo->save();                      //

        return redirect()->route('todos')->with('success','Tarea creada exitosamente!'); // REDIRECCIONAMOS
    }

    public function index(){
        $todos = Todo::all();
        return view('app', ['porHacer' => $todos]); //La variable que se envía se llama $porHacer
    }

    public function show($id){
        $todo = Todo::find($id);
        return view('show', ['todo' => $todo]); //La variable que se envía se llama $porHacer
    }

    public function update(Request $request, $id){
        $todo = Todo::find($id);
        $todo->titulos = $request->entrada;
        $todo->save();
        return redirect()->route('todos')->with('success', 'Tarea actualizada!');
        
    }

    public function destroy($id){
        $todo = Todo::find($id);
        $todo->delete();
        return redirect()->route('todos')->with('success', 'La tarea ha sido eliminada!');
    }
}
