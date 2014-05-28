@include('includes.head')
<body>
	@include('includes.header')
	@include('includes.alerts')
	<section>
		<div class="container">
			<ul>
			@foreach($results as $result)
				<li>
					<h4>{{ $result->LocationName1 }}</h4>
					<p>{{ $result->ShortDescription }}</p>
				</li>
			@endforeach
			</ul>
		</div>
	</section>
	@include('includes.footer')
	@include('includes.scripts')
</body>
</html>