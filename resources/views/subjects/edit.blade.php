<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update subject</title>
  </head>
  <body>
    <h1>Update subject</h1>
    @if(count($errors))
      <ul>
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    @endif
    {!! Form::model($subject, ['route' => ['subjects.update', $subject], 'method' => 'PUT']) !!}
      <div class="form-group">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', null) !!}
      </div>

      <div class="form-group">
        {!! Form::submit('SAVE') !!}
      </div>
    {!! Form::close() !!}
  </body>
</html>