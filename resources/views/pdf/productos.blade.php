<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Listado de Productos</title>
    <!-- Importamos el CSS no con assets -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 80%;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
    </style>

</head>
<body>
        <section>
                <div class="wrapper">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="page-header clearfix">
                                    <h3 class="pull-left">Listado de productos</h3>
                                </div>
                                    {{-- Si hay registros --}}
    @if (count($productos) > 0)
    <!-- Tabla-->
    <table class='table table-bordered table-striped'>
        <thead>
            <tr>
            <th>ID</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Precio</th>
            <th class="text-center">Tipo</th>
            <th class="text-center">Imagen</th>
            </tr>
        </thead>
        <tbody>
            {{--Recorrido usando $user --}}
            @foreach ($productos as $producto)
                <tr>
                        <td>{{$producto->id}}</td>
                        <td>{{$producto->marca}}</td>
                        <td>{{$producto->modelo}}</td>
                        <td>{{$producto->precio}}€</td>
                        <td class="text-center">
                            @if ($producto->tipo == 'juego')
                                <span>Juego</span>
                            @else
                                <span>Consola</span>
                            @endif

                    </td>
                    <td class="text-center">
                            <img src='{{storage_path('app/'.$producto->imagen)}}' class='avatar' alt='imagen' width='35' height='auto'>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

{{--Si no hay usuarios mostramos el mensaje--}}
@else
    <p class='lead'><em>No se ha encontrado datos de productos.</em></p>
@endif
<h6>Creado: {{date('H:m:s d/m/Y')}}</h6>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
</body>
</html>

