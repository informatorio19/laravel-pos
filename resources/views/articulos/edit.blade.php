@extends('main')

@section('contenido')

    <div class="card col-6">

        <div class="card-body">
            <div class="card-text">
            <form action="{{route('articulos.update',$articulo->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="">Articulo</label>
                        <input
                            type="text"
                            class="form-control"
                            name="articulo"
                            value="{{$articulo->articulo}}"
                            >
                    </div>

                    <div class="form-group">
                        <label for="">Stock</label>
                        <input type="text" class="form-control" name="stock" value="{{$articulo->stock}}">
                    </div>

                    <div class="form-group">
                        <label for="">Precio</label>
                        <input type="text" class="form-control" name="precio" value="{{$articulo->precio}}">
                    </div>

                    <div class="form-group">
                            <label for="">Categoria</label>
                            <select name="categoria_id" id="" class="form-control">

                                @foreach($categorias as $categoria)
                                   @if ($categoria->id == $articulo->categoria_id)
                                    <option value="{{$categoria->id}}" selected>{{$categoria->categoria}}</option>

                                   @else
                                    <option value="{{$categoria->id}}">{{$categoria->categoria}}</option>

                                   @endif

                                @endforeach

                            </select>
                        </div>

                    <button type="submit" class="btn btn-info">Actualizar</button>


                </form>
            </div>
        </div>

    </div>

@endsection
