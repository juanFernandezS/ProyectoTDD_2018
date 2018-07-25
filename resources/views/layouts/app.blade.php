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
    <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div>

    @include('includes.navbar')

    <div class="container p-3 mb-2 bg-white text-dark h-100">
        <div class="row">

            <div class="col-12">
                <div class="panel panel-primary">
                    <div class="panel-heading"></div>
                    <div class="panel-body">
                        <!--se usa para mostrar mensajes flash enviados desde controlador-->
                        @include('flash::message')

                        @if(session('mensaje'))
                            <div class="alert alert-danger">
                                {{ session('mensaje') }}
                            </div>
                        @endif
                        <br>

                        @yield('content')

                    </div>
                </div>
            </div>
        </div>


    </div>

    <!-- Scripts -->

    <script type="text/javascript" src="{{ asset('plugins/jquery/jquery-3.3.1.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/bootstrap.js') }}"></script>
        @yield('scripts')
    </div>
    @include('includes.footer')
</body>
</html>
