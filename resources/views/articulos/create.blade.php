@extends('main')

@section('contenido')

    <div class="card col-6">

        <div class="card-body">
            <div class="card-text">
            <form action="{{route('articulos.store')}}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="">Articulo</label>
                        <input type="text" class="form-control" name="articulo">
                    </div>

                    <div class="form-group">
                        <label for="">Stock</label>
                        <input type="text" class="form-control" name="stock">
                    </div>

                    <div class="form-group">
                        <label for="">Precio</label>
                        <input type="text" class="form-control" name="precio">
                    </div>

                    <div class="form-group">
                        <label for="">Categoria</label>
                        <select name="categoria_id" id="" class="form-control">

                            @foreach($categorias as $categoria)
                            <option value="{{$categoria->id}}">{{$categoria->categoria}}</option>
                            @endforeach

                        </select>
                    </div>


                    <button type="submit" class="btn btn-info">Guardar</button>


                </form>
            </div>
        </div>

    </div>

@endsection
