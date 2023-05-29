@extends('base.base')

@section('title', 'Información del producto')

@section('content')

  <h1>Información del producto</h1>

  <br>

  <p>
    Nombre: {{ $product->name }}
  </p>

@endsection