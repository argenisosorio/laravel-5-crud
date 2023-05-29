@extends('base.base')

@section('title', 'Actualizar marca')

@section('content')

  <h1>Actualizar marca</h1>

  <br>

  @include('layouts.errors')

  {!! Form::model($brand, ['route' => ['brands.update', $brand], 'method' => 'PUT']) !!}
    <div class="form-group">
      {!! Form::label('name', 'Nombre:') !!}
      {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-outline-success" title="Actualizar">
        <i class="fa fa-save fa-lg ollapsed"></i>
      </button>
    </div>
  {!! Form::close() !!}

@endsection