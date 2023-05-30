<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="icon" href="{{ env('WEB_URL') }}/img/bootstrap-solid.svg">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="{{ env('WEB_URL') }}/bootstrap/css/bootstrap.min.css">
    <!-- Font-awesome CSS -->
  <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  </head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <i class="fa fa-shopping-cart fa-lg ollapsed" style="color: #FFFFFF;"></i>
    &nbsp;&nbsp;&nbsp;
    <a class="navbar-brand" href="/orders">Mi sistema</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Carga inicial
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="/brands">Marcas</a>
            <a class="dropdown-item" href="/suppliers">Proveedores</a>
            <a class="dropdown-item" href="/products">Productos</a>
          </div>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="/orders">Órdenes de compra <span class="sr-only">(current)</span></a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container mt-5">
    <div class="card">
      <div class="card-body">
        @section('content')
        Base content...
      @show
      </div>
    </div>
  </div>
</body>
<!-- jQuery
================================================== -->
<script src="{{ env('WEB_URL') }}/js/jquery/jquery-3.5.1.slim.min.js" type="text/javascript"></script>
<!-- Bootstrap JS
================================================== -->
<script src="{{ env('WEB_URL') }}/bootstrap/js/popper.min.js" type="text/javascript"></script>
<script src="{{ env('WEB_URL') }}/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</html>