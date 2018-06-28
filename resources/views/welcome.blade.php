@extends('layouts.app')

@section('titulo', 'Bienvenido')

@section('content')
    <div class="carousel slide">

        <!-- Contenedor de los Slide -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="" class="img-responsive" alt="" >
            </div>
                <div class="item">
                    <img src="" alt="" class="img-responsive">
                </div>
        </div>

        <!-- Controloles -->
        <a class="left carousel-control" href="#mi-carousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="right carousel-control" href="#mi-carousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Siguiente hidden-xs hidden-sd</span>
        </a>
    </div>
@endsection
