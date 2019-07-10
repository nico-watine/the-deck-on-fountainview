// IMPORTS

// @codekit-prepend "../../bower_components/foundation/js/foundation/foundation.magellan.js";
// @codekit-prepend "../../bower_components/skrollr/dist/skrollr.min.js";

// -----------------------------------


if(!(/Android|iPhone|iPad|iPod|BlackBerry|Windows Phone/i).test(navigator.userAgent || navigator.vendor || window.opera)){
	skrollr.init({
		forceHeight: false,
		smoothScrolling: true
	});
}

// INITIALIZE FOUNDATION SCRIPTS (INCLUDES EDITS FOR MAGELLAN ON MENU PAGE) ::
$(document).foundation({
	"magellan-expedition": {
		active_class: 'active', // specify the class used for active sections
		threshold: 0, // how many pixels until the magellan bar sticks, 0 = auto
		destination_threshold: 0, // pixels from the top of destination for it to be considered active
		throttle_delay: 50, // calculation throttling to increase framerate
		fixed_top: 0, // top distance in pixels assigend to the fixed element on scroll
		offset_by_height: true // whether to offset the destination by the expedition height. Usually you want this to be true, unless your expedition is on the side.
	}
});
