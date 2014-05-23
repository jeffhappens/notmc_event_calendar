@if(Session::has('error'))
	<div class="alert">
		<div class="container">
			{{ Session::get('error') }}
		</div>
	</div>
@endif
@if(Session::has('success'))
	<div class="alert">
		<div class="container">
			{{ Session::get('success') }}
		</div>
	</div>
@endif