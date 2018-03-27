@extends('master')


@section('contenido')
    <div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">

            <form class="form-horizontal" method="post">

                @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                @endforeach

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <input type="hidden" name="_token" value="{!! csrf_token() !!}">

                <fieldset>
                    <legend>Editar Maestro</legend>
                    <div class="form-group">
                        <label for="nombre" class="col-lg-2 control-label">Nombre</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="nombre" name="nom" value="{!! $maestro->nom !!}">
                        </div>
                    </div>

                     <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Dirección</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="dir" name="dir" value="{!! $maestro->dir !!}">
                        </div>
                    </div>

                     <div class="form-group">
                        <label for="telefono" class="col-lg-2 control-label">Teléfono</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="tel" name="tel" value="{!! $maestro->tel !!}">
                        </div>
                    </div>
                    
                 

                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button class="btn btn-default">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Actualizar</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection