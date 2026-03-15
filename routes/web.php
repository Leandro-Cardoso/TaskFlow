<?php

use App\Models\Task;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('index');
});

# Busca tarefas:
Route::get('/tasks/', [TaskController::class, 'index']);
