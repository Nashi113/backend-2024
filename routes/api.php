<?php

use App\Http\Controllers\TodoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/todo', [TodoController::class, 'index']);
Route::post('/todo', [TodoController::class, 'store']);
Route::patch('/todo/{todo}', [TodoController::class, 'update']);
Route::patch('/todo/{todo}', [TodoController::class, 'completed']);
Route::delete('/todo/{todo}', [TodoController::class, 'destroy']);
