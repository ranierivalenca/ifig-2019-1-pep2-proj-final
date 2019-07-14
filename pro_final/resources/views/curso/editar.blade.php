@extends('layout.app')
@section('content')

	<form  action="{{ route('editar') }}" method="POST">
	 @csrf
	 <input type="hidden" name="curso_id" value="{{ $editarCurso->id }}" >
		<input type="text" name="nomeDoCurso">
		<input type="submit" value="Editar Curso">
	</form>

@endsection