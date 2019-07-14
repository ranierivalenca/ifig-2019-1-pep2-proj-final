@extends('layout.app')
@section('content')

	<h1> Cadastrar Disciplina </h1>
	<p> Cadastre aqui uma disciplina </p>

	<form class="" action="{{route('disciplina.save')}}" method="POST">
        @csrf
		<div class="form-group">
		    <label> Nome </label>
		    <input type="text" name="nome" class="form-control" required="">
		</div>
		
        <div class="form-group">
            <label for="carga_horaria">Carga Horária</label>
            <input type="text" name="carga_horaria" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="periodo">Período</label>
            <input type="text" name="periodo" class="form-control" required>
        </div>

        <div>
		    <button class="btn btn-success" type="submit">Adicionar</button>
        </div>
	</form>
    <br>        
    <a href="{{route('disciplina.index')}}"><button class="btn btn-primary">Voltar</button></a>

@endsection
