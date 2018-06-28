@extends('layouts.app')


@section('content')

    <div class="container">
       <div class="row">
           <div class="col-md-8">
               <H1>Lista De Articulos</H1>
                <a href="{{ route('articulos.create') }}" class="btn btn-sm btn-primary ">Crear</a>
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
                               <td>
                                   <a href="{{ route('articulos.show',$articulo->id) }}" class="btn btn-sm btn-info">Ver</a>
                               </td>
                               <td>
                                   <a href="{{ route('articulos.edit',$articulo->id) }}" class="btn btn-default">Editar</a>
                               </td>

                               <td>
                                   <a href="" data-target="#modal-delete-{{$articulo->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar </button></a>
                               </td>
                           </tr>
                           @include('admin.articulos.modal.modalEliminar')
                       @endforeach
                       </tbody>
                   </table>
                    {{ $articulos->render() }}
               </div>
           </div>
       </div>
    </div>



    @endsection