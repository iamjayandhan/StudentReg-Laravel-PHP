<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

//define the browser method also!
//get - to view or get data
//post - data submit

//1. Method-1
//route code and return in same file
// Route::get('/', function () {
//     //returns resources/views/welcome.blade.php
//     // return view('welcome');
//     return view('student-reg');
// });


//2. Method-2
//route here and return code in controller file.
Route::get('/',[StudentController::class,'viewForm'])->name('home');

Route::post('/add-student',[StudentController::class,'addStudent']);

//1. Method-1
Route::get('/temp',function(){
    return view('temp');
});