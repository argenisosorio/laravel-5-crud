<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create subject</title>
  </head>
  <body>
    <h1>Create subject</h1>
    @if(count($errors))
      <ul>
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    @endif
    {!! Form::open([ 'route' => 'subjects.store', 'method' => 'POST']) !!}
      <div class="form-group">
        {!! Form::label('name', 'First name') !!}
        {!! Form::text('name', null) !!}
      </div>

      <div class="form-group">
        {!! Form::submit('SAVE') !!}
      </div>
    {!! Form::close() !!}
  </body>
</html>