@include('includes.head')
<body>
	@include('includes.header')
	@include('includes.alerts')
	<section>
		<div class="container">
			{{ Form::open(['url' => '/login', 'method' => 'post']) }}
				<div class="form-group">
					{{ Form::label('username','Username') }}
					{{ Form::text('username') }}
				</div>
				<div class="form-group">
					{{ Form::label('password','Password') }}
					{{ Form::password('password') }}
				</div>
				<div class="form-group">
					{{ Form::submit('Log In') }}
				</div>
			{{ Form::close() }}
		</div>
	</section>
	@include('includes.footer')
	@include('includes.scripts')
</body>
</html>