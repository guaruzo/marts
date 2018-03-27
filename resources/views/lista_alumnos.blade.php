
@extends('master')
@section('contenido')

<!DOCTYPE html>
<html>
<head>
	<title></title>

  <link rel="stylesheet" href="../DataTables/DataTables-1.10.16/css/jquery.dataTables.min.css">

<script type="text/javascript" src="../DataTables/datatables.min.js"></script>



</head>
<body>



    <div class="container col-md-12 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2> Alumnos </h2>
                </div>
                @if (session('status'))
                  <div class="alert alert-success">
                    {{ session('status') }}
                  </div>
                @endif

                @if ($alumnos->isEmpty())     
                    <p> No hay Alumnos.</p>
                @else
                    <table id="example">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Dirección</th>
                                <th>Teléfono</th>
                                <th></th>
                                <th></th>
                                <th></th>   
                                <th></th>  
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($alumnos as $alumno) 
                        <tr>
                            <td>{!!$alumno->id !!}</td>
                            <td><a href="{!! action('AlumnoController@show', $alumno->id) !!}">{!! $alumno->nom !!}</a></td>
                             
                             
                             <td>{!! $alumno->dir !!} </td>
                             <td>{!! $alumno->tel !!} </td>

                      <td>
                             <form method="get" action="{!! action('AlumnoController@show', $alumno->id) !!}" class="pull-left">
                                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                                    <div>
                                         <button class="btn btn-outline-info">Ver</button>
                                    </div>
                                </form> 
                            </td>

                            <td>
                             <form method="get" action="{!! action('AlumnoController@edit', $alumno->id) !!}" class="pull-left">
                                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                                    <div>
                                         <button class="btn btn-outline-primary">Editar</button>
                                    </div>
                                </form> 
                            </td>

                            <td>
                             <form method="get" action="{!! action('AlumnoController@form_inscribir', $alumno->id) !!}" class="pull-left">
                                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                                    <div>
                                         <button class="btn btn-outline-success">Inscribir</button>
                                    </div>
                                </form> 
                            </td>

                            <td>
                             <form method="get" action="{!! action('AlumnoController@destroy', $alumno->id) !!}" class="pull-left">
                                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                                    <div>
                                         <button class="btn btn-outline-danger">Borrar</button>
                                    </div>
                                </form> 
                            </td>


                            
                            
                    {{--}}         <td>
                                <form method="get" action="{!! action('AlumnoController@edit', $alumno->id) !!}" class="pull-left">
                                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                                    <div>
                                        <button type="submit" class="btn btn-outline-primary">Editar</button>
                                    </div>
                                </form>  
                            </td> 
                            <td>
                                <form method="post" action="{!! action('AlumnoController@destroy', $alumno->id) !!}" class="pull-left">
                                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                                    <div>
                                        <button type="submit" class="btn btn-outline-success">Inscribir</button>
                                    </div>
                                </form>  
                            </td> 
                             <td>
                                 <form method="post" action="{!! action('AlumnoController@destroy', $alumno->id) !!}" class="pull-left">
                                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                                    <div>
                                        <button type="submit" class="btn btn-outline-danger">Borrar</button>
                                    </div>
                                </form>  
                             </td>
                              <td>
                                 <form method="get" action="{!! action('AlumnoController@show', $alumno->id) !!}" class="pull-left">
                                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                                    <div>
                                        <button type="submit" class="btn btn-outline-info">Ver</button>
                                    </div>
                                </form>  
                             </td> --}}                              
                        </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
    </div>
@endsection

<script type="text/javascript" src="../DataTables/datatables.min.js"></script>

            <script type="text/javascript">$(document).ready(function() {
                $('#example').DataTable();
            } );</script>

</body>
</html>












