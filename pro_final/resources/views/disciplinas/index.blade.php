@extends('layout.app')
@section('content')

	<h1> Lista de Disciplinas </h1>
	<table class="table table-striped">
		<thead class="">
			<tr align="center">	
				<th>Nome</th>
				<th>Carga Horária</th>
				<th>Período</th>
                <th>Ações</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($disciplinas as $disciplina)

				<tr align="center">
					<td>{{$disciplina -> nome }}</td>
					<td>{{$disciplina -> carga_horaria }}</td>
					<td>{{$disciplina -> periodo }}</td>
                    <td>
                        <form method="POST" action="{{route('disciplina.delete', $disciplina->id)}}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button class="btn btn-danger" type="submit">Deletar</button>
                        <a class="btn btn-primary" href="{{route('disciplina.edit', $disciplina->id)}}">Editar</a>
                        </form>
                    </td>
				</tr>

			@endforeach
		</tbody>
	</table>

    <a href="{{route('disciplina.create')}}" class="btn btn-success">Nova Disciplina</a>

@endsection