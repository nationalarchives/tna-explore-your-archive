jQuery(document).ready(function() {
    jQuery('#upload_logo_button').click(function() {
        formfield = jQuery('#url').attr('name');
        tb_show('', 'media-upload.php?type=image&TB_iframe=true');
        return false;});
    window.send_to_editor = function(html) {
        imgurl = jQuery('img',html).attr('src');
        jQuery('#url').val(imgurl);
        tb_remove(); }});

