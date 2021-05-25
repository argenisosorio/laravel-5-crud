<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Subject;


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
        $subjects = Subject::orderBy('name', 'ASC')->pluck('name', 'id');
        return view('students.create')->with('subjects', $subjects);
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'identification_number' => 'required',
        ]);

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
        $subjects = Subject::orderBy('name', 'ASC')->pluck('name', 'id');
        return view('students.edit')->with('student', $student)->with('subjects', $subjects);
    }

    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->first_name = $request->input('first_name');
        $student->last_name = $request->input('last_name');
        $student->identification_number = $request->input('identification_number');
        $student->subject_id = $request->input('subject_id');
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