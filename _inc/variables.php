<?php
/**
 *
 * Variables
 * TNA Web Team
 *
 */

    $page_id = get_the_ID();
    $current_date = date('d/m/Y');
    $start_date = get_post_meta($post->ID, 'custom_start_date', true);
    $end_date = get_post_meta($post->ID, 'custom_end_date', true);
    $time = get_post_meta($post->ID, 'custom_time', true);
    $region = get_post_meta($post->ID, 'custom_select', true);
    $price = get_post_meta($post->ID, 'custom_entry_price', true);
    $format_start_date = new DateTime($start_date);
    $format_end_date = new DateTime($end_date);
    $banner_image_id = get_post_thumbnail_id($post_to_use->ID);
    $link = get_post_meta($post->ID, 'custom_web_url', true);
    $date = new DateTime($start_date);
    $current_year = date('Y');
    $count_eventsargs = array(
        'numberposts' => -1,
        'date_query' => array(
            array(
                'year'  => $current_year
            ),
        ),
    );
    $countevents = get_posts($count_eventsargs);



    /* Enable feature image for the banner */
    $thumb_id = get_post_thumbnail_id();
    $thumb_url_array = wp_get_attachment_image_src($thumb_id, '', true);
    $thumb_url = $thumb_url_array[0];
?>