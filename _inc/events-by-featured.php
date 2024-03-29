<?php
/**
 * Events by featured category on home page
 * TNA Web Team
 */

if (get_query_var('page')) $paged = get_query_var('page');

$featured_category_id = get_cat_ID('featured');

// WP_Query arguments
$args = array(
    'post_type' => 'post',
    'cat' => $featured_category_id,
    'meta_key' => $custom_end_date,
    'meta_value' => $current_date,
    'meta_compare' => '>=',
    'category_name' => $cat,
    'posts_per_page' => 4,
    'date_query' => array(
        array(
            'year'  => $current_year
        ),
    ),
);

$query = new WP_Query($args);

// The Loop
if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();

        //Include Variables
        include('variables.php');
        ?>
        <div class="col-sm-6 col-md-3">
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                <div class="thumbnail">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php echo the_post_thumbnail('events-thumb'); ?>
                    <?php else: ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/placeholder.png"
                             alt="Explore Your Archive">
                    <?php endif; ?>
                    <?php if (in_category(4)) : ?>
                        <span class="featured">FEATURED</span>
                    <?php endif; ?>
                    <span class="price"><?php echo $price ?></span>

                    <div class="caption">
                        <h3><?php the_title(); ?></h3>

                        <p><i class="fa fa-map-marker"></i>
                            <?php foreach ((get_the_category()) as $category) { ?>
                                <?php if ($category->cat_name != 'Featured') { ?>
                                    <?php echo $category->cat_name . ' '; ?>
                                <?php } ?>
                            <?php } ?>
                        </p>

                        <p><i class="fa fa-clock-o"></i> <?php echo $time ?></p>


                        <?php if ($format_start_date == $format_end_date) { ?>
                            <p><i class="fa fa-calendar"></i>
                                <?php echo $format_start_date->format('d F Y'); ?>
                            </p>
                        <?php } else { ?>
                            <p><i class="fa fa-calendar"></i>
                                <?php echo $format_start_date->format('d') . ' - ' . $format_end_date->format('d F Y') ?>
                            </p>
                        <?php } ?>
                    </div>
                </div>
            </a>
        </div>
    <?php } ?>

<?php } else {

}
// Restore original Post Data
wp_reset_postdata();

?>