<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Show subject</title>
  </head>
  <body>
    <h1>Show subject</h1>
    <p>
      Name: {{ $subject->name }}
    </p>
  </body>
</html>