<?php
/**
 * Select by region
 * TNA Web Team
 */

//Include Variables
include('variables.php');

?>
<fieldset><legend>Select</legend>
<select name="region" class='chosen-select' onchange="this.form.submit()">
    <option value="region">Region</option>
    <?php
        /* Variables */
        $region = $_GET['region'];
        $featured_category_id = get_cat_ID('featured');
        $news_category_id = get_cat_ID('news');

        /* Set the arguments for categories */
        $args2 = array(
            'exclude' => array($news_category_id,$featured_category_id), //Display all posts exclude these categories
        );

        /* Get the categories with the right parameters */
        $categories = get_categories($args2);

        /* Check the category's slug and assign it's category name to the $cat variable */
        foreach ($categories as $category) : ?>
            <?php if($region == $category->slug) : ?>
                <?php $cat = $category->cat_name; // This variable is assigned to the wp_query in events_by_date and events_by_featured pages?>
            <?php endif; ?>
        <?php endforeach; ?>

    <?php foreach ($categories as $category) {  // Populate the dropdown list with the right categories ?>
            <option value="<?php echo $category->slug; ?>"><?php echo $category->cat_name?></option>
    <?php } ?>
</select>

<!-- Display Show all button if REGION is not empty -->
<?php if($region != '') :?>
    <div class="clearfix"><br/></div>
    <a class="buttonShowAll" href="/">Show all</a>
<?php endif; ?>