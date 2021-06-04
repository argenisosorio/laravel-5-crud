@extends('base.base')

@section('title', 'Create student')

@section('content')

  <h1>Create student</h1>

  @include('layouts.errors')

  {!! Form::open([ 'route' => 'students.store', 'method' => 'POST']) !!}
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
      <button type="submit" class="btn btn-outline-success" title="SAVE">
        <i class="fa fa-save fa-lg ollapsed"></i>
      </button>
    </div>
  {!! Form::close() !!}

@endsection