@extends('base.base')

@section('title', 'Actualizar orden de compra')

@section('content')

  <h1>Actualizar orden de compra</h1>

  <br>

  @include('layouts.errors')

  {!! Form::model($order, ['route' => ['orders.update', $order], 'method' => 'PUT']) !!}

    <div class="form-group">
      {!! Form::label('supplier_id', 'Proveedor:') !!}
      {!! Form::select('supplier_id', $suppliers, null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('product_id', 'Producto:') !!}
      {!! Form::select('product_id', $products, null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('brand_id', 'Marca') !!}
      {!! Form::select('brand_id', $brands, null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('quantity', 'Cantidad:') !!}
      {!! Form::text('quantity', null, ['class' => 'form-control', 'oninput' => 'calculateTotal()']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('price', 'Precio:') !!}
      {!! Form::text('price', null, ['class' => 'form-control', 'oninput' => 'calculateTotal()']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('total', 'Total:') !!}
      {!! Form::text('total', $order->quantity * $order->price, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-outline-success" title="Actualizar">
        <i class="fa fa-save fa-lg ollapsed"></i>
      </button>
    </div>
  {!! Form::close() !!}

  <script>
    function calculateTotal() {
      var quantity = parseFloat(document.getElementById('quantity').value);
      var price = parseFloat(document.getElementById('price').value);
      var total = quantity * price;
      document.getElementById('total').value = total.toFixed(2);
    }
  </script>

@endsection
