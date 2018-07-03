@section('barraLateral')
    @include('includes.navCategorias')
    @endsection


@section('content')

        @include('blog.ultimasPublicaciones')

        @include('blog.masVisitadas')

@endsection