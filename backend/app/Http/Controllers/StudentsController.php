<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\StudentsService;
use App\Models\Students;

class StudentsController extends Controller
{
    protected StudentsService $studentService;

    public function __construct(StudentsService $studentService)
    {
        $this->studentService = $studentService;
    }

    // POST /api/student/save
    public function save(Request $request)
    {
        $data = $this->studentService->SaveStudent($request);
        return response()->json($data, 201);
    }

    // GET /api/student/get
    public function getData()
    {
        $data = Students::all();
        return response()->json($data, 200);
    }
}