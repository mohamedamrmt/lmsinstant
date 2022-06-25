<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get("/admin", [AdminController::class, "index"]);
Route::get("admin/course", [CourseController::class, "create"]);
Route::post("course/store", [CourseController::class, "store"]);
Route::get("course/index", [CourseController::class, "index"]);
Route::get("lesson/add/{id}", [CourseController::class, "addLesson"]);
Route::post("lesson/store", [CourseController::class, "storeLesson"]);
Route::get('courses',[AdminController::class,'courses']);
Route::get('course/{id}',[AdminController::class,'course']);
