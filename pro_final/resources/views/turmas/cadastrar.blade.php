@extends('layout.app')
@section('content')

	<h1> Cadastrar Turma </h1>
	<p> Cadastre aqui uma turma </p>

	<form class="" action="{{route('turmas.salvar')}}">
		<div class="form-group">
		<label> Semestre </label>
		<input type="number" name="semestre" class="form-control" min="1" max="10" required=""><br>
		<label> Professor </label><br>
		<select class="form-control" required="" name="professor"> 
			<option disabled>Escolha o Professor</option>
            <option hidden=""></option> 
			@foreach($professores as $professor)
				<option value="{{$professor -> id}}"> {{$professor->nomeDoProfessor}} </option>
			@endforeach
		</select><br> 
		<label> Disciplina </label>
		<select class="form-control" required="" name="disciplina">
			<option disabled>Escolha a Disciplina</option>
            <option hidden=""></option>
			@foreach ($disciplinas as $disciplina)
				<option value="{{$disciplina -> id}}"> {{$disciplina -> nome}}</option>
			@endforeach
		</select><br>
		<label> Turno </label>
		<select class="form-control" name="turno"> 
			<option disabled>Escolha o Turno</option>
            <option hidden=""></option>
			<option value="Manhã"> Manhã </option>
			<option value="Tarde"> Tarde  </option>
			<option value="Noite"> Noite  </option>
		</select>
		<br>
		<button class="btn btn-success" type="submit">Adicionar</button>

		</div>
	</form>
                        <a href="{{route('home')}}"><button class="btn btn-primary">Voltar</button></a>

@endsection
