@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                Productos
                <a href="{{ route('products.create') }}" class="btn btn-sm btn-primary float-right">Crear</a>
                </div>

                <div class="card-body">

                    <table class="table table-hover ">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Precio</th>
                                <th colspan="3">&nbsp;</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>
                                        <a href="{{ route('products.show',$product->id) }}"
                                        class="btn btn-sm btn-secondary">
                                            Ver
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('products.edit',$product->id) }}"
                                        class="btn btn-sm btn-secondary">
                                            Editar
                                        </a>
                                    </td>
                                    <td>
                                        {!! Form::open(['route' => ['products.destroy', $product->id], 'method' => 'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger">Eliminar</button>
                                        {!! Form::close() !!}
                                    </td>   
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $products->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection