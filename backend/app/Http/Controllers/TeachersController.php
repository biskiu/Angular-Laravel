<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TeachersService;
use App\Models\Teachers;

class TeachersController extends Controller
{
    public function __construct(
        protected TeachersService $teacherService
    ) {
    }

    public function save(Request $request){
        $data = $this->teacherService->saveTeacher($request->all());
        return response()->json($data, 201);
    }

    public function getData(){
        $data = Teachers::get();
        return response()->json($data,200);
    }


//update,delete
    public function update(Request $request){
        $data = Teachers::find($request->id);
        if(is_null($data)){
            return response() ->json(['message' => 'techer not found ehe', 404]);
        }
        
        $this->teacherService->updateTeacher($data,$request->all());
        return response()->json($data,200);
    }

    public function delete($id){
        $data = $this->teacherService->deleteTeacher($id);
        return response()->json($data,200);
    }

}