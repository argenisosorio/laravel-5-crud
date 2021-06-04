@extends('base.base')

@section('title', 'List of students')

@section('content')

  @include('layouts.messages')

  <h1>List of students</h1>
  <div class="text-right">
    <a href="{{ route('students.create') }}">
      <button type="button" class="btn btn-outline-success" title="NEW">
        <i class="fa fa-plus fa-lg ollapsed"></i>
      </button>
    </a>
  </div>
  <table class="table table-bordered table-hover mt-3">
    <thead>
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">First name</th>
        <th class="text-center">Last name</th>
        <th class="text-center">Identification number</th>
        <th class="text-center">Actions</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($students as $student)
    <tr>
      <td class="text-center">{{ $student->id }}</td>
      <td class="text-center">{{ $student->first_name }}</td>
      <td class="text-center">{{ $student->last_name }}</td>
      <td class="text-center">{{ $student->identification_number }}</td>
      <td>
        <a href="{{ route('students.edit', $student->id) }}">
          <button type="button" class="btn btn-outline-primary" title="EDIT">
            <i class="fa fa-edit fa-lg ollapsed"></i>
          </button>
        </a>
        <a href="{{ route('students.show', $student->id) }}">
          <button type="button" class="btn btn-outline-info" title="DETAIL" title="DETAIL">
            <i class="fa fa-eye fa-lg ollapsed"></i>
          </button>
        </a>
        <form action="{{ route('students.destroy',$student->id) }}" method="POST">@csrf
          @method('DELETE')
          <button type="submit" class="btn btn-outline-danger" title="DELETE" onclick="return confirm('Are you sure you want to delete the record? ');">
            <i class="fa fa-trash fa-lg ollapsed"></i>
          </button>
        </form>
      </td>
    </tr>
    @endforeach
    </tbody>
  </table>

@endsection