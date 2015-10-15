<?php
/**
 * Custom post types
 * TNA Web Team
 */
function create_events_cpt()
{
    register_post_type('latest-activity',
        array(
            'public' => true,
            'hierachical' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-welcome-widgets-menus',
            'supports' => array('title', 'latest-activity', 'page-attributes', 'custom-fields', 'thumbnail'),
            'labels' => array(
                'name' => __('Latest Activity'),
                'singular_name' => __('Activity'),
                'add_new' => __('Add New'),
                'add_new_item' => __('Add New Activity'),
                'edit' => __('Edit'),
                'edit_item' => __('Edit Activity'),
                'new_item' => __('New Activity'),
                'view' => __('View Exhibition'),
                'view_item' => __('View Activity'),
                'search_items' => __('Search Activities'),
                'not_found' => __('No Activity found'),
                'not_found_in_trash' => __('No Activities found in Trash'),
                'parent' => __('Parent Activity'),
            ),
        )
    );

    register_post_type('news',
        array(
            'public' => true,
            'hierachical' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-welcome-widgets-menus',
            'supports' => array('title', 'news', 'page-attributes', 'custom-fields', 'thumbnail', 'editor'),
            'labels' => array(
                'name' => __('News'),
                'singular_name' => __('News'),
                'add_new' => __('Add News'),
                'add_new_item' => __('Add News'),
                'edit' => __('Edit'),
                'edit_item' => __('Edit News'),
                'new_item' => __('News'),
                'view' => __('View News'),
                'view_item' => __('View News'),
                'search_items' => __('Search News'),
                'not_found' => __('No News found'),
                'not_found_in_trash' => __('No News found in Trash'),
                'parent' => __('Parent News'),
            ),
        )
    );
}

add_action('init', 'create_events_cpt');

/** Add Category to Latest Activity */
add_action('init', 'add_category_taxonomy_to_latest_activity');
function add_category_taxonomy_to_online_exhibitions()
{
    register_taxonomy_for_object_type('category', 'latest-activity');
}

?>