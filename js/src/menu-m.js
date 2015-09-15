// IMPORTS
	// PREPENDS ::
		// FOUNDATIONS.JS
		// FOUNDATION.ACCORDIAN.JS
		// FOUNDATION.TOPBAR.JS
		// JRESPOND.MIN.JS

$(document).foundation({});

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