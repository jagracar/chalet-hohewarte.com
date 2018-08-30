window.onload = function() {	
	var container = $(".slideshow-container");
	
	container.animate({scrollLeft: 5500}, 50000, 'linear');
	
	container.click(function() {
		console.log($(this).scrollLeft());
	})
};
