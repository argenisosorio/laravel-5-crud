@extends('base.base')

@section('title', 'Registrar producto')

@section('content')

  <h1>Registrar producto</h1>

  <br>

  @include('layouts.errors')

  {!! Form::open([ 'route' => 'products.store', 'method' => 'POST']) !!}
    <div class="form-group">
      {!! Form::label('name', 'Nombre:') !!}
      {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-outline-success" title="Guardar">
        <i class="fa fa-save fa-lg ollapsed"></i>
      </button>
    </div>
  {!! Form::close() !!}

@endsection