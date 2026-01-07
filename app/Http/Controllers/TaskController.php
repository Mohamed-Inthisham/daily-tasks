<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\task;

class TaskController extends Controller
{
    public function saveTasks(Request $request){

   

     $request->validate([
        'task'=>'required|max:100|min:5',
     ]);

        $task= new task;
        $task->task=$request->task;
        $task->save();

        $data=Task::all();
        return view('welcome')->with('tasks',$data);
        

    }

    public function updateTaskCompleted($id){
        $task=Task::find($id);
        $task->is_completed=true;
        $task->save();
        return redirect('/');

    }

    public function updateTaskNotCompleted($id){
        $task=Task::find($id);
        $task->is_completed=false;
        $task->save();
        return redirect('/');
    }

    public function deleteTask($id){
        $task=Task::find($id);
        $task->delete();
        return redirect('/');

    }


    public function updateTaskView($id){
        $task=Task::find($id);
        return view('update-task')->with('taskData',$task);
    }

    public function updateTask(Request $request){
        $request->validate([
            'task'=>'required|max:50|min:5',
        ]);

        $id=$request->id;
        $task=$request->task;
        $data=Task::find($id);
        $data->task=$task;
        $data->save();

        $data=Task::all();
        return view('welcome')->with('tasks',$data);


       

    }
}
