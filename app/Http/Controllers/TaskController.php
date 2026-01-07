<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\task;

class TaskController extends Controller
{
    public function savetasks(Request $request){

   

     $request->validate([
        'task'=>'required|max:100|min:5',
     ]);

        $task= new task;
        $task->task=$request->task;
        $task->save();

        $data=Task::all();
        return view('welcome')->with('tasks',$data);
        

    }
}
