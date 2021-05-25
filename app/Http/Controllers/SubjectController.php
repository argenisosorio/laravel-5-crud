<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;


class SubjectController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | LIST
    |--------------------------------------------------------------------------
    */
    public function index()
    {
        $subjects = Subject::get();
        return view('subjects.index')->with('subjects', $subjects);
    }

    /*
    |--------------------------------------------------------------------------
    | CREATE
    |--------------------------------------------------------------------------
    */
    public function create()
    {
        return view('subjects.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $subject = new Subject($request->all());
        $subject->save();
        return redirect()->route('subjects.index')->with('info','Subject was created!');
    }

    /*
    |--------------------------------------------------------------------------
    | UPDATE
    |--------------------------------------------------------------------------
    */
    public function edit($id)
    {
        $subject = Subject::find($id);
        return view('subjects.edit')->with('subject', $subject);
    }

    public function update(Request $request, $id)
    {
        $subject = Subject::find($id);
        $subject->name = $request->input('name');
        $subject->save();
        return redirect()->route('subjects.index')->with('info','Subject data was updated!');
    }

    /*
    |--------------------------------------------------------------------------
    | SHOW
    |--------------------------------------------------------------------------
    */
    public function show($id)
    {
        $subject = Subject::find($id);
        return view('subjects.show', compact('subject'));
    }

    /*
    |--------------------------------------------------------------------------
    | DELETE
    |--------------------------------------------------------------------------
    */
    public function destroy($id)
    {
        $subject = Subject::find($id);
        $subject->delete();
        return redirect()->route('subjects.index')->with('info','Subject data was deleted!');
    }
}