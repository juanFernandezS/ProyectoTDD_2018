<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="{{ route('welcome') }}">
        {{ config('app.name') }}
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
            @if(!Auth::guest())
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('home') }}">Inicio <span class="sr-only"></span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Mantenedores</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('articulos.index') }}">Articulos</a>
                    <a class="dropdown-item" href="{{ route('categorias.index') }}">Categorias</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('publicaciones.index') }}">Mis Publicaciones <span class="sr-only"></span></a>
            </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('intereses',Auth::user()) }}">Mis chats <span class="sr-only"></span></a>
                </li>
            @endif
        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="nav navbar-nav navbar-right">
            <!-- Authentication Links -->
            @if (Auth::guest())
                <li><a class="nav-link" href="{{ route('login') }}"><i class="fa fa-sign-in"></i> Iniciar Sesión</a></li>
                <li><a class="nav-link" href="{{ route('register') }}">Registrarse</a></li>
            @else
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->nombre }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 37px, 0px);">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Salir <i class="fa fa-sign-out"></i>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>

                    </div>
                </li>
            @endif
        </ul>
    </div>
</nav>