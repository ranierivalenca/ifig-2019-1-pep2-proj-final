@extends('layout.app')
@section('content')
	<div class="container" >
		<form action="{{ route('criarProfessor') }}"" method="POST" >
		@csrf
			<center>
				<div class="form-group" > 
					<label>Nome</label>
					<input type="text" name="nome">
					<br>
					<label>CPF</label>
					<input type="text" name="cpf">
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