@extends('layouts.app')


@section('content')

    <div class="container">
        <div class="col-md-8">
            <H1>Lista De Articulos</H1>

            <div class="panel panel-default">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th width="10px">ID</th>
                            <th>Nombre</th>
                            <th>Categoria</th>
                            <th opciones></th>
                        </tr>
                    </thead>

                    <tbody>
                    @foreach($articulos as $articulo)
                        <tr>
                            <td>{{ $articulo->id }}</td>
                            <td>{{ $articulo->nombre }}</td>
                            <td>{{ $articulo->categoria->nombre }}</td>
                            <td>opciones</td>
                        </tr>
                     @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>



    @endsection