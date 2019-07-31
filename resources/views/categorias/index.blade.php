@extends('main')


@section('contenido')
    <div class="card">
        <div class="card-title">
            Lista de Categorias
        </div>
        <div class="card-text">
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Categoria</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($categorias as $categoria)
                    <tr>
                        <td> {{$categoria->id}}</td>
                        <td> {{$categoria->categoria}}</td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection


