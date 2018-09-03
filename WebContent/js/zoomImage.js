// The zoom animation function
function zoomAnimation(element) {
	// Get the image element
	var image = $(this).children("img");
	
	var div = $("<div></div>");
	div.css({
		position: "absolute",
		width: "100%",
		height: "100%",
		background: "grey"
	})
	$("body").prepend(div)
	
	image_path = image.attr("src")
}

// To be run when the page finishes loading all the images
window.onload = function() {
	// Get all the picture elements
	var pictures = $("picture");
	console.log(pictures.length);
	
	// Add the zoom effect on click events
	pictures.on("click", zoomAnimation);
};
