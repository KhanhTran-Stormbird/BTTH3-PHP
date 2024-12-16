<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', [TaskController::class, 'index'])->name('tasks.index'); // Redirecting the homepage to task list

Route::resource('tasks', TaskController::class); // Resource routes for tasks
