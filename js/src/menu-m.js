// IMPORTS

// @codekit-prepend "../../bower_components/foundation/js/foundation/foundation.js";
// @codekit-prepend "../../bower_components/foundation/js/foundation/foundation.accordion.js";
// @codekit-prepend "../../bower_components/foundation/js/foundation/foundation.topbar.js";
// @codekit-prepend "../../bower_components/jrespond/js/jRespond.min.js";

$(document).foundation({
	accordion: {
		multi_expand: true
	}
});

var jRes = jRespond([
	{
		label: 'medium',
		enter: 641,
		exit: 10000
	}
]);

jRes.addFunc({
	breakpoint: 'medium',
	enter: function() {
		window.location="/menu";
	}
});
