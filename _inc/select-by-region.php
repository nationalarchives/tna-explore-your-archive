<?php
/**
 * Select by region
 * TNA Web Team
 */

$args = array(
    'show_option_none' => __('Region'),
    'show_count' => 1,
    'orderby' => 'name',
    'echo' => 0,
    'hide_empty' => 1,
    'exclude' => array(3, 4, 1),
    'selected' => 0,
    'tab_index' => 0,
    'hide_if_empty' => false,
    'option_none_value' => -1,
);
?>

<?php $select = wp_dropdown_categories($args); ?>
<?php $replace = "<fieldset><legend>Select</legend><select class='chosen-select'$1 onchange='return this.form.submit()'></fieldset>"; ?>
<?php $select = preg_replace('#<select([^>]*)>#', $replace, $select); ?>

<?php echo $select; ?>
