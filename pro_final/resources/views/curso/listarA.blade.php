@extends('layout.app')
@section('content')

	<h1>selecione o periodo</h1>
	<form>
		<table class="table table-striped" >
			<tr align="center">
			 	@for ($i = 1; $i <= 8; $i++)
	    		 	<button type="submit"href="route()" class="btn btn" >	
	    		 		Período {{ $i }}
	    		 	</button >
				@endfor
			</tr>
		</table>
	</form>
@endsection