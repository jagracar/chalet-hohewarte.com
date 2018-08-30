// The scroll animation function
function scrollAnimation(element) {
    // Get the current scroll width
    var scrollWidth = element.get(0).scrollWidth;

    // Start the scroll animation
    element.animate({
	scrollLeft : scrollWidth
    }, (scrollWidth - element.scrollLeft()) * 50000 / scrollWidth, 'linear');
}

// The pause animation function
function pauseAnimation(event) {
    // Get the jQuery element
    var element = $(this);

    // Get the animation class names
    var animationClass = event.data.animationClass;
    var pausedClass = event.data.pausedClass;

    // Check if the animation is active
    if (element.hasClass(animationClass)) {
	// Check if the animation is already paused
	if (element.hasClass(pausedClass)) {
	    // Stop the animation completely
	    element.removeClass(animationClass);
	    element.removeClass(pausedClass);
	} else {
	    // Pause the animation
	    element.addClass(pausedClass);
	    element.stop();
	}
    }
}

// The continue animation function
function continueAnimation(event) {
    // Get the jQuery element
    var element = $(this);

    // Get the animation class names and the animation function
    var animationClass = event.data.animationClass;
    var pausedClass = event.data.pausedClass;
    var animationFunction = event.data.animationFunction;

    // Check if the animation is active and is paused
    if (element.hasClass(animationClass) && element.hasClass(pausedClass)) {
	// Continue the animation
	element.removeClass(pausedClass);
	animationFunction(element);
    }
}

// The toogle animation function
function toogleAnimation(event) {
    // Get the jQuery element
    var element = $(this);

    // Get the animation class names and the animation function
    var animationClass = event.data.animationClass;
    var pausedClass = event.data.pausedClass;
    var animationFunction = event.data.animationFunction;

    // Check if the animation is active
    if (element.hasClass(animationClass)) {
	// Check if the animation is paused
	if (element.hasClass(pausedClass)) {
	    // Continue the animation
	    element.removeClass(pausedClass);
	    animationFunction(element);
	} else {
	    // Stop the animation
	    element.removeClass(animationClass);
	    element.stop();
	}
    } else {
	// Start the animation
	element.addClass(animationClass);
	animationFunction(element);
    }
}

// To be run when the page finishes loading all the images
window.onload = function() {
    // Get the slideshow container
    var slideshowContainer = $(".slideshow-container");

    // Define the data that should be passed to the event handler functions
    var data = {
	pausedClass : "paused",
	animationClass : "scrolling",
	animationFunction : scrollAnimation
    };

    // Pause the scroll animation of mouse down events
    slideshowContainer.on("mousedown touchstart", data, pauseAnimation);

    // Continue the scroll animation on mouse up events
    slideshowContainer.on("mouseup touchend", data, continueAnimation);

    // Toogle the scroll animation on click events
    slideshowContainer.on("click", data, toogleAnimation);

    // Start the animation
    slideshowContainer.trigger("click");
};
