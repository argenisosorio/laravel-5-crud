<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Show user</title>
  </head>
  <body>
    <h1>Show user</h1>
    <p>
      Name: {{ $user->name }}
    </p>
    <p>
      Last name: {{ $user->email }}
    </p>
  </body>
</html>