<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// use App\Http\Controllers\StudentsController;

// Route::post('/student/save', [StudentsController::class, 'save']);
// Route::get('/student/get', [StudentsController::class, 'getData']);
