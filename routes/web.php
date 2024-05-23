<?php

use App\Http\Controllers\ModuleController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;


// Route::get('/',[StudentController::class, 'create']); //   http://localhost/ficha/public/
// Route::post('/',[StudentController::class, 'store'])->name('save');

Route::resource('/students', StudentController::class);  //   http://localhost/ficha/public/students

Route::resource('teachers', TeacherController::class);
Route::resource('modules', ModuleController::class);

