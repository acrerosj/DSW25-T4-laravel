<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prueba', function() {
    return view('prueba');
});

Route::get('/hello', function() {
    return view('hola');
});

Route::get('/algo', function() {
    return "esto es algo";
});

Route::get('/users', [UserController::class, 'get']);
Route::get('/users/{id}', [UserController::class, 'getId']);

Route::get('/employees', [EmployeeController::class, 'index']);