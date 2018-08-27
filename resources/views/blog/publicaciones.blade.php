@extends('layouts.plantillaBlog')


@section('content')
<div class="row">
    <div class="container">
        <div class="panel-default">
            <div class="panel-heading">
                <h4>Publicaciones</h4>

                <p>{{ $publicaciones->total()}} publicaciones | pagina {{ $publicaciones->currentPage() }}
                    de {{$publicaciones->lastPage()}}
                </p>

            </div>
            <div class="panel-body">
                <div class="row">

                    @if(count($publicaciones))
                        @foreach($publicaciones as $publicacion)
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
                        @endforeach

                        @else
                        <div class="alert alert-danger" role="alert">
                            No hay resultados a tu busqueda.
                        </div>
                    @endif
                </div>

            </div>
            {{$publicaciones->render()}}
        </div>
    </div>
</div>

@endsection