@extends('layout.app')
@section('content')
	<div class="container" >
	
		<form action="{{ route('criarEstudante') }}"" method="POST" >
		@csrf
			<center>
				<div class="form-group" > 
					<label>Nome</label>
					<input type="text" name="nome">
					<br>
					<label>Matrícula</label>
					<input type="text" name="matricula">
					<br>
					<label>E-mail</label>
					<input type="text" name="email">
					<br>
					<label>Senha</label>
					<input type="text" name="senha">
					<br>
					
					<input type="submit" value="cadastrar estudante">
				</div>
			</center>
		</form>
	</div>
@endsection