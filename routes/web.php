<?php

use App\Models\Task;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('index');
})->name('index');

# Busca tarefas:
Route::get('/tasks/', [TaskController::class, 'index'])->name('tasks.index');

# Nova tarefa:
Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
