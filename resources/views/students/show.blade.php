<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Show student</title>
  </head>
  <body>
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
    <p>
      Subject: {{ $student->subject->name }}
    </p>
  </body>
</html>