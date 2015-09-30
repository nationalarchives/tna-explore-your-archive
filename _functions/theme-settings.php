<?php
add_action('admin_enqueue_scripts', 'options_enqueue_scripts');

function register_my_fields() {
    register_setting( 'logo_options_group', 'logo_options_group');
    register_setting('logo_options_group', "eya_event_date");
    register_setting('logo_options_group', "eya_title");
    register_setting('logo_options_group', "eya_desc");
    register_setting('logo_options_group', "eya_headline_section_one");
    register_setting('logo_options_group', "eya_headline_section_two");
    register_setting('logo_options_group', "eya_headline_section_three");
    register_setting('logo_options_group', "eya_headline_section_four");
    register_setting('logo_options_group', "twitter_url");
    register_setting('logo_options_group', "facebook_url");
    register_setting('logo_options_group', "pinterest_url");
    register_setting('logo_options_group', "footer_info");
    register_setting('logo_options_group', "footer_copyright");
     }
add_action( 'admin_init', 'register_my_fields' );


function add_logo_page_to_settings() {
    add_theme_page('Theme Logo',
        'Theme Settings',
        'manage_options',
        'edit_logo',
        'logo_edit_page');
        }
add_action('admin_menu', 'add_logo_page_to_settings');

function logo_edit_page() {  ?>
    <div class="section panel">
    <h1>Custom Logo Options</h1>
    <form method="post" enctype="multipart/form-data" action="options.php">
        <?php settings_fields('logo_options_group'); // this will come later
        do_settings_sections('logo_options_group'); // and this too...
        ?> <p class="submit">
            <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" /></p></form>
<?php  }

function add_options_to_page(){
    add_settings_section(
        'custom_logo',
        'Customize the site logo:',
        'display_eya_fields',
        'logo_options_group' );
    $args=array(); // pass arguments to add_settings_array to use in fields
    add_settings_field( 'logo_url', 'Logo Url', 'logo_upload_url' , 'logo_options_group', 'custom_logo', $args );
    add_settings_field('eya_event_date,','EYA event date', 'display_eya_fields');
    add_settings_field('eya_title', 'EYA title', 'display_eya_fields');
    add_settings_field('eya_desc', 'EYA description', 'display_eya_fields');
    add_settings_field('eya_headline_section_one', 'EYA headline one', 'display_eya_fields');
    add_settings_field('eya_headline_section_two', 'EYA headline two', 'display_eya_fields');
    add_settings_field('eya_headline_section_three', 'EYA headline three', 'display_eya_fields');
    add_settings_field('eya_headline_section_four', 'EYA headline four', 'display_eya_fields');
    add_settings_field('twitter_url', 'Twitter Profile Url', 'display_eya_fields' );
    add_settings_field('facebook_url', 'Facebook Profile Url', 'display_eya_fields');
    add_settings_field('pinterest_url', 'Pinterest Profile Url', 'display_eya_fields');
    add_settings_field('footer_info', 'Footer Information', 'display_eya_fields');
    add_settings_field('footer_copyright', 'Footer Copyright', 'display_eya_fields');

}
add_action('admin_init','add_options_to_page');

function logo_upload_url($args){
$options=get_option('logo_options_group') ;
?><br>
    <label for="upload_image">
    <input id="url" type="text" size="36" value="<?php echo $options['url']; ?>" name="logo_options_group[url]" />
    <input id="upload_logo_button" type="button" value="Upload logo" />
    <br />Enter an URL or upload an image for the banner.
    </label>


<?php

    if($options['url']){
     echo "<br><br><img src='". $options['url'] ."' />"; }
    }

function display_eya_fields()
{
    ?>
    Event date: <input type="text" name="eya_event_date" id="eya_event_date" value="<?php echo get_option('eya_event_date'); ?>"/><br />

    EYA title:<input type="text" name="eya_title" id="eya_title" value="<?php echo get_option('eya_title'); ?>"/><br />

    EYA description: <textarea type="text" name="eya_desc" id="eya_desc"><?php echo get_option('eya_desc'); ?></textarea><br />

    EYA headline section one: <input type="text" name="eya_headline_section_one" id="eya_headline_section_one" value="<?php echo get_option('eya_headline_section_one'); ?>"/><br />

    EYA headline section one:<input type="text" name="eya_headline_section_two" id="eya_headline_section_two" value="<?php echo get_option('eya_headline_section_two'); ?>"/><br />

    EYA headline section one:<input type="text" name="eya_headline_section_three" id="eya_headline_section_three" value="<?php echo get_option('eya_headline_section_three'); ?>"/><br />

    EYA headline section one:<input type="text" name="eya_headline_section_four" id="eya_headline_section_four" value="<?php echo get_option('eya_headline_section_four'); ?>"/><br />

    Twitter: <input type="text" name="twitter_url" id="twitter_url" value="<?php echo get_option('twitter_url'); ?>"/><br />

    Facebook: <input type="text" name="facebook_url" id="facebook_url" value="<?php echo get_option('facebook_url'); ?>"/><br />

    Pinterest:<input type="textar" name="pinterest_url" id="pinterest_url" value="<?php echo get_option('pinterest_url'); ?>"/><br />

    Footer info: <textarea name="footer_info" id="footer_info"><?php echo get_option('footer_info'); ?></textarea><br />

    Copyright: <textarea name="footer_copyright" id="footer_copyright"><?php echo get_option('footer_copyright'); ?></textarea>
    <?php
}
function my_admin_scripts() {
    wp_enqueue_script( 'theme-settings', get_template_directory_uri() .'/js/theme-settings.js', array(), '1.0' );
    wp_enqueue_script('media-upload');
    wp_enqueue_script('thickbox');

    }
function my_admin_styles() {
wp_enqueue_style('thickbox');}

if (isset($_GET['page']) && $_GET['page'] == 'edit_logo') {
add_action('admin_print_scripts', 'my_admin_scripts');
add_action('admin_print_styles', 'my_admin_styles');
}

function get_site_logo(){
$option=get_option("logo_options_group");
if($option['url']){
echo "<img src='". $option['url'] ."' />";
} else {echo "Sorry, No logo selected";}}
add_shortcode('sitelogo', 'get_site_logo');

?>