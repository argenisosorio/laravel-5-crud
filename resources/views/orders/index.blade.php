@extends('base.base')

@section('title', 'Listado de órdenes de compra')

@section('content')

  @include('layouts.messages')

  <h1>Listado de órdenes de compra</h1>
  <br>
  <div class="text-right">
    <a href="{{ route('orders.create') }}">
      <button type="button" class="btn btn-outline-success" title="NEW">
        <i class="fa fa-plus fa-lg ollapsed"></i>
      </button>
    </a>
  </div>

  @if (count($orders) > 0)
    <table class="table table-bordered table-hover mt-3">
      <thead>
        <tr>
          <th class="text-center">ID</th>
          <th class="text-center">Proveedor</th>
          <th class="text-center">Producto</th>
          <th class="text-center">Marca</th>
          <th class="text-center">Cantidad</th>
          <th class="text-center">Precio</th>
          <th class="text-center">Total</th>
          <th class="text-center">Acciones</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($orders as $order)
      <tr>
        <td class="text-center">{{ $order->id }}</td>
        <td class="text-center">{{ $order->supplier->name }}</td>
        <td class="text-center">{{ $order->product->name }}</td>
        <td class="text-center">{{ $order->brand->name }}</td>
        <td class="text-center">{{ $order->quantity }}</td>
        <td class="text-center">{{ $order->price }}</td>
        <td class="text-center">{{ $order->quantity * $order->price }}</td>
        <td class="text-center">
          <div class="d-flex justify-content-center">
            <a href="{{ route('orders.edit', $order->id) }}" class="mr-2">
              <button type="button" class="btn btn-outline-primary" title="Actualizar">
                <i class="fa fa-edit fa-lg ollapsed"></i>
              </button>
            </a>
            <a href="{{ route('orders.show', $order->id) }}" class="mr-2">
              <button type="button" class="btn btn-outline-info" title="Ver detalles">
                <i class="fa fa-eye fa-lg ollapsed"></i>
              </button>
            </a>
            <form action="{{ route('orders.destroy',$order->id) }}" method="POST">@csrf
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
  @else
    <p>No hay órdenes registradas.</p>
  @endif

@endsection
