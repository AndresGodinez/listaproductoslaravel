@extends('layout')

@section('content')

<div class="col-sm-8">
  <h2>
    Listado de productos

    <a href="{{ route('products.create') }}" class="btn btn-info pull-right">Nuevo</a>
  </h2>
  @include('products.fragments.info')
  
  <table class="table table-hover table-striped table-responsive">
    <thead>
        <th width="20px">Id</th>
        <th>Nombre</th>
        <th colspan="3">&nbsp;</th>
    </thead>
    <tbody>
      @foreach($products as $product)
      <tr>
        <td>{{ $product->id }}</td>
        <td><strong>{{ $product->name }}</strong> {{$product->short}}</td>
        <td><a href="{{ route('products.show', $product->id) }}" class="btn btn-default">Detalles</a></td>
        <td>
          <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Editar</a>
        </td>
        <td>
          <form  action="{{route('products.destroy', $product->id)}}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit" class="btn btn-danger">Eliminar</button>


          </form>
        </td>
      </tr>
      @endforeach
    </tbody>

  </table>
  {!! $products->render() !!}

</div>
<div class="col-sm-4">
  @include('products.fragments.aside')
</div>

@endsection
