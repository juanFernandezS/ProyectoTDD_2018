@extends('layouts.app')

@section('titulo', 'Mis publicaciones')

@section('content')

    <h4>Mis Publicaciones</h4>

    @foreach($publicaciones as $publicacion)
        <div class="jumbotron">
            <h4 class="display-3">{{ $publicacion-> }}</h4>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <p class="lead">
                <a class="btn btn-primary btn-sm" href="#" role="button">Mas detalles</a>
            </p>
        </div>
        <hr class="my-4">
    @endforeach

@endsection