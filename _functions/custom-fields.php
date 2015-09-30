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
        'page', // $page
        'normal', // $context
        'high'); // $priority
}
add_action('add_meta_boxes', 'add_custom_meta_box');

// Field Array
$prefix = 'custom_';
$custom_meta_fields = array(
    array(
        'label'=> 'Select Region',
        'desc'  => 'A description for the field.',
        'id'    => $prefix.'select',
        'type'  => 'select',
        'options' => array (
            'one' => array (
                'label' => 'Region One',
                'value' => 'one'
            ),
            'two' => array (
                'label' => 'Region Two',
                'value' => 'two'
            ),
            'three' => array (
                'label' => 'Region Three',
                'value' => 'three'
            )
        )
    ),
    array(
        'label'=> 'Event time',
        'desc'  => 'A description for the field.',
        'id'    => $prefix.'time',
        'type'  => 'text'
    ),array(
        'label'=> 'Fee',
        'desc'  => 'A description for the field.',
        'id'    => $prefix.'fee',
        'type'  => 'text'
    ),array(
        'label'=> 'Website URL',
        'desc'  => 'A description for the field.',
        'id'    => $prefix.'web_url',
        'type'  => 'text'
    ),array(
        'label'=> 'Location',
        'desc'  => 'A description for the field.',
        'id'    => $prefix.'location',
        'type'  => 'text'
    ),array(
        'label'=> 'Address',
        'desc'  => 'A description for the field.',
        'id'    => 'latlng',
        'type'  => 'text'
    ),
    array(
        'label' => 'Date',
        'desc'  => 'A description for the field.',
        'id'    => $prefix.'date_1',
        'type'  => 'date'
    ),array(
        'label' => 'Date',
        'desc'  => 'A description for the field.',
        'id'    => $prefix.'date_2',
        'type'  => 'date'
    ),array(
        'label' => 'Date',
        'desc'  => 'A description for the field.',
        'id'    => $prefix.'date_3',
        'type'  => 'date'
    ),array(
        'label' => 'Date',
        'desc'  => 'A description for the field.',
        'id'    => $prefix.'date_4',
        'type'  => 'date'
    ),array(
        'label' => 'Date',
        'desc'  => 'A description for the field.',
        'id'    => $prefix.'date_5',
        'type'  => 'date'
    ),array(
        'label' => 'Date',
        'desc'  => 'A description for the field.',
        'id'    => $prefix.'date_6',
        'type'  => 'date'
    ),array(
        'label' => 'Date',
        'desc'  => 'A description for the field.',
        'id'    => $prefix.'date_7',
        'type'  => 'date'
    ),array(
        'label' => 'Date',
        'desc'  => 'A description for the field.',
        'id'    => $prefix.'date_8',
        'type'  => 'date'
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
    if ('page' == $_POST['post_type']) {
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