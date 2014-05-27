@include('includes.head')
<body>
	@include('includes.header')
	<section>
		<div class="container">
			<!-- <h1>Admin Homepage</h1> -->
			<!-- <h3>Users</h3> -->
			<!--
			@if($users)
				<ul>
					@foreach($users as $user)
						<li>
							@if($user->fName == 'admin')
							<b>{{ 'You' }}</b> - {{ $user->fName }}
							@else
							{{ $user->email }} - {{ $user->fName }} {{ $user->lName }}
							@endif
						</li>
					@endforeach
				</ul>
			@endif
			-->
			<h3>Venues</h3>
			@if($venues)
				@foreach($venues as $venue)
					<p><b>{{ $venue->LocationName1 }}</b></p>
					<p><img src="http://www.neworleansonline.com/images/headers/listings/{{ $venue->LocationID }}.jpg" /></p>
					<p>Upcoming Events:</p>
					<ul>
						<li><b>{{ $venue->event_name }}</b></li>
						<li><small>Description: {{ $venue->event_description }}</small></li>
						<li><small>Date: {{ date('m/d/Y', $venue->event_date) }} - {{ $venue->event_time }}</small></li>
					</ul>
					<hr/>
				@endforeach
			@endif
		</div>
	</section>
	@include('includes.footer')
	@include('includes.scripts')
</body>
</html>