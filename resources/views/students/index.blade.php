@extends('base.base')

@section('title', 'List of students')

@section('content')

  @include('layouts.messages')

  <h1>List of students</h1>
  <a href="{{ route('students.create') }}">
    <button>NEW</button>
  </a>
  <br />
  <br />
  <table border="1px" cellspacing="0px" style="width:100%;">
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
          <button>UPDATE</button>
        </a>
        <a href="{{ route('students.show', $student->id) }}">
          <button>SHOW</button>
        </a>
        <form action="{{ route('students.destroy',$student->id) }}" method="POST">@csrf
            @method('DELETE')
            <button type="submit">DELETE</button>
        </form>
      </td>
    </tr>
    @endforeach
    </tbody>
  </table>

@endsection