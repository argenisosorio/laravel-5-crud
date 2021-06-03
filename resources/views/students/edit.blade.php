@extends('base.base')

@section('title', 'Update student')

@section('content')

  <h1>Update student</h1>

  @include('layouts.errors')

  {!! Form::model($student, ['route' => ['students.update', $student], 'method' => 'PUT']) !!}
    <div class="form-group">
      {!! Form::label('first_name', 'First name') !!}
      {!! Form::text('first_name', null) !!}
    </div>

    <div class="form-group">
      {!! Form::label('last_name', 'Last name') !!}
      {!! Form::text('last_name', null) !!}
    </div>

    <div class="form-group">
      {!! Form::label('identification_number', 'Identification number') !!}
      {!! Form::text('identification_number', null) !!}
    </div>

    <div class="form-group">
      {!! Form::submit('SAVE') !!}
    </div>
  {!! Form::close() !!}

@endsection