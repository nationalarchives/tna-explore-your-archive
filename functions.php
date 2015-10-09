<?php

/* Enqueue scripts and styles */
function theme_name_scripts()
{
    wp_enqueue_style('main-style', get_template_directory_uri() . '/css/style.min.css');
    wp_enqueue_script('scrolling-nav', get_template_directory_uri() . '/js/scrolling-nav.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'theme_name_scripts');

/* Disable WordPress Admin Bar for all users but admins. */
show_admin_bar(false);

/* Enable navigation */
add_action('after_setup_theme', 'register_my_menu');
function register_my_menu()
{
    register_nav_menu('footer', __('Footer Menu', 'theme-slug'));
}

/* Enable support for the post thumbnails */
add_theme_support('post-thumbnails');

function myplugin_settings()
{
// Add tag metabox to page
    register_taxonomy_for_object_type('post_tag', 'page');
// Add category metabox to page
    register_taxonomy_for_object_type('category', 'page');
}

// Add to the admin_init hook of your theme functions.php file
add_action('init', 'myplugin_settings');

// Change the excerpt words size
function wp_trim_all_excerpt($text)
{
// Creates an excerpt if needed; and shortens the manual excerpt as well
    global $post;
    $raw_excerpt = $text;
    if ('' == $text) {
        $text = get_the_content('');
        $text = strip_shortcodes($text);
        $text = apply_filters('the_content', $text);
        $text = str_replace(']]>', ']]&gt;', $text);
    }

    $text = strip_tags($text, '<em><br><p>');
    $excerpt_length = apply_filters('excerpt_length', 20);
    $excerpt_more = apply_filters('excerpt_more', ' ' . '[...]');
    $text = wp_trim_words($text, $excerpt_length, $excerpt_more); //since wp3.3

    return apply_filters('wp_trim_excerpt', $text, $raw_excerpt); //since wp3.3
}

// Multiple excerpts
function excerpt($limit)
{
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt) >= $limit) {
        array_pop($excerpt);
        $excerpt = implode(" ", $excerpt) . '...';
    } else {
        $excerpt = implode(" ", $excerpt);
    }
    $excerpt = preg_replace('`\[[^\]]*\]`', '', $excerpt);
    return $excerpt;
}

function content($limit)
{
    $content = explode(' ', get_the_content(), $limit);
    if (count($content) >= $limit) {
        array_pop($content);
        $content = implode(" ", $content) . '...';
    } else {
        $content = implode(" ", $content);
    }
    $content = preg_replace('/\[.+\]/', '', $content);
    $content = apply_filters('the_content', $content);
    $content = str_replace(']]>', ']]&gt;', $content);
    return $content;
}

//Shorten the title of the events
function the_title_limit($length, $replacer = '...')
{
    $string = the_title('', '', FALSE);
    if (strlen($string) > $length)
        $string = (preg_match('/^(.*)\W.*$/', substr($string, 0, $length + 1), $matches) ? $matches[1] : substr($string, 0, $length)) . $replacer;
    echo $string;
}


// Add thumbnail size for the events
add_image_size('events-thumb', 260, 125);

// Add thumbnail size for the news
add_image_size('news-thumb', 354, 166);

/* Theme settings page menu */
require_once('_inc/theme-settings.php');
require_once('_inc/custom-post-types.php');
require_once('_inc/custom-fields.php');

/* Meta description */
function create_meta_desc()
{
    global $post;
    if (!is_single()) {
        return;
    }
    $meta = strip_tags($post->post_content);
    $meta = strip_shortcodes($meta);
    $meta = str_replace(array("\n", "\r", "\t"), ' ', $meta);
    $meta = substr($meta, 0, 125);
    echo "<meta name='description' content='$meta' />";
}

add_action('wp_head', 'create_meta_desc');
?>
