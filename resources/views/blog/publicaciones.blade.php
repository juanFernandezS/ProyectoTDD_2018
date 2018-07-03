@extends('layouts.app')
@section('barraLateral')
    @include('includes.navCategorias')
@endsection

@section('content')

    <div class="row">
    <div class="panel-default">
        <div class="panel-heading">
            <h4>Publicaciones</h4>
            <p>{{ $publicaciones->total()}} publicaciones | pagina {{ $publicaciones->currentPage() }}
                 de {{$publicaciones->lastPage()}}
            </p>

        </div>
        <div class="panel-body">
            <div class="row">
                <div class="card-deck">
                    @foreach($publicaciones as $publicacion)
                        <div class="card">
                            <img class="card-img-top" src="http://lorempixel.com/720/420" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{$publicacion->titulo}}</h5>
                                <p class="card-text">{{$publicacion->comentario}}</p>
                                <a href="{{ route('detalle',$publicacion->id) }}" class="btn btn-sm btn-outline-primary"> Leer Más</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="row">

                </div>
            </div>



            {{$publicaciones->render()}}
        </div>
    </div>
</div>

@endsection