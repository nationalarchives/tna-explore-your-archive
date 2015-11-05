<?php
/**
 * Select by region
 * TNA Web Team
 */

$featured_category_id = get_cat_ID('featured');
$news_category_id = get_cat_ID('news');
$uncategorized_category_id = get_cat_ID('uncategorized');

$args = array(
    'show_option_none' => __('Region'),
    'show_count' => 1,
    'orderby' => 'name',
    'echo' => 0,
    'hide_empty' => 1,
    'exclude' => array($featured_category_id, $news_category_id, $uncategorized_category_id),
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