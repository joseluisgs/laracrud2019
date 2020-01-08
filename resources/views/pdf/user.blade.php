<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Ficha de usuario/a:</title>
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
                                    <h3 class="pull-left">Ficha de usuario/a</h3>
                                </div>
                                <div class="container">
                                        <div class="row">
                                            <br>
                                                <div class="text-center">
                                                    {{-- Imagen --}}
                                                    <img src='{{storage_path('app/'.$user->imagen)}}' class='avatar img-circle img-thumbnail' alt='imagen' width='165' height='165'>
                                                </div>
                                                {{-- Nombre --}}
                                                <div class="form-group">
                                                    {!! Form::label('name', 'Nombre:', ['class'=>'col-lg-3 control-label']) !!}
                                                    {!!Form::label('name', $user->name, ['class'=>'form-control'])!!}
                                                </div>
                                                {{-- Email --}}
                                                <div class="form-group">
                                                    {!! Form::label('email', 'Correo Electrónico:', ['class'=>'col-lg-3 control-label']) !!}
                                                    {!! Form::label('email', $user->email, ['class'=>'form-control'])!!}
                                                </div>
                                                {{-- Tipo --}}
                                                <div class="form-group">
                                                    {!! Form::label('tipo', 'Tipo:', ['class'=>'col-lg-3 control-label']) !!}
                                                    @if ($user->tipo == 'admin')
                                                        {!! Form::label('email', 'Admin', ['class'=>'form-control'])!!}
                                                    @else
                                                        {!! Form::label('email', 'Normal', ['class'=>'form-control'])!!}
                                                    @endif
                                                </div>
                                                <h6>Creado: {{date('H:m:s d/m/Y')}}</h6>
                                        </div>
                                    </div>

                                </div>
                            </div>
                    </div>
                </div>
        </section>
</body>
</html>

