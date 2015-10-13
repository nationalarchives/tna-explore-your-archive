<?php

    $args2 = array(
        'post_type' => 'post',
        'cat' => -4, //Display all posts exclude this category.
        'meta_key' => $custom_end_date,
        'meta_value' => $current_date,
        'meta_compare' => '>=',
        'orderby' => 'menu_order date',
        'post_per_page' => -1
    );

    $query = new WP_query($args2);

// The Loop
if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();

        //Include Variables
        include('variables.php');
        ?>
        <div class="col-sm-6 col-md-3">
            <a href="<?php the_permalink(); ?>">
                <div class="thumbnail">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php echo the_post_thumbnail(); ?>
                    <?php else: ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/placeholder.png"
                             alt="Explore Your Archive">
                    <?php endif; ?>
                    <?php if (in_category(2)) : ?>
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
    echo '<p>No Events Found</p>';
}
// Restore original Post Data
wp_reset_postdata();
?>