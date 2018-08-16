<div class="contenedor">
    <button class="botonPrincipal">
        <span class="fa fa-angle-double-up" ></span>
    </button>
    <button class="btn-float crear" data-toggle="modal" data-target="#modal-create-public">
        <span class="fa fa-plus" style="font-size:24px"></span>
    </button>
    <a class="btn-float misPublicaciones" title="Mis Publicaciones" role="button" href="{{ route('publicaciones.index') }}">
        <span class="fa fa-newspaper-o" style="font-size:24px" ></span>
    </a>
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
                        <label>Titulo</label>
                        <input class="form-control" name="titulo" placeholder="Ingrese Titulo"  type="text">
                    </div>
                    <div class="form-group">
                        <select class="custom-select" id="articulos" name="id_articulo">
                            <option selected="">Selecciona que articulo</option>
                            @foreach($articulos as $articulo)
                                <option value="{{ $articulo->id }}">{{ $articulo->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="custom-select" id="caracteristicas">

                        </select>
                    </div>
                    <div class="form-group">
                        <label>Precio</label>
                        <input class="form-control" name="precio" min="10" max="1200000" value="1" type="range">
                    </div>
                    <div class="form-group">
                        <label>Cantidad</label>
                        <input class="form-control" name="cantidad" min="1" max="100" value="1" type="range">
                    </div>
                    <div class="form-group">
                        <label>Comentario</label>
                        <input class="form-control" name="comentario" placeholder="Ingrese detallles sobre la publicación" type="text">
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


<script>


</script>