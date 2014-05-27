@include('includes.head')
<body>
	@include('includes.header')
	<section>
		<div class="container">
			<h1>Admin Homepage</h1>
			<h2>Some Tasks</h2>
			<ul>
				<li><a href="/admin/users/add">Add a user</a></li>
			</ul>
		</div>
	</section>
	@include('includes.footer')
	@include('includes.scripts')
</body>
</html>