@extends('layout.app')
@section('content')

	<h1>selecione o periodo</h1>
	<form>
	@csrf
		<input type="hidden" name="curso_id" value="{{$curso_id}}">
		<table class="table table-striped" >
			<tr align="center">
			 	@for ($i = 1; $i <= 8; $i++)
	    		 	<button type="submit" href="route('vizu.listar',$i)" class="btn btn" >	
	    		 		Período {{ $i }}
	    		 	</button >
				@endfor
			</tr>
		</table>
	</form>
@endsection