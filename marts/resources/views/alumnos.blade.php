@extends ('master2')

@section ('contenido')

<form method="post" style="width: 40%; margin: 100px auto;">
		@foreach ($errors->all() as $error)
            		<p class="alert alert-danger">{{ $error }}</p>
            	@endforeach 
            	@if (session('status'))
					<div class="alert alert-sucess">
						{{ session('status')}}
					</div>
				@endif	

            	<input type="hidden" name="_token" value="{!! csrf_token() !!}">
  <div class="form-group">
    <label for="nombre">Nombre del alumno</label>
    <input type="text" class="form-control" id="nombre" aria-describedby="emailHelp" placeholder="Nombre" name="nom">
   
  </div>
  <div class="form-group">
    <label for="direccion">Direccion</label>
    <input type="text" class="form-control" id="direccion" placeholder="Dirección" name="dir">
  </div>
 <div class="form-group">
    <label for="direccion">Teléfono</label>
    <input type="text" class="form-control" id="telefono" placeholder="telefono" name="tel">
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>


@stop