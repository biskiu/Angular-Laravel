<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\StudentsService;
use App\Models\Students;

class StudentsController extends Controller
{
    public function __construct(
        protected StudentsService $studentService
    ) {
        
    }
    public function save(Request $request){
        $data = $this->studentService->SaveStudent($request->all());
        return response()->json($data, 201);
    }

    public function getData(){
        $data = Students::get();

        return response()->json($data,200);

    }
}