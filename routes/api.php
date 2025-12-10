<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/categories', [\App\Http\Controllers\CategoryController::class, 'index']);
Route::get('/categories/{category}', [\App\Http\Controllers\CategoryController::class, 'show']);

Route::get('/tasks', [\App\Http\Controllers\TaskController::class, 'index']);
Route::get('/tasks/{task}', [\App\Http\Controllers\TaskController::class, 'show']);
Route::post('/tasks', [\App\Http\Controllers\TaskController::class, 'store']);
Route::patch('/tasks/{task}', [\App\Http\Controllers\TaskController::class, 'update']);
Route::delete('/tasks/{task}', [\App\Http\Controllers\TaskController::class, 'destroy']);
