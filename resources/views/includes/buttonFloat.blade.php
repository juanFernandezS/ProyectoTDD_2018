<div class="contenedor">
    <button class="botonPrincipal">
        <span class="fa fa-angle-double-up" ></span>
    </button>
    <button class="btn-float crear" data-toggle="modal" data-target="#modal-create-public">
        <span class="fa fa-plus" style="font-size:24px"></span>
    </button>
    <button class="btn-float misPublicaciones">
        <span class="fa fa-newspaper-o" style="font-size:24px"></span>
    </button>
    <button class="btn-float chat">
        <span class="fa fa-commenting-o" style="font-size:24px"></span>
    </button>
    <button class="btn-float otros">
        <span class="fa fa-check" style="font-size:24px"></span>
    </button>
</div>

<!-- modal crear -->
<div class="modal fade modal-slide-in-right" role="dialog" tabindex="-1" id="modal-create-public">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Nueva Publicación</h5>
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