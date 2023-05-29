@extends('base.base')

@section('title', 'Información del proveedor')

@section('content')

  <h1>Información del proveedor</h1>

  <br>

  <p>
    Nombre: {{ $supplier->name }}
  </p>

@endsection