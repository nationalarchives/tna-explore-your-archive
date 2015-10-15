<?php
/**
 * Latest activity section on homepage/region
 * TNA Web Team
 */

// WP_Query arguments
$args = array(
    'post_type' => array('latest-activity'),
    'meta_query' => array(
        array(
            'key' => 'activity',
        ),
    ),
);

// The Query
$latest_activity = new WP_Query($args);
?>
<?php if ($latest_activity->have_posts()) : ?>

    <!-- the loop -->
    <?php while ($latest_activity->have_posts()) : $latest_activity->the_post(); ?>
        <div class="col-sm-6 col-md-3">
            <div class="iframe-respo">
                <?php the_meta('activity'); ?>
            </div>
        </div>
    <?php endwhile; ?>
    <!-- end of the loop -->

    <?php wp_reset_postdata();
    wp_reset_query(); ?>

<?php else : ?>
    <p><?php _e('Sorry, no activities'); ?></p>
<?php endif; ?>