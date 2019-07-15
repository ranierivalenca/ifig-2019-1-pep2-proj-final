@extends('layout.app')
@section('content')

	<center><h1> Lista de cursos </h1></center>
	
	<table class="table table-striped">
		<thead class="">
			<tr align="center">	
				<th>Nossos cursos</th>
				<th>editar</th>
				<th>remover</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($curso as $curso)
				<tr align="center">
					<td>
						<a href="{{route('vizu',$curso->id)}}">
							{{ $curso->nomeDoCurso }}
						</a>
					</td>
				
					<td>
						<a href="{{route('edit',$curso->id)}}">
							edite	
						</a>
					</td>
					<td>
						<a href="{{route('curso.remover',$curso->id)}}">X</a> 
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>

@endsection