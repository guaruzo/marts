@extends ('master')
@section ('contenido')



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
 <h2>Ingrese datos de Inscripción para:</h2>

 <h3>{{ $alumnos['nom']}}</h3>
 {{--
 <div class="form-group">
    <label for="exampleInputPassword1">Instrumento</label>
    <select name="instrumentos" id="ins" class="form-control">
    	<option value="">-- Selecciona el instrumento --</option>
    	@foreach ($instrumentos as $instrumento)
    	<option value="{{ $instrumento['id'] }}">{{ $instrumento['ins'] }}</option>
    	@endforeach
    </select>
  </div>



  <div class="form-group">
    <label for="exampleInputPassword1">Horario</label>
    <select name="instrumentos" id="ins" class="form-control">
    	<option value="">-- Selecciona el horario --</option>
    	@foreach ($horarios as $horario)
    	<option value="{{ $horario['id'] }}">{{ $horario['horario'] }}</option>
    	@endforeach
    </select>
  </div>
  --}}

      <label for="exampleInputPassword1">Instrumento</label>
    <select name="nom_instrumento" id="nom_instrumento" class="form-control">

      <option value="">-- Selecciona el instrumento --</option>

      @foreach ($instrumentos as $instrumento)

         <option value="{{ $instrumento['id'] }}">{{ $instrumento['ins'] }}</option>
      
      @endforeach
      </select>


  <div class="form-group">
    <label for="exampleInputPassword1">Maestro</label>
    <select name="nom_maestro" id="nom_maestro" class="form-control">

    	<option value="">-- Selecciona el maestro --</option>

    	@foreach ($maestros as $maestro)

    	   <option value="{{ $maestro['id'] }}">{{ $maestro['nom'] }}</option>
      
    	@endforeach
      </select>



    
      <label for="exampleInputPassword1">Horario</label>
    <select name="nom_horario" id="nom_horario" class="form-control">

      <option value="">-- Selecciona el horario --</option>

      @foreach ($horarios as $horario)

         <option value="{{ $horario['id'] }}">{{ $horario['horario'] }}</option>
      
      @endforeach
      </select>



      <input type="hidden" name="id" id="id" value="{{ $alumnos['id']}}">
    <button type="submit" class="btn btn-primary">Guardar</button>
  </div>
 
  
</form>

@endsection