// Drop down style
var jQuery = jQuery.noConflict();
    jQuery('.chosen-select').select2();

// Mobile nav drop down
var jQuery = jQuery.noConflict();
    jQuery( ".mobileNav .nav" ).hide();
    jQuery(".box-shadow-menu").click(function(){
        jQuery(".mobileNav .nav").slideToggle(500);
});

// Fade out loader background
(function(jQuery) {
    jQuery(window).load(function () {
        jQuery("div.pace").fadeOut(); // will first fade out the loading animation
        jQuery('div.loading-page').delay(650).fadeOut('slow');
    });
})(jQuery);

