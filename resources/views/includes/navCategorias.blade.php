<div>

    <nav class="navbar navbar-light">
        <ul class="list-group">
            <li class="list-group-item list-group-item-action active" href="#">Categorias</li>
            @foreach($categorias as $categoria)
                <li class="list-group-item">
                    <a class="nav-link" href="#">{{ $categoria->nombre }} </a>
                </li>
            @endforeach
        </ul>
    </nav>
</div>