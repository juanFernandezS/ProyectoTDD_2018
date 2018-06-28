@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <H1>Ver Articulo</H1>
                    </div>

                    <div class="panel-body">


                        <p><strong>Nombre: </strong>{{ $articulo->nombre }}</p>
                        <p><strong>Categoria: </strong>{{ $articulo->categoria->nombre }}</p>

                        Caracteristicas
                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Opciones</th>

                            </tr>

                            </thead>

                            <tdoby>
                                @foreach($caracteristicas as $caracteristica)
                                    <tr>
                                        <td>    {{ $caracteristica->nombre }} </td>
                                        <td>
                                            <a href="" data-target="#modal-editar-caracteristica-{{$caracteristica->id}}" data-toggle="modal">
                                                <button class="btn btn-sm btn-outline-info">Editar </button>
                                            </a>

                                        </td>
                                        <td>
                                            <a href="" data-target="#modal-eliminar-{{$caracteristica->id}}" data-toggle="modal">
                                                <button class="btn btn-sm btn-outline-danger">Eliminaar </button>
                                            </a>
                                        </td>

                                    </tr>
                                    @include('admin.articulos.modal.modalEliminarCaracteristica')
                                    @include('admin.articulos.modal.modalEditar')
                                @endforeach
                                <td>
                                    <a href="" data-target="#modal-agregar-categoria" data-toggle="modal">
                                        <button class="btn btn-sm btn-outline-secondary">Agragar Caracteristica </button>
                                    </a>
                                </td>

                                @include('admin.articulos.modal.modalCaracteristica')

                            </tdoby>
                        </table>


                    </div>

                </div>
            </div>
        </div>
    </div>
    @endsection