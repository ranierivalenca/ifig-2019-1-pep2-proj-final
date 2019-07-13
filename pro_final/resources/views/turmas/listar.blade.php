@extends('layout.app')
@section('content')

	<h1> Lista de Turmas </h1>
	<p> Lista das turmas abertas </p>
	<table class="table table-striped">
		<thead class="">
			<tr align="center">	
				<th>Semestres</th>
				<th>Turno</th>
				<th>Professor</th>
				<th>Disciplina</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($turmas as $turma)

				<tr align="center">
					<td>{{$turma -> semestres }}</td>
					<td>{{$turma -> turno }}</td>
					<td>{{$turma -> nomeDoProfessor }}</td>
					<td>{{$turma -> nome }}</td>
				</tr>

			@endforeach
		</tbody>
	</table>

@endsection