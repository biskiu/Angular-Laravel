<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\SubjectsService;
use App\Models\Subjects;

class SubjectsController extends Controller
{
    public function __construct(
        protected SubjectsService $subjectService
    ) {
    }

    public function save(Request $request){
        $data = $this->subjectService->saveSubject($request->all());
        return response()->json($data, 201);
    }

    public function getData(){
        $data = Subjects::get();
        return response()->json($data,200);
    }


//update,delete
    public function update(Request $request){
        $data = Subjects::find($request->id);
        if(is_null($data)){
            return response() ->json(['message' => 'subject not found ehe', 404]);
        }
        
        $this->subjectService->updateSubject($data,$request->all());
        return response()->json($data,200);
    }

    public function delete($id){
        $data = $this->subjectService->deleteSubject($id);
        return response()->json($data,200);
    }

}