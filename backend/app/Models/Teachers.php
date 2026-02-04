<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
    protected $table = 'teachers';

    protected $fillable = [
        'teacher_name',
        'contact_no'
    ];
}