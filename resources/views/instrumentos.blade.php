

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
    <label for="instrumento">Instrumento</label>
    <input type="text" class="form-control" id="ins" placeholder="Nombre del instrumento" name="ins">
  </div>
 
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@endsection

