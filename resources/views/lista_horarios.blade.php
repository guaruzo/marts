
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
                    <h2> Horarios </h2>
                </div>
                @if (session('status'))
                  <div class="alert alert-success">
                    {{ session('status') }}
                  </div>
                @endif

                @if ($horarios->isEmpty())     
                    <p> No hay Horarios.</p>
                @else
                    <table id="example">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Horario</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                              @foreach($horarios as $horario) 
                                <tr>
                            <td>{!!$horario->id !!}</td>
                            <td><a href="{!! action('HorarioController@show', $horario->id) !!}">{!! $horario->horario !!}</a></td>
                             
                             
                                                      
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












