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
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet">
    <link href="{{ asset('css/buttonFloat.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div>

    @include('includes.navbar')

    <div class="container">
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

        @include('includes.footer')
    </div>

    <!-- Scripts -->

    <script src="{{ asset('plugins/jquery/jquery-3.3.1.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/bootstrap.js') }}"></script>
    @yield('scripts')
</div>

</body>
</html>