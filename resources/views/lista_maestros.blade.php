
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
                    <h2> Maestros </h2>
                </div>
                @if (session('status'))
                  <div class="alert alert-success">
                    {{ session('status') }}
                  </div>
                @endif

                @if ($maestros->isEmpty())     
                    <p> No hay Maestros.</p>
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
                           @foreach($maestros as $maestro) 
                                <tr>
                            <td>{!!$maestro->id !!}</td>
                            <td><a href="{!! action('MaestroController@show', $maestro->id) !!}">{!! $maestro->nom !!}</a></td>
                             
                             
                             <td>{!! $maestro->dir !!} </td>
                             <td>{!! $maestro->tel !!} </td>                         
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












