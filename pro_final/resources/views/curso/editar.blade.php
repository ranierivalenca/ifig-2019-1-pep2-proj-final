@extends('layout.app')
@section('content')
	<center>
		<form  action="{{ route('editar') }}" method="POST">
		 @csrf
		 <div  class="form-group" >
		 	<input type="hidden" name="curso_id" value="{{ $editarCurso->id }}" >
		 	<h1>edite o nome do curso</h1>
		 	<br>
			<input  class="form-group" type="text" name="nomeDoCurso">
			<br>
			<input type="submit" value="Editar Curso" class="btn btn-button" >
		 </div>
		</form>
	</center>

@endsection