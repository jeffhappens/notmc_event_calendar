@include('includes.head')
<body>
	@include('includes.header')
	<section>
		<div class="container">
			<h1>Welcome {{ ucwords(Auth::user()->fName) }} {{ ucwords(Auth::user()->lName) }}</h1>
			<h3>My Venues</h3>
			<p>Below is a listing of all your venues.</p>
			@if($venues)
			<ul>
			@foreach($venues as $venue)
				<li><a href="/venue/{{ $venue->LocationID }}">{{ $venue->LocationName1 }}</a></li>
			@endforeach
			</ul>
			@endif
			<h3>My Events</h3>
		</div>
	</section>
	@include('includes.footer')
	@include('includes.scripts')
</body>
</html>