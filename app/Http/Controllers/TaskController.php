<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\task;

class TaskController extends Controller
{
    public function savetasks(Request $request){
        $task= new task;
        $task->task=$request->task;
        $task->save();
        return redirect('/');

    }
}
