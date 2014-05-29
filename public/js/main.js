$(function() {


	var $headerImg = $('img.headerImg');
	var $defaultHeaderImg = new Image();
	$defaultHeaderImg.src = 'http://www.neworleansonline.com/images/headers/listings/default.jpg';

	$headerImg.on('error', function() {
		$(this).attr('src',$defaultHeaderImg.src);
	});
	$headerImg.on('load', function() {
		$(this).fadeIn();
	});
	
})