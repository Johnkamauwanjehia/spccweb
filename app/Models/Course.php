<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'course';
    protected $primaryKey = 'course_code';
    protected $casts = ['course_code' => 'string'];
    public $timestamps = false;
    public $incrementing = false;
}
