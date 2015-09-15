// IMPORTS
	// 	PREPENDS ::
	
	// SLICK-SLIDER 
	// /bower_components/slick.js/slick/slick.min.js

// INDEX.PHP INITIALIZE SLICK-SLIDER ::
$(document).ready(function(){
  $('.slides').slick({
    fade: true,
    autoplay: true,
    pauseOnHover: false,
    lazyLoad: 'progressive'
  });
});