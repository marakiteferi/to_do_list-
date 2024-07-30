<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('layout');
});

Route::resource('tasks', TaskController::class);
Route::resource('users', UserController::class)->only(['create', 'store']);
Route::resource('statuses', StatusController::class)->only(['index', 'show']);
Route::resource('categories', CategoryController::class);
