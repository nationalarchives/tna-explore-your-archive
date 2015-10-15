<?php
/**
 * Latest news section on home page / region
 * TNA Web Team
 */

// WP_Query arguments
$args = array(
    'post_type' => array('news'),
    'posts_per_page' => '4',
    'orderby' => 'menu_order date',
    'meta_query' => array(
        array(
            'key' => 'news',
        ),
    ),
);

// The Query
$news = new WP_Query($args);

?>
<?php if ($news->have_posts()) : ?>

    <!-- the loop -->
    <?php while ($news->have_posts()) : $news->the_post(); ?>
        <?php $news_field = get_post_meta($post->ID, 'news', true) ?>
        <div class="col-sm-6 col-md-6">
            <?php if ($news_field && '' != $news_field) : ?>
                <a href="<?php echo $news_field ?>" target="_blank" title="<?php the_title(); ?>">
                    <div class="thumbnail">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php echo the_post_thumbnail('news-thumb'); ?>
                        <?php else: ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/placeholder.png" alt="Explore Your Archive">
                        <?php endif; ?>
                        <div class="caption">
                            <h3><?php the_title(); ?></h3>
                            <span><?php the_time('F jS, Y') ?></span>

                            <p><?php echo excerpt(25); ?> </p>
                        </div>
                    </div>
                </a>
            <?php endif; ?>
        </div>
    <?php endwhile; ?>
    <!-- end of the loop -->

    <?php wp_reset_postdata(); ?>

<?php else : ?>
    <p><?php _e('Sorry, no news'); ?></p>
<?php endif; ?>