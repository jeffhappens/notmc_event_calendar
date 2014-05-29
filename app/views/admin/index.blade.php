@include('includes.head')
<body>
	@include('includes.header')
	<section>
		<div class="container">
			@if($venues)
				@foreach($venues as $venue)
					<div class="venue" style="position: relative;">
						<img data-error="http://www.neworleansonline.com/images/headers/listings/default.jpg" src="http://www.neworleansonline.com/images/headers/listings/{{ $venue->LocationID }}.jpg" />
						<p class="heading">{{ $venue->LocationName1 }}</p>
						<p>Upcoming Events:</p>
						<ul>
							<li><b>{{ $venue->event_name }}</b></li>
							<li><small>Description: {{ $venue->event_description }}</small></li>
							<li><small>Date: {{ date('m/d/Y', $venue->start_date) }} - {{ date('m/d/Y',$venue->end_date) }}</small></li>
						</ul>
					</div>
					<hr/>
				@endforeach
			@endif
		</div>
	</section>
	@include('includes.footer')
	@include('includes.scripts')
</body>
</html>