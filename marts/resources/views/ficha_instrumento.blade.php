@extends('master2')

@section('contenido')



    <div class="container col-md-8 col-md-offset-2" style="margin: 100px auto; text-align: center;">
            <div class="well well bs-component">
                <div class="content">
                    <h2 class="header">{!! $instrumento->ins !!}</h2>
                   
                   
                </div>
                 <a href="{!! action('InstrumentoController@edit', $instrumento->id) !!}" class="btn btn-info">Edit</a>
                 <form method="post" action="{!! action('InstrumentoController@destroy', $instrumento->id) !!}" class="pull-left">
                   <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                      <div>
                        <button type="submit" class="btn btn-warning">Borrar</button>
                      </div>
                </form>
            </div>
    </div>

@endsection