@extends('base.base')

@section('title', 'Show student')

@section('content')

  <h1>Show student</h1>
  <p>
    First name: {{ $student->first_name }}
  </p>
  <p>
    Last name: {{ $student->last_name }}
  </p>
  <p>
    Identification number: {{ $student->identification_number }}
  </p>

@endsection