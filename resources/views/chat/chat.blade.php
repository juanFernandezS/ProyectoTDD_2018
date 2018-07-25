@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                @foreach($chats as $chat)
                {{--<nav aria-label="breadcrumb">--}}
                    {{--<ol class="breadcrumb">--}}
                        @if($chat->origen == $chat->compra->id_usuario)
                        {{--<li class="breadcrumb-item active" aria-current="page">{{$chat->mensaje}}</li>--}}
                        <div class="alert alert-info" role="alert">
                            {{$chat->mensaje}}
                        </div>
                            @else
                        <div class="alert alert-success" role="alert">
                            {{$chat->mensaje}}
                        </div>

                        @endif
                    {{--</ol>--}}
                {{--</nav>--}}
                @endforeach

                    {!! Form::open(['route'=>'chat.store']) !!}
                    <input type="hidden">
                    <div class="form-control">
                        <div class="form-group panel-chat">

                            <input type="hidden" name="id_compra" value="{{ $id_compra }}"></input>
                            <input type="hidden" name="origen" value="{{Auth::id()}}"></input>
                            {{ Form::textarea('mensaje', null, ['class'=>'form-control ']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::submit('enviar',['class'=>'btn btn-primary']) }}


                        </div>

                    </div>
                    {!! Form::close() !!}
            </div>

            <div class="col-4">

                <p>
                    <a class="btn btn-primary" data-toggle="collapse" href="#ventaCompleta" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Venta Completa
                    </a>
                </p>
                <div class="collapse" id="ventaCompleta">
                    <div class="card card-body">
                       Ahora por favor termina con los ultimos datos de la compra...

                        @if($id_comprador == Auth::id())

                            <a href="{{route('confirmacionComprador',[$id_compra,Auth::id()])}}" class="btn btn-danger" >OK</a>
                            @else

                            <a href="{{route('confirmacionVendedor',[$id_compra,Auth::id()])}}" class="btn btn-danger" >OK</a>
                        @endif
                    </div>
                </div>


                <p>
                    <a class="btn btn-primary" data-toggle="collapse" href="#ventaCancelada" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Venta Cancelada
                    </a>
                </p>
                <div class="collapse" id="ventaCancelada">
                    <div class="card card-body">
                       Estas seguro de cancelar esta compra??
                        {!! Form::open(['route' => ['chat.destroy', $id_compra],'method' => 'DELETE']) !!}
                        <a class="btn btn-secondary" data-toggle="collapse" href="#ventaCancelada" role="button" aria-expanded="false" aria-controls="collapseExample">
                            No, cancelar
                        </a>
                        <button type="submit" class="btn btn-primary">Confirmar</button>
                        {{Form::Close()}}
                    </div>
                </div>

                @if($compra->confirmacion_vendedor==1 && $id_comprador == Auth::id())
                    vendedor confirmo la compra, porfavor confirmala tu tambien
                    para estar seguros de que se acordo la transaccion
                    @endif
                @if($compra->confirmacion_comprador==1 && $id_comprador != Auth::id())
                    comprador confirmo la compra, porfavor confirmala tu tambien
                    para estar seguros de que se acordo la transaccion
                @endif
            </div>
        </div>

    </div>
    @endsection

@section('scripts')
    {{--<script type="text/javascript" src="{{asset('vendor/ckeditor/ckeditor.js')}}"></script>--}}

    {{--CKEDITOR.config.heigth = 300;--}}
    {{--CKEDITOR.config.width = 'auto;--}}
    {{--CKEDITOR.replace('texto');--}}
    @endsection