<?php
/**
 * Events on category/region page
 * TNA Web Team
 */

// The Loop
if (have_posts()) {
    while (have_posts()) {
        the_post();

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
                    <?php $featured = get_post_meta($post->ID, "custom_checkbox", true);
                    if ($featured !== '') { ?>
                        <span class="featured">FEATURED</span>
                    <?php } ?>
                    <span class="price">FREE</span>

                    <div class="caption">
                        <h3><?php the_title(); ?></h3>

                        <p><i class="fa fa-map-marker"></i>
                                            <span><?php
                                                foreach ((get_the_category()) as $category) { ?>
                                                    <?php if ($category->cat_name != 'Featured') { ?>
                                                        <?php echo $category->cat_name . ' '; ?>
                                                    <?php } ?>
                                                <?php } ?></span>
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
    echo '<p>No Post Found</p>';
}
// Restore original Post Data
wp_reset_postdata();
?>