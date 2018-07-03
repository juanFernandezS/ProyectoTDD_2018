<div>
    <h5>Categorias</h5>
    <nav class="navbar navbar-light">
        <ul class="list-group">
            @foreach($categorias as $categoria)
                <li class="list-group-item">
                    <a class="nav-link" href="#">{{ $categoria->nombre }} </a>
                </li>
            @endforeach
        </ul>
    </nav>
</div>