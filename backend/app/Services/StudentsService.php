<?php

namespace App\Services;

use App\Models\Students;

class StudentsService
{
    public function saveStudent($student)
    {
        return Students::create($student);
    }
}