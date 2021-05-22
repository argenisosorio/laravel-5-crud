<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List of users</title>
  </head>
  <body>
    @if(Session::has('info'))
      Message: {{ Session::get('info') }}
    @endif
    <h1>List of users</h1>
    <a href="{{ route('users.create') }}">
      <button>NEW</button>
    </a>
    <br />
    <br />
    <table border="1px" cellspacing="0px" style="width:100%;">
      <thead>
        <tr>
          <th class="text-center">ID</th>
          <th class="text-center">Name</th>
          <th class="text-center">Email</th>
          <th class="text-center">Actions</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($users as $user)
      <tr>
        <td class="text-center">{{ $user->id }}</td>
        <td class="text-center">{{ $user->name }}</td>
        <td class="text-center">{{ $user->email }}</td>
        <td>
          <a href="{{ route('users.edit', $user->id) }}">
            <button>UPDATE</button>
          </a>
        </td>
      </tr>
      @endforeach
      </tbody>
    </table>
  </body>
</html>