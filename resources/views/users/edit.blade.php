<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update user</title>
  </head>
  <body>
    <h1>Update user</h1>
    @if(count($errors))
      <ul>
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    @endif
    <form action="{{ route('users.update', $user->id) }}" method="POST"> @csrf @method('PUT')
      <div>
        <label>Name</label>
        <input type="text" name="name" value="{{ old('name', $user->name) }}">
      </div>
      <div>
        <label>Email</label>
        <input type="email" name="email" value="{{ old('email', $user->email) }}">
      </div>
      <button type="submit" >SAVE</button>
    </form>
  </body>
</html>