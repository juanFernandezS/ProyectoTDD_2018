@extends('layouts.app')

@section('titulo', 'Categorias')

@section('content')
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
                <th scope="row">$categoria->id</th>
                <td>$categoria->nombre</td>
                <td>
                    <a href="{{ route('categorias.edit', $categoria->id) }}" class="btn btn-warning" ><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
                    <a href="{{ route('categorias.destroy', $categoria->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {!! $categorias->links() !!}

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

@endsection