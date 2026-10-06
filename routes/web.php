<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\Computercontroller;
use App\Http\Controllers\TrainingCentercontroller;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ApprenticeController;
use App\Http\Controllers\CourseController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
  //  return view('welcome');
//});

Route::get('areas', [AreaController::class, 'index'])->name('areas');
Route::get('areas/{area}', [AreaController::class, 'show'])->name('area.show');


Route::get('computers', [ComputerController::class, 'index'])->name('computers');
Route::get('computers/{computer}', [ComputerController::class, 'show'])->name('computer.show');



Route::get('trainingcenters', [TrainingCenterController::class, 'index'])->name('trainingcenters.index');
Route::get('trainingcenters/{trainingcenter}', [TrainingCenterController::class, 'show'])->name('trainingcenters.show');


Route::get('teachers', [TeacherController::class, 'index'])->name('teachers');
Route::get('teachers/{teacher}', [TeacherController::class, 'show'])->name('teacher.show');

Route::get('apprentices', [ApprenticeController::class, 'index'])->name('apprentices');
Route::get('apprentices/{apprentice}', [ApprenticeController::class, 'show'])->name('apprentice.show');


Route::get('courses', [CourseController::class, 'index'])->name('courses');
Route::get('courses/{course}', [CourseController::class, 'show'])->name('course.show');