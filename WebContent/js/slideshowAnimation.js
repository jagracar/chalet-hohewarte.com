// The slideshow animation object
var slideshow = {
    init : function() {
	// Define the classes that set the animation state
	slideshow.animationClass = "scrolling";
	slideshow.pausedClass = "paused";

	// Get the slideshow container
	slideshow.container = $(".slideshow-container");

	// Pause the scroll animation on mouse down events
	slideshow.container.on("mousedown touchstart", slideshow.pauseAnimation);

	// Continue the scroll animation on mouse up events
	slideshow.container.on("mouseup touchend", slideshow.continueAnimation);

	// Toogle the scroll animation on click events
	slideshow.container.on("click", slideshow.toogleAnimation);

	// Start the animation
	slideshow.container.trigger("click");
    },

    pauseAnimation : function(event) {
	// Check if the animation is active
	if (slideshow.container.hasClass(slideshow.animationClass)) {
	    // Check if the animation is already paused
	    if (slideshow.container.hasClass(slideshow.pausedClass)) {
		// Stop the animation completely
		slideshow.container.removeClass(slideshow.animationClass);
		slideshow.container.removeClass(slideshow.pausedClass);
	    } else {
		// Pause the animation
		slideshow.container.addClass(slideshow.pausedClass);
		slideshow.container.stop();
	    }
	}
    },

    continueAnimation : function(event) {
	// Check if the animation is paused
	if (slideshow.container.hasClass(slideshow.pausedClass)) {
	    // Continue the animation
	    slideshow.container.removeClass(slideshow.pausedClass);
	    slideshow.scrollAnimation();
	}
    },

    toogleAnimation : function(event) {
	// Check if the animation is active
	if (slideshow.container.hasClass(slideshow.animationClass)) {
	    // Check if the animation is paused
	    if (slideshow.container.hasClass(slideshow.pausedClass)) {
		// Continue the animation
		slideshow.container.removeClass(slideshow.pausedClass);
		slideshow.scrollAnimation();
	    } else {
		// Stop the animation
		slideshow.container.removeClass(slideshow.animationClass);
		slideshow.container.stop();
	    }
	} else {
	    // Start the animation
	    slideshow.container.addClass(slideshow.animationClass);
	    slideshow.scrollAnimation();
	}
    },

    scrollAnimation : function() {
	// Get the container maximum scroll left value
	var maxScrollLeft = slideshow.container.get(0).scrollWidth - slideshow.container.get(0).clientWidth;

	// Calculate the animation time
	var animationTime = (maxScrollLeft - slideshow.container.scrollLeft()) * 80000 / maxScrollLeft;

	// Start the scroll animation
	slideshow.container.animate({
	    scrollLeft : maxScrollLeft
	}, animationTime, 'linear', slideshow.removeClasses);
    },

    removeClasses : function() {
	slideshow.container.removeClass(slideshow.animationClass);
	slideshow.container.removeClass(slideshow.pausedClass);
    }
};

// To be run when the page finishes loading all the images
window.onload = function() {
    slideshow.init();
};
