<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    $data=App\Models\Task::all();
    return view('welcome')->with('tasks',$data);
});


Route::post('/save-tasks', [TaskController::class, 'saveTasks']);

Route::get('/update-task/{id}', [TaskController::class, 'updateTask']);