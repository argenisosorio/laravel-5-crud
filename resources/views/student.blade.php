<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Students</title>
  </head>
  <body>
    <p>Hello students!</p>
    <table border="1px" cellspacing="0px" style="width:100%;">
      <thead>
        <tr>
          <th class="text-center">ID</th>
          <th class="text-center">First name</th>
          <th class="text-center">Last name</th>
          <th class="text-center">Identification number</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($students as $student)
      <tr>
        <td class="text-center">{{ $student->id }}</td>
        <td class="text-center">{{ $student->first_name }}</td>
        <td class="text-center">{{ $student->last_name }}</td>
        <td class="text-center">{{ $student->identification_number }}</td>
      </tr>
      @endforeach
      </tbody>
    </table>
  </body>
</html>