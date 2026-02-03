<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;

Route::controller(StudentsController::class)->group(function () {
  Route::post('/student/save', 'save');
  Route::get('/student/get', 'getData');

});