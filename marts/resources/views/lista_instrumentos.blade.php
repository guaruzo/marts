
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
                    <h2> Instrumentos </h2>
                </div>
                @if (session('status'))
                  <div class="alert alert-success">
                    {{ session('status') }}
                  </div>
                @endif

                @if ($instrumentos->isEmpty())     
                    <p> No hay Instrumentos.</p>
                @else
                    <table id="example">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                           @foreach($instrumentos as $instrumento) 
                                <tr>
                            <td>{!!$instrumento->id !!}</td>
                            <td><a href="{!! action('InstrumentoController@show', $instrumento->id) !!}">{!! $instrumento->ins !!}</a></td>
                             
                             
                          
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












