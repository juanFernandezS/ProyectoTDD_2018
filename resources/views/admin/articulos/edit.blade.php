@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <H1>Edición de Articulo</H1>
                    </div>

                    <div class="panel-body">
                        {!! Form::model($articulo,['route'=> ['articulos.update',$articulo->id],'method' => 'PUT']) !!}
                        <div class="form-group">
                            {{ Form::label('nombre', 'Nombre del Articulo') }}
                            {{ Form::text('nombre',$articulo->nombre,['class'=>'form-control','id'=>'nombre']) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('categoria', 'nombre de la categoria') }}
                            {{ Form::select('id_categoria',$categorias, null,
                             ['class'=>'form-control form-control-sm','placeholder'=>'Selecciona una categoria']) }}
                        </div>

                        <div class="form-group">
                            {{ Form::submit('Guardar',['class'=>'btn btn-primary']) }}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection