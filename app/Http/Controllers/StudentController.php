<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function list() {
        $students = Student::get();
        return view('students.list')->with('students', $students);
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $category = new Student($request->all());
        $student->save();
        return redirect()->route('list');
    }
}