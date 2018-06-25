@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Productos @can('products.create') <a href="{{route('products.create')}}" class="btn btn-sm btn-primary ">Crear</a> @endcan</div>

                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>ALMACEN</th>
                                <th>DIRECCION</th>
                                <th>RESPONSABLE</th>
                                <th>TELEFONO</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($almacens as $almacen)
                            <tr>
                                <td>{{ $almacen->id}}</td>
                                <td>{{ $almacen->name}}</td>
                                <td>{{ $almacen->direccion}}</td>
                                <td>{{ $almacen->responsable}}</td>
                                <td>{{ $almacen->telefono}}</td>
                                <td>
                                    @can('almacens.show')
                                        <a href="{{ route('almacens.show',$almacen->id)}}" class="btn btn-sm btn-default">VER</a>
                                    @endcan
                                </td>
                                <td>
                                        @can('almacens.edit')
                                            <a href="{{ route('almacens.edit',$almacen->id)}}" class="btn btn-sm btn-default">EDITAR</a>
                                        @endcan
                                </td>
                                <td>
                                        @can('almacens.destroy')
                                            {!! Form::open(['route'=>['almacens.destroy',$almacen->id], 'method'=>'DELETE'])!!}
                                                <button class="btn btn-sm btn-danger">ELIMINAR</button>
                                            {!! Form::close()!!}
                                        @endcan
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $almacens->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
