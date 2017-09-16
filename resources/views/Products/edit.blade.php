@extends('layout')

@section('content')

<div class="col-sm-8">
  <h2>
  Editar Producto
    <br><br>
    <div class="col-md-6">

    </div>
    <div class="col-md-3">

    </div>
    <div class="col-md-3">
      <a href="{{ route('products.index')}}" class="btn btn-default pull-right">
        Listado de productos
      </a>
    </div>
  </h2>
<div class="row">
  @include('products.fragments.errors')

  {!! Form::model($product, ['route'=>['products.update', $product->id], 'method'=>'PUT'])!!}
  @include('products.fragments.form')
  {!!Form::close()!!}
</div>
</div>
<div class="col-sm-4">
  @include('products.fragments.ayuda_actualizar')
</div>

@endsection
