@extends('layouts.plantillaBlog')


@section('content')
    <div class="row">
        <div class="container">
            <div class="panel-default">
                Resultado de busqueda por {{$busqueda->nombre}}
                <div class="panel-body">
                    @if(count($publicaciones)>0)
                        @foreach($publicaciones as $publicacion)
                            <div class="row">

                                <div class="col-4 p-1">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">{{$publicacion->titulo}}</h4>
                                            <img style="height: 200px; width: 100%; display: block;" src="{{ $publicacion->imagen }}" alt="Card image">
                                            <p class="card-text">{{$publicacion->comentario}}</p>
                                            <p>{{$publicacion->fecha_publicacion}}</p>
                                            <a href="{{route('detalle',$publicacion->id)  }}" class="btn btn-sm btn-primary">Leer Más</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        @endforeach
                        @else
                        <div class="alert alert-danger" role="alert">
                            No hay resultados a tu busqueda.
                        </div>
                    @endif
                </div>

            </div>
        </div>
    </div>

@endsection