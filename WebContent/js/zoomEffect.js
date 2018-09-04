// The zoom effect object
var zoomEffect = {
    init : function(settings) {
	// Read the settings
	zoomEffect.readSettings(settings);

	// Add the effect only if the window width is large enough
	if (window.innerWidth > zoomEffect.settings.minWidth) {
	    // Add the zoom container
	    zoomEffect.addContainer();

	    // Add the zoom effect to all the pictures
	    zoomEffect.addEffectToPictures();
	} else {
	    // Remove the zoom effect from all the pictures
	    zoomEffect.removeEffectFromPictures();
	}
    },

    readSettings : function(settings) {
	zoomEffect.settings = {
	    minWidth : 816
	};

	$.extend(zoomEffect.settings, settings);
    },

    addContainer : function() {
	// Return if the container exists already
	if ($(".zoom-container").length > 0) {
	    return;
	}

	// Create the container
	zoomEffect.container = $("<div></div>").addClass("zoom-container");

	// Append an empty figure to the container
	var figure = $("<figure></figure>").appendTo(zoomEffect.container);
	zoomEffect.image = $("<img></img>").appendTo(figure);
	zoomEffect.caption = $("<figcaption></figcaption>").appendTo(figure);

	// Fade out and clean the container when it's clicked
	zoomEffect.container.on("click", function() {
	    $(this).fadeOut("slow", zoomEffect.cleanContainer);
	});

	// Hide the container and append it to the body element
	zoomEffect.container.hide(0).appendTo("body");
    },

    addEffectToPictures : function() {
	// Get all the picture elements
	var pictures = $("picture");

	// Make clear that one can zoom on them
	pictures.addClass("zoomable-picture");

	// Zoom when one clicks on the picture
	pictures.on("click", zoomEffect.zoom);
    },

    removeEffectFromPictures : function() {
	// Get all the picture elements
	var pictures = $("picture");

	// Remove the zoom indicator
	pictures.removeClass("zoomable-picture");

	// Remove the zoom effect
	pictures.unbind("click", zoomEffect.zoom);
    },

    zoom : function(event) {
	// Get the clicked image
	var image = $(this).children("img");

	// Change the image path to use the large resolution image
	var path = image.attr("src").split("/");
	path[path.length - 2] = "large";

	// Update the container image
	zoomEffect.image.attr("src", path.join("/"));
	zoomEffect.image.attr("alt", image.attr("alt"));

	// Update the container caption
	zoomEffect.caption.html($(this).siblings("figcaption").html());

	// Show the container
	zoomEffect.container.fadeIn("slow");
    },

    cleanContainer : function() {
	// Clear the container image
	zoomEffect.image.attr("src", "");
	zoomEffect.image.attr("alt", "");

	// Clear the container caption
	zoomEffect.caption.html("");
    }
};

// To be run when the page finishes loading all the images
window.onload = function() {
    zoomEffect.init();
};

// To be run each time the window is resized
window.onresize = function() {
    zoomEffect.init();
};
