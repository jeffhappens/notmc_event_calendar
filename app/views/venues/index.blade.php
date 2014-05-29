@include('includes.head')
<body>
	@include('includes.header')
	<section class="sectionHeader">
		<div class="container clearfix">
			@foreach($venues as $venue)
				<img class="headerImg" src="http://www.neworleansonline.com/images/headers/listings/{{ $venue->LocationID }}.jpg" />
				<h2>{{ $venue->LocationName1 }}</h2>
			@endforeach
		</div>
	</section>
	@include('includes.footer')
	@include('includes.scripts')
</body>
</html>