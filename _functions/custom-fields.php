<?php

if(is_admin()) {
    wp_enqueue_script( 'jquery-ui-datepicker', get_template_directory_uri() . '/js/jquery-ui-1.11.4/jquery-ui.js', array(), '1.0.0', true );
    wp_enqueue_style('jquery-ui-custom', get_template_directory_uri().'/js/jquery-ui-1.11.4/jquery-ui.css');

}

// Add the Meta Box
function add_custom_meta_box() {
    add_meta_box(
        'custom_meta_box', // $id
        'Add event details', // $title
        'show_custom_meta_box', // $callback
        'post', // $page
        'normal', // $context
        'high'); // $priority
}
add_action('add_meta_boxes', 'add_custom_meta_box');

// Field Array
$prefix = 'custom_';
$custom_meta_fields = array(
//    array(
//        'label'=> 'Select Region',
//        'desc'  => 'Please select the region for the event. ',
//        'id'    => $prefix.'select',
//        'type'  => 'select',
//        'options' => array (
//            'south_east' => array (
//                'label' => 'South East',
//                'value' => 'South East'
//            ),
//            'london' => array (
//                'label' => 'London',
//                'value' => 'London'
//            ),
//            'north_west' => array (
//                'label' => 'North West',
//                'value' => 'North West'
//            ),
//            'east_of_england' => array (
//                'label' => 'East of England',
//                'value' => 'East of England'
//            ),
//            'west_midlands' => array (
//                'label' => 'West Midlands',
//                'value' => 'West Midlands'
//            ),
//            'south_west' => array (
//                'label' => 'South West',
//                'value' => 'South West'
//            ),
//            'yorkshire_and_the_humber' => array (
//                'label' => 'Yorkshire and the Humber',
//                'value' => 'Yorkshire and the Humber'
//            ),'east_midlands' => array (
//                'label' => 'East Midlands',
//                'value' => 'East Midlands'
//            )
//        )
//    ),
//    array(
//        'label'=> 'Type the region',
//        'desc'  => 'e.g. East Midlands, London, South East England etc',
//        'id'    => $prefix.'region',
//        'type'  => 'text'
//    ),
    array(
        'label'=> 'Event time',
        'desc'  => 'Event time format is e.g. 18:00 - 21:00',
        'id'    => $prefix.'time',
        'type'  => 'text'
    ),array(
        'label'=> 'Entry price',
        'desc'  => 'e.g. £5 or FREE',
        'id'    => $prefix.'entry_price',
        'type'  => 'text'
    ),array(
        'label'=> 'Website URL',
        'desc'  => 'The URL of their website starting with http://',
        'id'    => $prefix.'web_url',
        'type'  => 'text'
    ),array(
        'label'=> 'Address',
        'desc'  => 'Fill in the full address.',
        'id'    => $prefix.'latlng',
        'type'  => 'text'
    ),array(
        'label' => 'Start date',
        'desc'  => 'Fill in the start date.',
        'id'    => $prefix.'start_date',
        'type'  => 'date'
    ),array(
        'label' => 'End date',
        'desc'  => 'Fill in the end date.',
        'id'    => $prefix.'end_date',
        'type'  => 'date'
    ),array(
        'label'=> 'Featured',
        'desc'  => 'For featured events please check this box.',
        'id'    => $prefix.'checkbox',
        'type'  => 'checkbox'
    )
);

// The Callback
function show_custom_meta_box() {
    global $custom_meta_fields, $post;
// Use nonce for verification
    echo '<input type="hidden" name="custom_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';

    // Begin the field table and loop
    echo '<table class="form-table">';
    foreach ($custom_meta_fields as $field) {
        // get value of this field if it exists for this post
        $meta = get_post_meta($post->ID, $field['id'], true);
        // begin a table row with
        echo '<tr>
                <th><label for="'.$field['id'].'">'.$field['label'].'</label></th>
                <td>';
        switch($field['type']) {
            // case items will go here
            // select
            case 'select':
                echo '<select name="'.$field['id'].'" id="'.$field['id'].'">';
                foreach ($field['options'] as $option) {
                    echo '<option', $meta == $option['value'] ? ' selected="selected"' : '', ' value="'.$option['value'].'">'.$option['label'].'</option>';
                }
                echo '</select><br /><span class="description">'.$field['desc'].'</span>';
                break;
            // text
            case 'text':
                echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="30" />
        <br /><span class="description">'.$field['desc'].'</span>';
                break;
            // date
            case 'date':
                echo '<input type="text" class="datepicker" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="30" />
			<br /><span class="description">'.$field['desc'].'</span>';
                break;
            // checkbox
            case 'checkbox':
                echo '<input type="checkbox" name="'.$field['id'].'" id="'.$field['id'].'" ',$meta ? ' checked="checked"' : '','/>
        <label for="'.$field['id'].'">'.$field['desc'].'</label>';
                break;
        } //end switch
        echo '</td></tr>';
    } // end foreach
    echo '</table>'; // end table
}

add_action('admin_head','add_custom_scripts');
function add_custom_scripts() {
    global $custom_meta_fields, $post;

    $output = '<script type="text/javascript">
                jQuery(function() {';

    foreach ($custom_meta_fields as $field) { // loop through the fields looking for certain types
        if($field['type'] == 'date')
            $output .= 'jQuery(".datepicker").datepicker();';
    }

    $output .= '});
        </script>';

    echo $output;
}

// Save the Data
function save_custom_meta($post_id) {
    global $custom_meta_fields;

    // verify nonce
    if (!wp_verify_nonce($_POST['custom_meta_box_nonce'], basename(__FILE__)))
        return $post_id;
    // check autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return $post_id;
    // check permissions
    if ('post' == $_POST['post_type']) {
        if (!current_user_can('edit_page', $post_id))
            return $post_id;
    } elseif (!current_user_can('edit_post', $post_id)) {
        return $post_id;
    }

    // loop through fields and save the data
    foreach ($custom_meta_fields as $field) {
        $old = get_post_meta($post_id, $field['id'], true);
        $new = $_POST[$field['id']];
        if ($new && $new != $old) {
            update_post_meta($post_id, $field['id'], $new);
        } elseif ('' == $new && $old) {
            delete_post_meta($post_id, $field['id'], $old);
        }
    } // end foreach
}
add_action('save_post', 'save_custom_meta');



?>