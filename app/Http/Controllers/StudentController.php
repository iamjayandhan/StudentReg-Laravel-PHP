<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function viewForm(){
            //returns resources/views/welcome.blade.php
            // return view('welcome');

            // return view('student-reg');


            //we get data from DB and display it
            $students = Student::all();
            return view('student-reg',compact('students'));
    }

    public function addStudent(Request $request){
        //just display all from the post req
        //dump and die
        // dd($request->all());

        //Eloquent is used to comm with DB
        //we create a model here.
        //model for table
        //dont forget to import model file!

        Student::create($request->all());
        //returns a message after action
        //like a session , flash message, short life.
        return redirect()->route('home')->with('message','Student created successfully!');
    }
}
