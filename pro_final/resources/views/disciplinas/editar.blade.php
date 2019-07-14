@extends('layout.app')
@section('content')

	<h1> Editar Disciplina </h1>

	<form class="" action="{{route('disciplina.update', $disciplina->id)}}" method="POST">
        @csrf
        {{ method_field('PUT') }}
		<div class="form-group">
		    <label> Nome </label>
		    <input type="text" name="nome" class="form-control" value="{{ $disciplina->nome }}" required="">
		</div>
		
        
        <div class="form-group">
            <label for="carga_horaria">Carga Horária</label>
            <input type="text" name="carga_horaria" value="{{ $disciplina->carga_horaria }}" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="periodo">Período</label>
            <input type="text" name="periodo" class="form-control" value="{{ $disciplina->periodo }}" required>
        </div>

        <div>
		    <button class="btn btn-success" type="submit">Editar</button>
            <a href="{{route('home')}}"><button class="btn btn-primary">Voltar</button></a>
        </div>


	</form>

@endsection
