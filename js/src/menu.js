
if(!(/Android|iPhone|iPad|iPod|BlackBerry|Windows Phone/i).test(navigator.userAgent || navigator.vendor || window.opera)){
    skrollr.init({
        forceHeight: false,
        smoothScrolling: true
    });
}
var jRes = jRespond([
    {
        label: 'small',
        enter: 1,
        exit: 640
    }
]);

jRes.addFunc({
    breakpoint: 'small',
    enter: function() {
        window.location="/menu-m";
    }
});