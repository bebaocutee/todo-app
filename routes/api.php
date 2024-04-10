<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Tasks
Route::get('tasks/list', [TaskController::class,'listTask']);
Route::post('tasks', [TaskController::class,'create']);
Route::post('tasks/update/{id}', [TaskController::class,'update']);
Route::get('tasks/show/{id}', [TaskController::class,'show']);
Route::post('tasks/delete/{id}', [TaskController::class,'delete']);

//Product
Route::post('products', [ProductController::class,'create']);
Route::get('products/list', [ProductController::class,'list']);
Route::post('products/update/{id}', [ProductController::class,'update']);
Route::get('products/show/{id}', [ProductController::class,'show']);
Route::post('products/delete/{id}', [ProductController::class,'delete']);


