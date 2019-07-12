// @codekit-prepend "../../bower_components/skrollr/dist/skrollr.min.js";

if(!(/Android|iPhone|iPad|iPod|BlackBerry|Windows Phone/i).test(navigator.userAgent || navigator.vendor || window.opera)){
	skrollr.init({
		forceHeight: false,
		smoothScrolling: true
	});
}
