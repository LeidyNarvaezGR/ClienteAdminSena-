<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreasController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\TrainingCentersController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ApprenticesController;
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

Route::get('areas', [AreasController::class, 'index'])->name('areas.index');
Route::get('area/create',[AreasController::class,'create'])->name('area.create');
Route::post('area', [AreasController::class, 'store'])->name('area.store');
Route::get('area/{area}', [AreasController::class, 'show'])->name('area.show');
Route::get('area/{area}/editar',[AreasController::class,'edit'])->name('area.edit');
Route::put('area/{area}', [AreasController::class, 'update'])->name('area.update');
Route::delete('area/{area}', [AreasController::class, 'destroy'])->name('area.destroy');


Route::get('computers', [ComputerController::class, 'index'])->name('computers.index');
Route::get('computer/create', [ComputerController::class, 'create'])->name('computer.create');
Route::post('computer', [ComputerController::class, 'store'])->name('computer.store');
Route::get('computer/{computer}', [ComputerController::class, 'show'])->name('computer.show');
Route::get('computer/{computer}/editar', [ComputerController::class, 'edit'])->name('computer.edit');
Route::put('computer/{computer}', [ComputerController::class, 'update'])->name('computer.update');
Route::delete('computer/{computer}', [ComputerController::class, 'destroy'])->name('computer.destroy');



Route::get('trainingcenters', [TrainingCentersController::class, 'index'])->name('trainingcenters.index');
Route::get('trainingcenter/create',[TrainingCentersController::class,'create'])->name('trainingcenter.create');
Route::post('trainingcenter', [TrainingCentersController::class, 'store'])->name('trainingcenter.store');
Route::get('trainingcenter/{trainingcenter}', [TrainingCentersController::class, 'show'])->name('trainingcenter.show');
Route::get('trainingcenter/{trainingcenter}/editar',[TrainingCentersController::class,'edit'])->name('trainingcenter.edit');
Route::put('trainingcenter/{trainingcenter}', [TrainingCentersController::class, 'update'])->name('trainingcenter.update');
Route::delete('trainingcenter/{trainingcenter}', [TrainingCentersController::class, 'destroy'])->name('trainingcenter.destroy');
