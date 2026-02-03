<?php

namespace App\Services;

use App\Models\Subjects;

class SubjectsService
{
    public function saveSubject($subject)
    {
        return Subjects::create($subject);
    }

public function getSubject(){
      return Subjects::all();
    }

    public function updateSubject($subject, $newval){
     $data = $subject->update($newval);
     return $data;
    }

    public function deleteSubject($id){
     $data = Subjects::find($id);
     $data->delete();
     return $data;
    }

}