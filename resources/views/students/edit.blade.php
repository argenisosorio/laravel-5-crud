<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update student</title>
  </head>
  <body>
    <h1>Update student</h1>
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
  </body>
</html>