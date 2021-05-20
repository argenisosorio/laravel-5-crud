<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
//use App\Http\Requests\StudentRequest;

class StudentController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | LIST
    |--------------------------------------------------------------------------
    */
    public function index()
    {
        $students = Student::get();
        return view('students.index')->with('students', $students);
    }

    /*
    |--------------------------------------------------------------------------
    | CREATE
    |--------------------------------------------------------------------------
    */
    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $student = new Student($request->all());
        $student->save();
        return redirect()->route('students.index')->with('info','Student was created!');
    }

    /*
    |--------------------------------------------------------------------------
    | UPDATE
    |--------------------------------------------------------------------------
    */
    public function edit($id)
    {
        $student = Student::find($id);
        return view('students.edit')->with('student',$student);
    }

    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->first_name = $request->input('first_name');
        $student->last_name = $request->input('last_name');
        $student->identification_number = $request->input('identification_number');
        $student->save();
        return redirect()->route('students.index')->with('info','Student data was updated!');
    }

    /*
    |--------------------------------------------------------------------------
    | SHOW
    |--------------------------------------------------------------------------
    */
    public function show($id)
    {
        $student = Student::find($id);
        return view('students.show', compact('student'));
    }

    /*
    |--------------------------------------------------------------------------
    | DELETE
    |--------------------------------------------------------------------------
    */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect()->route('students.index')->with('info','Student data was deleted!');
    }
}