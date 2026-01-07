<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    $data=App\Models\Task::all();
    return view('welcome')->with('tasks',$data);
});


Route::post('/save-tasks', [TaskController::class, 'saveTasks']);

Route::get('/update-as-completed/{id}', [TaskController::class, 'updateTaskCompleted']);
Route::get('/update-as-not-completed/{id}', [TaskController::class, 'updateTaskNotCompleted']);
Route::get('/delete-tasks/{id}', [TaskController::class, 'deleteTask']);
Route::get('/update-nav/{id}', [TaskController::class, 'updateTaskView']);
Route::post('/update-task', [TaskController::class, 'updateTask']);