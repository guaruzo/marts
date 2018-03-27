
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



    <div class="container col-md-8 col-md-offset-2">
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
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($alumnos as $alumno) 
                                <tr>
                            <td>{!!$alumno->id !!}</td>
                            <td><a href="{!! action('AlumnoController@show', $alumno->id) !!}">{!! $alumno->nom !!}</a></td>
                             
                             
                             <td>{!! $alumno->dir !!} </td>
                             <td>{!! $alumno->tel !!} </td>                         
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












