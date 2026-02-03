<?php

namespace App\Services;

use App\Models\Students;

class StudentsService
{
    public function saveStudent($student)
    {
        return Students::create($student);
    }

public function getStudent(){
      return Students::all();
    }

    public function updateStudent($student, $newval){
     $data = $student->update($newval);
     return $data;
    }

    public function deleteStudent($id){
     $data = Students::find($id);
     $data->delete();
     return $data;
    }

}