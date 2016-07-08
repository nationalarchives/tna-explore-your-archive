<?php
/**
 * Theme settings
 * TNA Web Team
 */

add_action('admin_enqueue_scripts', 'options_enqueue_scripts');

function register_my_fields()
{
    register_setting('logo_options_group', 'logo_options_group');
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
    register_setting('logo_options_group', "footer_link_one");
    register_setting('logo_options_group', "footer_link_one_desc");
    register_setting('logo_options_group', "footer_copyright");
    register_setting('logo_options_group', "newsletter");
    register_setting('logo_options_group', "link_to_us");
    register_setting('logo_options_group', "eya_archive_title");
}

add_action('admin_init', 'register_my_fields');


function add_logo_page_to_settings()
{
    add_theme_page('Theme Logo',
        'Theme Settings',
        'manage_options',
        'edit_eya_theme',
        'logo_edit_page');
}

add_action('admin_menu', 'add_logo_page_to_settings');

function logo_edit_page()
{ ?>

    <div class="row">
        <div class="col-xs-12 col-sm-8">
            <form method="post" enctype="multipart/form-data" action="options.php">
                <?php settings_fields('logo_options_group'); // this will come later
                do_settings_sections('logo_options_group'); // and this too...
                ?> <p class="submit">
                    <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>"/></p></form>
        </div>
    </div>

<?php }

function add_options_to_page()
{
    add_settings_section(
        'custom_logo',
        'Theme settings',
        'display_eya_fields',
        'logo_options_group');
    $args = array(); // pass arguments to add_settings_array to use in fields
    add_settings_field('logo_url', '', 'logo_upload_url', 'logo_options_group', 'custom_logo', $args);
    add_settings_field('eya_event_date,', 'EYA event date', 'display_eya_fields');
    add_settings_field('eya_title', 'EYA title', 'display_eya_fields');
    add_settings_field('eya_desc', 'EYA description', 'display_eya_fields');
    add_settings_field('eya_headline_section_one', 'EYA headline one', 'display_eya_fields');
    add_settings_field('eya_headline_section_two', 'EYA headline two', 'display_eya_fields');
    add_settings_field('eya_headline_section_three', 'EYA headline three', 'display_eya_fields');
    add_settings_field('eya_headline_section_four', 'EYA headline four', 'display_eya_fields');
    add_settings_field('twitter_url', 'Twitter Profile Url', 'display_eya_fields');
    add_settings_field('facebook_url', 'Facebook Profile Url', 'display_eya_fields');
    add_settings_field('pinterest_url', 'Pinterest Profile Url', 'display_eya_fields');
    add_settings_field('newsletter', 'Newsletter', 'display_eya_fields');
    add_settings_field('link_to_us', 'Link to us', 'display_eya_fields');
    add_settings_field('footer_info', 'Footer Information', 'display_eya_fields');
    add_settings_field('footer_link_one', 'Footer Link One', 'display_eya_fields');
    add_settings_field('footer_link_one_description', 'Footer Link One Description', 'display_eya_fields');
    add_settings_field('footer_copyright', 'Footer Copyright', 'display_eya_fields');
    add_settings_field('eya_archive_title', 'Archive title', 'display_eya_fields');

}

add_action('admin_init', 'add_options_to_page');

function logo_upload_url($args)
{
    $options = get_option('logo_options_group');
    ?>
    <div class="row">
        <div class="col-xs-6 col-sm-2"><strong>Theme Logo:</strong></div>
        <div class="col-xs-6 col-sm-3"><input id="url" type="text" size="36" value="<?php echo $options['url']; ?>"
                                              name="logo_options_group[url]"/> <input id="upload_logo_button"
                                                                                      type="button"
                                                                                      value="Upload logo"/> <br/>Enter
            an URL or upload an image from the media
        </div>
    </div>


    <?php

    if ($options['url']) {
        echo "<br><br><img src='" . $options['url'] . "' />";
    }
}

function display_eya_fields()
{
    ?>
    <div class="row">
        <div class="col-xs-6 col-sm-2"><strong>Date:</strong></div>
        <div class="col-xs-6 col-sm-3"><input type="text" name="eya_event_date" id="eya_event_date"
                                              value="<?php echo get_option('eya_event_date'); ?>"/></div>
    </div>

    <div class="row">
        <div class="col-xs-6 col-sm-2"><strong>Title:</strong></div>
        <div class="col-xs-6 col-sm-3"><input type="text" name="eya_title" id="eya_title"
                                              value="<?php echo get_option('eya_title'); ?>"/></div>
    </div>

    <div class="row">
        <div class="col-xs-6 col-sm-2"><strong>Description:</strong></div>
        <div class="col-xs-6 col-sm-3"><textarea type="text" name="eya_desc"
                                                 id="eya_desc"><?php echo get_option('eya_desc'); ?></textarea></div>
    </div>

    <div class="row">
        <div class="col-xs-6 col-sm-2"><strong>Archive page title:</strong></div>
        <div class="col-xs-6 col-sm-3"><input type="text" name="eya_archive_title" id="eya_archive_title"
                                              value="<?php echo get_option('eya_archive_title'); ?>"/></div>
    </div>

    <div class="row">
        <div class="col-xs-6 col-sm-2"><strong>Headline section one:</strong></div>
        <div class="col-xs-6 col-sm-3"><input type="text" name="eya_headline_section_one" id="eya_headline_section_one"
                                              value="<?php echo get_option('eya_headline_section_one'); ?>"/></div>
    </div>

    <div class="row">
        <div class="col-xs-6 col-sm-2"><strong>Headline section two:</strong></div>
        <div class="col-xs-6 col-sm-3"><input type="text" name="eya_headline_section_two" id="eya_headline_section_two"
                                              value="<?php echo get_option('eya_headline_section_two'); ?>"/></div>
    </div>

    <div class="row">
        <div class="col-xs-6 col-sm-2"><strong>Headline section three:</strong></div>
        <div class="col-xs-6 col-sm-3"><input type="text" name="eya_headline_section_three"
                                              id="eya_headline_section_three"
                                              value="<?php echo get_option('eya_headline_section_three'); ?>"/></div>
    </div>

    <div class="row">
        <div class="col-xs-6 col-sm-2"><strong>Headline section four:</strong></div>
        <div class="col-xs-6 col-sm-3"><input type="text" name="eya_headline_section_four"
                                              id="eya_headline_section_four"
                                              value="<?php echo get_option('eya_headline_section_four'); ?>"/></div>
    </div>

    <div class="row">
        <div class="col-xs-6 col-sm-2"><strong>Twitter:</strong></div>
        <div class="col-xs-6 col-sm-3"><input type="text" name="twitter_url" id="twitter_url"
                                              value="<?php echo get_option('twitter_url'); ?>"/></div>
    </div>

    <div class="row">
        <div class="col-xs-6 col-sm-2"><strong>Facebook:</strong></div>
        <div class="col-xs-6 col-sm-3"><input type="text" name="facebook_url" id="facebook_url"
                                              value="<?php echo get_option('facebook_url'); ?>"/></div>
    </div>

    <div class="row">
        <div class="col-xs-6 col-sm-2"><strong>Pinterest:</strong></div>
        <div class="col-xs-6 col-sm-3"><input type="text" name="pinterest_url" id="pinterest_url"
                                              value="<?php echo get_option('pinterest_url'); ?>"/></div>
    </div>

    <div class="row">
        <div class="col-xs-6 col-sm-2"><strong>Newsletter:</strong></div>
        <div class="col-xs-6 col-sm-3"><input type="text" name="newsletter" id="newsletter"
                                              value="<?php echo get_option('newsletter'); ?>"/></div>
    </div>

    <div class="row">
        <div class="col-xs-6 col-sm-2"><strong>Link to us:</strong></div>
        <div class="col-xs-6 col-sm-3"><input type="text" name="link_to_us" id="link_to_us"
                                              value="<?php echo get_option('link_to_us'); ?>"/></div>
    </div>

    <div class="row">
        <div class="col-xs-6 col-sm-2"><strong>Footer Link:</strong></div>
        <div class="col-xs-6 col-sm-3"><input type="text" name="footer_link_one" id="footer_link_one"
                                              value="<?php echo get_option('footer_link_one'); ?>"/></div>

    </div>
    <div class="row">
        <div class="col-xs-6 col-sm-2"><strong>Footer Link Description:</strong></div>
        <div class="col-xs-6 col-sm-3"><input type="text" name="footer_link_one_desc" id="footer_link_one_desc"
                                              value="<?php echo get_option('footer_link_one_desc'); ?>"/></div>
    </div>

    <div class="row">
        <div class="col-xs-6 col-sm-2"><strong>Copyright:</strong></div>
        <div class="col-xs-6 col-sm-3"><textarea name="footer_copyright"
                                                 id="footer_copyright"><?php echo get_option('footer_copyright'); ?></textarea>
        </div>
    </div>

    <?php
}

function my_admin_scripts()
{
    wp_enqueue_script('theme-settings', get_template_directory_uri() . '/js/theme-settings.js', array(), '1.0');
    wp_enqueue_script('media-upload');
    wp_enqueue_script('thickbox');

}

function my_admin_styles()
{
    wp_enqueue_style('thickbox');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap-3.3.5.css');
    wp_enqueue_style('theme-settings', get_template_directory_uri() . '/css/theme-settings.css');
}

if (isset($_GET['page']) && $_GET['page'] == 'edit_eya_theme') {
    add_action('admin_print_scripts', 'my_admin_scripts');
    add_action('admin_print_styles', 'my_admin_styles');
}

function get_site_logo()
{
    $option = get_option("logo_options_group");
    if ($option['url']) {
        echo "<img src='" . $option['url'] . "' />";
    } else {
        echo "Sorry, No logo selected";
    }
}

add_shortcode('sitelogo', 'get_site_logo');

?>