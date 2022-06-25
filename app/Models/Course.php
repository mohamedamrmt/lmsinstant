<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = "course";
    use HasFactory;

    public function lesson(){
        return $this->hasMany('App\Models\Lesson','course_id','id');
    }
}
