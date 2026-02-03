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
        $data = $this->studentService->saveStudent($request->all());
        return response()->json($data, 201);
    }

    public function getData(){
        $data = Students::get();
        return response()->json($data,200);
    }


//update,delete
    public function update(Request $request){
        $data = Students::find($request->id);
        if(is_null($data)){
            return response() ->json(['message' => 'Studenet not found ehe', 404]);
        }
        
        $this->studentService->updateStudent($data,$request->all());
        return response()->json($data,200);

    }

    public function delete($id){
        $data = $this->studentService->deleteStudent($id);
        return response()->json($data,200);
    }

}