@extends ('master2')


@section('contenido')


<form method="post" style="width: 30%; margin: 100px auto;">

	@foreach ($errors->all() as $error)
            		<p class="alert alert-danger">{{ $error }}</p>
            	@endforeach 
            	@if (session('status'))
					<div class="alert alert-success">
						{{ session('status')}}
					</div>
				@endif	

            	<input type="hidden" name="_token" value="{!! csrf_token() !!}">


  <div class="form-group" >
    <label for="horario">Nuevo horario</label>
    <input type="text" class="form-control" id="horario" aria-describedby="emailHelp" placeholder="Introduzca horario" name="horario">
   
  </div>
 
  
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@stop