<?php

namespace App\Http\Controllers;

use App\Http\Requests\CourseStore;
use App\Models\Category;
use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){
        $courses =  Course::all();
        return view('course.index',compact('courses'));
    }
    public function create(){
        $categories =  Category::all();
        return view('course.create',compact('categories'));
    }

    public function store(CourseStore $request){

        $file = $request->file('cover');
        $name = $request->course_name . '.' . $file->getClientOriginalExtension();

        $request->file('cover')->move("upload", $name);


        $course = new Course();
        $course->course_name = $request->course_name;
        $course->description = $request->description;
        $course->inst_name =  $request->inst_name;
        $course->duration = $request->duration;
        $course->price = $request->price;
        $course->cover = $name;
        $course->category_id = $request->category_id;
        $course->save();

        return redirect("course/index");
    }

    public function addLesson($course_id){

        return view('lesson.create',compact('course_id'));
    }

    public function storeLesson(Request  $request){
        $lesson = new Lesson();
        $lesson->title = $request->title;
        $lesson->description = $request->description;
        $lesson->course_id = $request->course_id;
        $video = substr($request->video, 0, strpos($request->video, "&list"));
        $video = explode('=',$video);
        $lesson->video = $video[1];
        $lesson->save();
        return redirect("course/index");
    }

}
