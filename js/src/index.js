// @codekit-prepend "../../bower_components/slick.js/slick/slick.min.js";

$(document).ready(function(){
  $('.slides').slick({
    fade: true,
    autoplay: true,
    pauseOnHover: false,
    lazyLoad: 'progressive'
  });
});
