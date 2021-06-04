<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="icon" href="{{ asset ('img/bootstrap-solid.svg') }}">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset ('bootstrap/css/bootstrap.min.css') }}">
  </head>
<body>
  <div class="container mt-5">
    @section('content')
      Base content...
    @show
  </div>
</body>
<!-- jQuery
================================================== -->
<script src="{{ asset ('js/jquery/jquery-3.5.1.slim.min.js') }}" type="text/javascript"></script>
<!-- Bootstrap JS
================================================== -->
<script src="{{ asset ('bootstrap/js/popper.min.js') }}" type="text/javascript"></script>
<script src="{{ asset ('bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
</html>