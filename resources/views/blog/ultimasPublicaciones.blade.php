<div class="row">
    <div class="panel-default">
        <div class="panel-info">
               <h4>Ultimas Publicaciones</h4>
               <a href="{{ route('publicaciones') }}" class="btn btn-sm btn-info pull-right"> Ver Todas</a>
        </div>
        <div class="panel-body">

            <div class="card-deck">
                @foreach($publicaciones as $publicacion)
                    <div class="card">
                        <img class="card-img-top" src="http://lorempixel.com/1920/1080" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{$publicacion->titulo}}</h5>
                            <p class="card-text">{{$publicacion->comentario}}</p>
                            <br>publicado por<p>{{$publicacion->user->nombre}} {{$publicacion->user->apellidos}}</p>
                            <a href="{{ route('detalle',$publicacion->id) }}" class="btn btn-sm btn-outline-primary"> Leer Más</a>
                        </div>
                    </div>
                @endforeach
            </div>
            {{$publicaciones->render()}}
        </div>
    </div>
</div>
