@include('includes.head')
<body>
	@include('includes.header')
	<section>
		<div class="container">
			<h1>Admin Homepage</h1>
			<h4>Current Users</h4>
			@if($users)
				<ul>
					@foreach($users as $user)
						<li>
							@if($user->fName == 'admin')
							{{ 'You' }} - {{ $user->fName }}
							@else
							{{ $user->email }} - {{ $user->fName }} {{ $user->lName }}
							@endif
						</li>
					@endforeach
				</ul>
			@endif
		</div>
	</section>
	@include('includes.footer')
	@include('includes.scripts')
</body>
</html>