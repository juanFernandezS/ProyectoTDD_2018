
    <nav class="navbar navbar-light " id="nav-categorias">

        {{--<div class="">--}}
            {{--<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Busca Por...--}}
                {{--<span class="caret"></span></button>--}}
            {{--<ul class="dropdown-menu">--}}
                {{--<li class="list-group-item list-group-item-action active" href="#">Categorias</li>--}}
                {{--@foreach($categorias as $categoria)--}}

                        {{--<a class="nav-link" href="{{route('publicacionesFiltro',$categoria->id)}}">{{ $categoria->nombre }} </a>--}}

                {{--@endforeach--}}

                {{--<li class="list-group-item list-group-item-action active" href="#">Articulos</li>--}}
                {{--@foreach($articulos as $articulo)--}}

                        {{--<a class="nav-link" href="{{route('publicacionesFiltroArticulo',$articulo->id)}}">{{ $articulo->nombre }} </a>--}}

                {{--@endforeach--}}
            {{--</ul>--}}

        {{--</div>--}}


        <ul class="list-group border">
            <li class="list-group-item list-group-item-action active" href="#">Categorias</li>
            @foreach($categorias as $categoria)
                <a class="nav-link categoria" href="{{route('publicacionesFiltro',$categoria->id)}}">{{ $categoria->nombre }} </a>
            @endforeach
        </ul>
        <ul class="list-group border">
            <li class="list-group-item list-group-item-action active" href="#">Articulos</li>
            @foreach($articulos as $articulo)

                    <a class="nav-link articulo" href="{{route('publicacionesFiltroArticulo',$articulo->id)}}">{{ $articulo->nombre }} </a>

            @endforeach
        </ul>
    </nav>
