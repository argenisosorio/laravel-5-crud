@extends('base.base')

@section('title', 'Listado de productos')

@section('content')

  @include('layouts.messages')

  <h1>Listado de productos</h1>
  <br>
  <div class="text-right">
    <a href="{{ route('products.create') }}">
      <button type="button" class="btn btn-outline-success" title="Nuevo">
        <i class="fa fa-plus fa-lg ollapsed"></i>
      </button>
    </a>
  </div>
  <table class="table table-bordered table-hover mt-3">
    <thead>
      <tr>
        <th class="text-center">N</th>
        <th class="text-center">Nombre</th>
        <th class="text-center">Acciones</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($products as $product)
    <tr>
      <td class="text-center">{{ $product->id }}</td>
      <td class="text-center">{{ $product->name }}</td>
      <td class="text-center">
        <div class="d-flex justify-content-center">
          <a href="{{ route('products.edit', $product->id) }}" class="mr-2">
            <button type="button" class="btn btn-outline-primary" title="Actualizar">
              <i class="fa fa-edit fa-lg ollapsed"></i>
            </button>
          </a>
          <a href="{{ route('products.show', $product->id) }}" class="mr-2">
            <button type="button" class="btn btn-outline-info" title="Ver detalles">
              <i class="fa fa-eye fa-lg ollapsed"></i>
            </button>
          </a>
          <form action="{{ route('products.destroy', $product->id) }}" method="POST">@csrf
            @method('DELETE')
            <button type="submit" class="btn btn-outline-danger" title="Eliminar" onclick="return confirm('¿Estás seguro de que quieres eliminar el registro?');">
              <i class="fa fa-trash fa-lg ollapsed"></i>
            </button>
          </form>
        </div>
      </td>
    </tr>
    @endforeach
    </tbody>
  </table>

@endsection
