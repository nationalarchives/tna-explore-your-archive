// Drop down style
var jQuery = jQuery.noConflict();
    jQuery('.chosen-select').select2();

// Mobile nav drop down
var jQuery = jQuery.noConflict();
    jQuery( ".mobileNav .nav" ).hide();
    jQuery(".box-shadow-menu").click(function(){
        jQuery(".mobileNav .nav").slideToggle(500);
});


