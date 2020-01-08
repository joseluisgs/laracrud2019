<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Listado de Usuarios/as</title>
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
                                    <h3 class="pull-left">Listado de usuarios/as</h3>
                                </div>
                                    {{-- Si hay registros --}}
    @if (count($users) > 0)
    <!-- Tabla-->
    <table class='table table-bordered table-striped'>
        <thead>
            <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>E-Mail</th>
            <th class="text-center">Tipo</th>
            <th class="text-center">Imagen</th>
            </tr>
        </thead>
        <tbody>
            {{--Recorrido usando $user --}}
            @foreach ($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td class="text-center">
                        @if ($user->tipo == 'admin')
                            <span class>Admin</span>
                        @else
                            <span>Normal</span>
                        @endif

                    </td>
                    <td class="text-center">
                            <img src='{{storage_path('app/'.$user->imagen)}}' class='avatar img-circle' alt='imagen' width='35' height='35'>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

{{--Si no hay usuarios mostramos el mensaje--}}
@else
    <p class='lead'><em>No se ha encontrado datos de usuarios/as.</em></p>
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

