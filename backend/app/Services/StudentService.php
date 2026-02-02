<?php

namespace App\Services;

use App\Models\Students;

class StudentsService
{
    public function SaveStudent($request)
    {
        return Students::create([
            'student_name' => $request->student_name,
            'contact_no'   => $request->contact_no,
        ]);
    }
}