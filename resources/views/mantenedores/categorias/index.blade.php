@extends('layouts.app')

@section('titulo', 'Categorias')

@section('content')
    <h4>Lista de Categorias</h4>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-create">Registrar nueva categoria</button><hr>

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre Categoria</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach( $categorias as $categoria )
            <tr>
                <th scope="row">{{ $categoria->id }}</th>
                <td>{{ $categoria->nombre }}</td>
                <td>
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-edit" data-nombre="{{ $categoria->nombre }}" data-id="{{ $categoria->id }}"></button>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete" data-id="{{ $categoria->id }}"></button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {!! $categorias->render() !!}

    <!-- modal crear -->
    <div class="modal" id="modal-create">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Crear categoria</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('categorias.store') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nombre Categoria</label>
                            <input class="form-control" name="nombre" placeholder="Ingrese Nombre" type="text">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- modal editar -->
    <div class="modal" id="modal-edit">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Editar categoria </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('categorias.update', 'flagg') }}" method="POST">
                    {{ method_field('patch') }}
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="hidden" name="id" id="id">
                            <label>Nombre Categoria</label>
                            <input class="form-control" name="nombre" id="nombre" type="text">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- modal eliminar -->
    <div class="modal" id="modal-delete">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Eliminar categoria </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('categorias.destroy', 'test') }}" method="POST">
                    {{ method_field('delete') }}
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="alert alert-dismissible alert-warning">
                                <h4 class="alert-heading">Alerta!</h4>
                                <p class="mb-0">Estas seguro de eliminar el registro?</p>
                            </div>
                        </div>
                        <input type="hidden" name="id" id="id">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

    <script>

        $('#modal-edit').on('show.bs.modal', function (event){

            var button = $(event.relatedTarget);
            var nombre = button.data('nombre');
            var id = button.data('id');

            var modal = $(this);

            modal.find('.modal-body #nombre').val(nombre);
            modal.find('.modal-body #id').val(id);
        })

        $('#modal-delete').on('show.bs.modal', function (event){

            var button = $(event.relatedTarget);
            var id = button.data('id');
            var modal = $(this);

            modal.find('.modal-body #id').val(id);
        })

    </script>

@endsection