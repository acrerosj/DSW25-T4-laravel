<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\TaskController;

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

// Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index');
// Route::get('/employees/create', [EmployeeController::class, 'create'])->name('employees.create');
// Route::get('/employees/{employee}', [EmployeeController::class, 'show'])->name('employees.show');
// Route::delete('/employees/{employee}', [EmployeeController::class, 'destroy'])->name('employees.destroy');
// Route::post('/employees', [EmployeeController::class, 'store'])->name('employees.store');
// Route::get('/employees/{employee}/edit', [EmployeeController::class, 'edit'])->name('employees.edit');
// Route::put('/employees/{employee}', [EmployeeController::class, 'update'])->name('employees.update');

Route::resource('employees', EmployeeController::class);
Route::resource('tasks', TaskController::class);