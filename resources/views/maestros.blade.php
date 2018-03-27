@extends('master2')

@section('contenido')

<form method="post" style="width: 40%; margin: 100px auto;">

	 @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                @endforeach

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <input type="hidden" name="_token" value="{!! csrf_token() !!}">

  <div class="form-group">
    <label for="nombre">Nombre del maestro</label>
    <input type="text" class="form-control" id="nombre" aria-describedby="emailHelp" placeholder="Escribe tu nombre" name="nom">
   </div>

	<div class="form-group">
    <label for="direccion">Dirección</label>
    <input type="text" class="form-control" id="direccion" aria-describedby="emailHelp" placeholder="Escribe tu direccion" name="dir">
   </div>
  
  <div class="form-group">
    <label for="Telefono">Teléfono</label>
    <input type="text" class="form-control" id="Telefono" aria-describedby="emailHelp" placeholder="Escribe tu Telefono" name="tel">
   </div>

  <button type="submit" class="btn btn-primary">Enviar</button>
</form>







@stop


