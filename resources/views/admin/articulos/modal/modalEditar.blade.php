<div class="modal fade modal-slide-in-right" aria-hidden="true"
     role="dialog" tabindex="-1" id="modal-editar-caracteristica-{{$caracteristica->id}}">



    {!! Form::model($caracteristica,['route'=> ['caracteristicas.update',$caracteristica->id],'method' => 'PUT']) !!}
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title">editar</h4>
            </div>
            <div class="modal-body">
                <p>Confirme si desea editar la caracteristica</p>
                <div class="form-group">
                    {{ Form::text('nombre',$caracteristica->nombre,['class'=>'form-control','id'=>'nombre']) }}
                </div>
                <div class="form-group">
                    {{ Form::hidden('id_caracteristica', $caracteristica->id) }}
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>

                {{ Form::submit('Guardar',['class'=>'btn btn-primary']) }}
            </div>
        </div>
    </div>
    {{Form::Close()}}

</div>