@extends('layout')

@section('content')

<div class="col-sm-8">
  <h2>
    Producto {{ $product->name }}
    <br><br>
    <div class="col-md-6">

    </div>
    <div class="col-md-3">
      <a href="{{ route('products.index')}}" class="btn btn-default pull-right">
        Listado de productos
      </a>
    </div>
    <div class="col-md-3">
      <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary pull-right">
        Editar producto
      </a>

    </div>
  </h2>
  <h3>Descripción corta</h3>
  <p>
    {{$product->short}}
  </p>
  <h3>Descripción</h3>
  <p>
    {{$product->body}}
  </p>
</div>
<div class="col-sm-4">
  col-sm-4
</div>

@endsection
