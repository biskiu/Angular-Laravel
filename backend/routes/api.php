<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\SubjectsController;

Route::controller(StudentsController::class)->group(function () {
  Route::post('/student/save', 'save');
  Route::get('/student/get', 'getData');
  Route::put('/student/update', 'update');
  Route::delete('/student/delete/{id}', 'delete');
});


Route::controller(TeachersController::class)->group(function () {
  Route::post('/teacher/save', 'save');
  Route::get('/teacher/get', 'getData');
  Route::put('/teacher/update', 'update');
  Route::delete('/teacher/delete/{id}', 'delete');
});


Route::controller(SubjectsController::class)->group(function () {
  Route::post('/subject/save', 'save');
  Route::get('/subject/get', 'getData');
  Route::put('/subject/update', 'update');
  Route::delete('/subject/delete/{id}', 'delete');
});