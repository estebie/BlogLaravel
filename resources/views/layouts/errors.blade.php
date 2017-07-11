<!-- Error Layout  -->
@if (count($errors))
	<div class="alert">
	  	<span class="closebtn">&times;</span>  
	  	<strong>Warning!</strong> <br>
		@foreach ($errors->all() as $error)
			{{ $error}}
			<br>
		@endforeach
	</div>
@endif