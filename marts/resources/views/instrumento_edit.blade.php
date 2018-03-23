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
                    <legend>Editar Instrumento</legend>
                    <div class="form-group">
                        <label for="ins" class="col-lg-2 control-label">Instrumento</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="ins" name="ins" value="{!! $instrumento->ins !!}">
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