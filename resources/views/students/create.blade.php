<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Students</title>
  </head>
  <body>
    <p>Create student</p>
    <form method="POST" action="students.store"> @csrf
      <div class="form-group">
      first_name
      </div>
      <div class="form-group">
        last_name
      </div>
      <div class="form-group">
        identification_number
      </div>
      <div class="form-group">
        <input type="post" name="">
      </div>
    </form>
  </body>
</html>