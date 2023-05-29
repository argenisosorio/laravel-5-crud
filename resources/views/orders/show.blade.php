@extends('base.base')

@section('title', 'Información de la orden de compra')

@section('content')

  <h1>Información de la orden de compra</h1>

  <br>

  <p>
    Proveedor: {{ $order->supplier->name }}
  </p>

  <p>
    Producto: {{ $order->product->name }}
  </p>

  <p>
    Marca: {{ $order->brand->name }}
  </p>

  <p>
    Cantidad: {{ $order->quantity }}
  </p>

  <p>
    Precio: {{ $order->price }}
  </p>

  <p>
    Total: {{ $order->quantity * $order->price }}
  </p>

@endsection
