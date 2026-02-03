<?php

namespace App\Services;

use App\Models\Teachers;

class TeachersService
{
    public function saveTeacher($teacher)
    {
        return Teachers::create($teacher);
    }

public function getTeacher(){
      return Teachers::all();
    }

    public function updateTeacher($teacher, $newval){
     $data = $teacher->update($newval);
     return $data;
    }

    public function deleteTeacher($id){
     $data = Teachers::find($id);
     $data->delete();
     return $data;
    }

}