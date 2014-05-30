@include('includes.head')
<body>
	@include('includes.header')
	@include('includes.alerts')
	<section>
		<div class="container">
			<h2>Whoops!</h2>
			<p>{{ Config::get('strings.tokenExpired') }}</p>
		</div>
	</section>
	@include('includes.footer')
	@include('includes.scripts')
</body>
</html>