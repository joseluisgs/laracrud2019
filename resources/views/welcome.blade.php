{{-- Extendemos de la clase principal --}}
@extends('template.main')

{{-- pasamos esta parte a todo donde ponga yield con esta eqtiqueta --}}
@section('title', 'LaraCRUD')

{{-- Inyectamos este contenido en la etiqueta content de su yield --}}
@section('content')
    <!-- Contenido la página web -->
    <div class="jumbotron">
            <h1 class="text-center">¡Bienvenidos/as a LaraCRUD!</h1>
            <p  class="text-center">Una web hecha con Laravel 5.7 para 2º DAW. Esperemos que os guste :)</p>
    </div>
@endsection


