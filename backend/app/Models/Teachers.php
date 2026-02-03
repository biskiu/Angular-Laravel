<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
    protected $table = 'subjects';

    protected $fillable = [
        'teacher_name',
        'contact_no'
    ];
}