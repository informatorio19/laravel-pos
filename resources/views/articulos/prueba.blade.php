@extends('main')

@section('contenido')
   <H1>Lista de Articulos C</H1>
   @foreach ($articulos as $item)
        {{$item->articulo}}
   @endforeach
@endsection
