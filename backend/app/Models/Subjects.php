<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subjects extends Model
{
    protected $table = 'subjects';

    protected $fillable = [
        'teacher_name',
        'subject_name'
    ];
}
