@include('includes.head')
<body>
	@include('includes.header')
	@include('includes.alerts')
	<section>
		<div class="container">
			{{ Form::open(['url' => '/search', 'method' => 'post']) }}
				{{ Form::text('search') }}
				{{ Form::submit('Submit') }}
			{{ Form::close() }}
		</div>
	</section>
	@include('includes.footer')
	@include('includes.scripts')
</body>
</html>