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

# Editar tarefa:
Route::get('/tasks/{task}/edit', [TaskController::class, 'edit'])->name('tasks.edit');
Route::put('/tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');

# Apagar tarefa:
Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');

# Concluir tarefa:
Route::put('/tasks/{task}/complete', [TaskController::class, 'complete'])->name('tasks.complete');
