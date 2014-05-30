@include('includes.head')
<body>
	@include('includes.header')
	@include('includes.alerts')
	<section>
		<div class="container">
			<h2>Create an Account</h2>
			{{ Form::open(['url' => '/register', 'method' => 'post']) }}
				<div class="form-group">
					{{ Form::label('email','Email Address') }}
					{{ Form::text('email') }}
				</div>
				<div class="form-group">
					{{ Form::label('password','Password') }}
					{{ Form::password('password') }}
				</div>
				<div class="form-group">
					{{ Form::submit('Register') }}
				</div>
			{{ Form::close() }}
		</div>
	</section>
	@include('includes.footer')
	@include('includes.scripts')
</body>
</html>