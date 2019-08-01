@extends('main')

@section('contenido')

    <div class="card col-6">

        <div class="card-body">
            <div class="card-text">
            <form action="{{route('categorias.store')}}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="">Categoria</label>
                        <input type="text" class="form-control" name="categoria">
                    </div>



                    <button type="submit" class="btn btn-info">Guardar</button>


                </form>
            </div>
        </div>

    </div>

@endsection
