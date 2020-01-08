<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Ficha de Producto</title>
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
                                    <h3 class="pull-left">Ficha de Producto</h3>
                                </div>
                                <div class="container">
                                        <div class="row">
                                            <br>
                                                <div class="text-center">
                                                    {{-- Imagen --}}
                                                    <img src='{{storage_path('app/'.$producto->imagen)}}' class='avatar img-thumbnail' alt='imagen' width='165' height='165'>
                                                </div>
                                                {{-- Marca --}}
                                                <div class="form-group">
                                                    {!! Form::label('marca', 'Marca:', ['class'=>'col-lg-3 control-label']) !!}
                                                    {!!Form::label('marca', $producto->marca, ['class'=>'form-control'])!!}
                                                </div>
                                                {{-- Modelo --}}
                                                <div class="form-group">
                                                    {!! Form::label('modelo', 'Modelo:', ['class'=>'col-lg-3 control-label']) !!}
                                                    {!! Form::label('modelo', $producto->modelo, ['class'=>'form-control'])!!}
                                                </div>
                                                {{-- Modelo --}}
                                                <div class="form-group">
                                                        {!! Form::label('precio', 'Precio (€):', ['class'=>'col-lg-3 control-label']) !!}
                                                        {!! Form::label('precio', $producto->precio, ['class'=>'form-control'])!!}
                                                    </div>
                                                {{-- Tipo --}}
                                                <div class="form-group">
                                                    {!! Form::label('tipo', 'Tipo:', ['class'=>'col-lg-3 control-label']) !!}
                                                    @if ($producto->tipo == 'juego')
                                                        {!! Form::label('tipo', 'Juego', ['class'=>'form-control'])!!}
                                                    @else
                                                        {!! Form::label('tipo', 'Consola', ['class'=>'form-control'])!!}
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

