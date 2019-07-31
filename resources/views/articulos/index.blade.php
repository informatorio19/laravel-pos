@extends('main')

@section('contenido')

<div class="card">
    <div class="card-header">
        <h1>Listado de Articulos</h1>
    </div>

    <div class="card-body">
        <div class="card-title">
        <a href="{{route('articulos.create')}}" class="btn btn-primary">Nuevo Articulo</a>
        </div>

        <div class="card-text">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Art</th>
                        <th>Precio</th>
                        <th>Stock</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($articulos as $articulo)
                        <tr>
                            <td>{{$articulo->id}}</td>
                            <td>{{$articulo->articulo}}</td>
                            <td>{{$articulo->precio}}</td>
                            <td>{{$articulo->stock}}</td>
                        </tr>
                    @endforeach

                </tbody>
            </table>

        </div>
    </div>
</div>


@endsection
