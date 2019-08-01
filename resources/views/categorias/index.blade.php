@extends('main')

@section('contenido')

<div class="card">
    <div class="card-header">
        <h1>Listado de Categorias</h1>
    </div>

    <div class="card-body">
        <div class="card-title">
        <a href="{{route('categorias.create')}}" class="btn btn-primary">Nueva Categoria</a>
        </div>

        <div class="card-text">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Categoria</th>

                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($categorias as $categoria)
                        <tr>
                            <td>{{$categoria->id}}</td>
                            <td>{{$categoria->categoria}}</td>

                            <td>
                                <div class="button-group">
                                <form
                                    action="{{route('categorias.destroy',$categoria->id)}}"
                                    method="POST"
                                    >
                                    @csrf
                                    @method('DELETE')
                                        <button
                                            class="btn btn-danger"
                                            type="submit"
                                            >
                                            Eliminar</button>
                                    </form>

                                    <a href="{{route('categorias.edit',$categoria->id)}}" class="btn btn-primary">Editar</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>

        </div>
    </div>
</div>


@endsection
