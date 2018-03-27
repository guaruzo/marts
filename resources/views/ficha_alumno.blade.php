@extends('master2')

@section('contenido')



    <div class="container col-md-8 col-md-offset-2" style="margin: 100px auto; text-align: center;">
            <div class="well well bs-component">
                <div class="content">
					
                    <h2 class="header">{!! $alumno->nom !!}</h2>
                    <h3 class="header">{!! $alumno->dir !!}</h3>
                  	<h3 class="header">{!! $alumno->tel !!}</h3>
                   
                </div>
                
                <a href="{!! action('AlumnoController@edit', $alumno->id) !!}" class="btn btn-info">Edit</a>
                <form method="post" action="{!! action('AlumnoController@destroy', $alumno->id) !!}" class="pull-left">
                   <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                      <div>
                        <button type="submit" class="btn btn-warning">Borrar</button>
                      </div>
                </form>
            </div>
    </div>

@endsection