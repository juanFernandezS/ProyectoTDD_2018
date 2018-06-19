<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('', 'Proyecto-tdd') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @include('includes.navbar')

        @yield('content')
    </div>

    <!-- Scripts -->

    <script src="{{ asset('plugins/jquery/jquery-3.3.1.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/bootstrap.js') }}"></script>
</body>
</html>
