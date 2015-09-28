//jQuery to collapse the navbar on scroll
(function($) {
    var $header = $("header"),
        $window = $(window);
    $window.on('scroll touchstart', function() {
        if ($header.offset().top > 50 || $window.width() < 1025) {
            $header.addClass("smaller");
        } else {
            $header.removeClass("smaller");
        }
    });

    function resize() {
        if ($window.width() < 1024) {
            return $header.addClass('smaller');
        }

        $header.removeClass('smaller');
    }
    $window
        .resize(resize)
        .trigger('resize');
})(jQuery);

//jQuery for page scrolling feature - requires jQuery Easing plugin
var jQuery = jQuery.noConflict();
jQuery(function() {
    jQuery('a.page-scroll').bind('click', function(event) {
        var $anchor = jQuery(this);
        jQuery('html, body').stop().animate({
            scrollTop: jQuery($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});
