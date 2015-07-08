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
        window.location="/menu.html";
    }
});