<?php

namespace App\Http\Controllers;

use App\Todo;
use Dotenv\Validator;
use Illuminate\Http\Request;
use App\Http\Requests\TodoCreateRequest;

class TodoController extends Controller
{
  public function index()
  {
    $todos = Todo::all();
    
    return view('todos.index')->with(['todos'=> $todos]);
  }

  public function create()
  {
      return view('todos.create');
  }


  public function edit($id)
  {
    $todo = Todo::find($id);
    return $todo;
      return view('todos.edit');
  }

  public function store(TodoCreateRequest $request)
  {

    // la 1 ere Methode
    /*if(!$request->title){
        return  redirect()->back()->with('error','please give title');
     }*/

     // la 2 eme Methode

     
      /*  $request->validate(
        [
           'title'=>'required|max:255',
        ]
        );
        */

   // la 3 eme Methode : on travail avec TodoCreateRequest.php
    



    



      Todo::create($request->all());
      return redirect()->back()->with('message','Todo Created Successfuly');
       
     
  }
}
