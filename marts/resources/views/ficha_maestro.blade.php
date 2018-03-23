@extends('master2')

@section('contenido')



    <div class="container col-md-8 col-md-offset-2" style="margin: 100px auto; text-align: center;">
            <div class="well well bs-component">
                <div class="content">
                    <h2 class="header">{!! $maestro->nom !!}</h2>
                    <h3 class="header">{!! $maestro->dir !!}</h3>
                  	<h3 class="header">{!! $maestro->tel !!}</h3>
                   
                </div>
                <a href="{!! action('MaestroController@edit', $maestro->id) !!}" class="btn btn-info">Edit</a>
                <form method="post" action="{!! action('MaestroController@destroy', $maestro->id) !!}" class="pull-left">
                   <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                      <div>
                        <button type="submit" class="btn btn-warning">Borrar</button>
                      </div>
                </form>
            </div>
    </div>

@endsection