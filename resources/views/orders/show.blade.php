@extends('base.base')

@section('title', 'Información de la orden de compra')

@section('content')

  <h1>Información de la orden de compra</h1>

  <br>

  <p>Fecha de creación:
    <script>
      var createdDate = new Date("{{ $order->created_at }}");
      var formattedDate = createdDate.toLocaleDateString('es-ES', { day: '2-digit', month: '2-digit', year: 'numeric' });
      document.write(formattedDate);
    </script>
  </p>

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
