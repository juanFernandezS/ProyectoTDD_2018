<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', '') }} | @yield('titulo', 'Default') </title>

    <!-- Styles -->
    <link href="{{ asset('css/flaty.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/buttonFloat.css') }}" rel="stylesheet">
    <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    {{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>--}}
</head>
<body>
<div>

    @include('includes.navbar')

    <div class="container p-3 mb-2 bg-white text-dark">
        <div class="row">
            <div class="col-3">
                @include('includes.navCategorias')
            </div>
            <div class="col-9">
                <div class="panel panel-primary">
                    <div class="panel-heading"></div>
                    <div class="panel-body">
                        <!--se usa para mostrar mensajes flash enviados desde controlador-->

                        <br>

                        @yield('content')

                    </div>
                </div>
            </div>
        </div>


    </div>

    <!-- Scripts -->

    <script src="{{ asset('plugins/jquery/jquery-3.3.1.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/bootstrap.js') }}"></script>
    @yield('scripts')
</div>
@include('includes.footer')
@include('includes.buttonFloat')
<script>
    $('.botonPrincipal').hover(function(){
        $('.btn-float').addClass('animacionVer');
    })
    $('.contenedor').mouseleave(function(){
        $('.btn-float').removeClass('animacionVer');
    })
</script>

</body>
</html>
