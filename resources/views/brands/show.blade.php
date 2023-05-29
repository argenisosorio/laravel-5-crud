@extends('base.base')

@section('title', 'Información de la marca')

@section('content')

  <h1>Información de la marca</h1>

  <br>

  <p>
    Nombre: {{ $brand->name }}
  </p>

@endsection