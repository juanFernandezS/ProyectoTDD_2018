@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="col-md-8">
            <h1> {{ $publicacion->titulo }} -detalle</h1>
            {{ $publicacion->comentario }}
            <br>
            datos <br>
            @foreach($detalles as $d)
                {{ $d->nombre }} :
                {{ $d->descripcion }}
                <br>

            @endforeach
            <br>
            detalles del usuario

            @foreach($detallesOpcionales as $do)
                {{ $do->name}} <br>
                {{ $do->description}} <br>
            @endforeach



        </div>
    </div>

@endsection