$(function() {
	$.ajax({
		type: 'POST',
		url: '/admin',
		dataType: 'JSON',
		success: function(data) {
			console.log(data);
		}
	})

	$('img[data-error]').error(function() {
		var error = $(this).data('error');
		if(this.src !== error) {
			this.src = error;
		}
	});


})