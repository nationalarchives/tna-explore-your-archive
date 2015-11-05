// Drop down style
jQuery('.chosen-select').select2();

// Mobile nav drop down
jQuery(".mobileNav .nav").hide();
jQuery(".box-shadow-menu").click(function () {
    jQuery(".mobileNav .nav").slideToggle(500);
});

// Equal heights
function applyEqualHeight() {
    var targets = ['#index-news  > div', '#index-events > div'];
    for (var i = 0; i < targets.length; i++) {
        var tar = targets[i];
        $tar = $(tar);
        $tar.removeProp('style');
        equalheight(tar);
    }

}

$window = $(window);

$window.on({
    load: applyEqualHeight('load'),
    resize: applyEqualHeight('resize')
});



window.addEventListener("orientationchange", function () {
    var loc = window.location.href;
    window.location = loc;
}, false);

// Add show more buttons for the events
(function($){
    size_li = $(".row .load_more").size();
    x = 8;
    $('.row .load_more:lt(' + x + ')').show();
    $('#loadMore').click(function () {
        x = (x + 4 <= size_li) ? x + 4 : size_li;
        $('.row .load_more:lt(' + x + ')').fadeIn("slow");
    });
    $('#showLess').click(function () {
        x = (x - 4 < 4) ? 4 : x - 4;
        $('.row .load_more').not(':lt(' + x + ')').fadeOut('slow');
    });
})(jQuery);

if(!!window.location.search && !!window.location.search.indexOf('result=success')) {
    window.location.hash = 'newsletter';
}