<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create</title>
  </head>
  <body>
    <p>Create student</p>
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
        {!! Form::submit('Save') !!}
      </div>
    {!! Form::close() !!}
  </body>
</html>