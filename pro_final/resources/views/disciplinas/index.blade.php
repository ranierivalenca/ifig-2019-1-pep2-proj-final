@extends('layout.app')
@section('content')

	<h1> Lista de Disciplinas </h1>
	<table class="table table-striped">
		<thead class="">
			<tr align="center">	
				<th>Nome</th>
				<th>Carga Horária</th>
				<th>Período</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($disciplinas as $disciplina)

				<tr align="center">
					<td>{{$disciplina -> nome }}</td>
					<td>{{$disciplina -> carga_horaria }}</td>
					<td>{{$disciplina -> periodo }}</td>
				</tr>

			@endforeach
		</tbody>
	</table>

@endsection