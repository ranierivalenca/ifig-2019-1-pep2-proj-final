@extends('layout.app')
@section('content')
	<div class="container" >
	
		<form action="{{ route('criarCurso') }}"" method="POST" >
		@csrf
			<center>
				<div class="form-group" > 
					<label>Nome</label>
					<input type="text" name="nome">
					<br>
					<label>Matrícula</label>
					<input type="number" name="periodos">
					<br>
					
					<input type="submit" value="cadastrar estudante">
				</div>
			</center>
		</form>
	</div>
@endsection