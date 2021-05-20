<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function list() {
        $students = Student::get();
        return view('student')->with('students', $students);
    }
}