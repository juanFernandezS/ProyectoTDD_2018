@extends('layouts.app')

@section('content')

        <h4>Lista de tus intereses</h4>
        <div class="container">

            publicaciones solicitadas <br>
            @if(count($intereses)>0)
               <ul>
                   @foreach($intereses as $interes)
                       <div class="row">
                           {{--id: <p >{{ $interes->id_publicacion }}</p>--}}
                           <li>
                               <a  href="{{ route('mensajes',[Auth::user(),$interes->id_publicacion]) }}">{{ $interes->publicacion->titulo }} </a>
                               <p> publicado por <strong>{{ $interes->publicacion->user->nombre }} {{ $interes->publicacion->user->apellidos }}</strong></p>
                           </li>
                       </div>
                   @endforeach
               </ul>
            @else
                <div class="alert alert-danger col-6" role="alert">
                    No estas interesado en ningna publicación !
                </div>
            @endif
        </div>


    {{--solicitudes--}}
    <h4>solicitudes a tus publicaciones</h4> <br>
    @if(count($solicitudes)>0)
       <ul>
           @foreach($solicitudes as $solicitud)
              <li>
                  <a href="{{ route('mensajes',[$solicitud->id_usuario,$solicitud->id_publicacion]) }}"> {{$solicitud->titulo}} -> usuario solicitante :
                      {{ $solicitud->nombre }}  {{$solicitud->apellidos}}<br></a>
              </li>
           @endforeach
       </ul>
        @else
        <div class="alert alert-danger col-6" role="alert">
            No hay Registro de Solicitudes !
        </div>
    @endif
    @endsection