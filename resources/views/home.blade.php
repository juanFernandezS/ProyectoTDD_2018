@extends('layouts.plantillaBlog')

@section('titulo', 'Inicio')

@section('content')

    @include('blog.blog')
   <!-- @include('includes.buttonFloat')-->

@endsection

@section('scripts')

    <script>
        $('.botonPrincipal').hover(function(){
            $('.btn-float').addClass('animacionVer');
        })
        $('.contenedor').mouseleave(function(){
            $('.btn-float').removeClass('animacionVer');
        })
    </script>

@endsection