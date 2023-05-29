@extends('base.base')

@section('title', 'Registrar orden de compra')

@section('content')

  <h1>Registrar orden de compra</h1>

  <br>

  @include('layouts.errors')

  {!! Form::open(['route' => 'orders.store', 'method' => 'POST']) !!}

    <div class="form-group">
      {!! Form::label('supplier_id', 'Proveedor:') !!}
      {!! Form::select('supplier_id', $suppliers, null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('product_id', 'Producto:') !!}
      {!! Form::select('product_id', $products, null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('brand_id', 'Marca:') !!}
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
      {!! Form::text('total', null, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-outline-success" title="Guardar">
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
