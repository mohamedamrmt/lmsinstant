<?php

namespace App\Http\Controllers;

use App\Models\Course;

class AdminController extends Controller
{
    public function index()
    {
        return view("admin.index");
    }

//all courses
    public function courses()
    {
        $courses =  Course::all();
        return view('admin.courses',compact('courses'));
    }

//course by id and course lessons
    public function course($id)
    {
        $course =  Course::with('lesson')->find($id);
        return view('admin.course',compact('course'));
    }


}
