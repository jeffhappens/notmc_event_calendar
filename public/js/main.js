$(function() {
	$.ajax({
		type: 'POST',
		url: '/admin',
		dataType: 'JSON',
		success: function(data) {
			console.log(data);
		}
	})

})