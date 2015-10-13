<?php
// WP_Query arguments
$args = array(
    'pagename' => 'about-us',
    'post_type' => array('page'),
    'posts_per_page' => '1',
);

// The Query
$aboutUs = new WP_Query($args) ?>

<?php if ($aboutUs->have_posts()) : ?>

    <!-- the loop -->
    <?php while ($aboutUs->have_posts()) : $aboutUs->the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <hr/>
        <div class="col-xs-12 col-sm-6 col-md-8">

            <p><?php the_content(); ?></p>
        </div>
        <div class="col-xs-6 col-md-4">
            <?php if (has_post_thumbnail()) : ?>
                <span class="aboutImg"><?php echo the_post_thumbnail(); ?></span>
            <?php else: ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/placeholder.png"
                     alt="Explore Your Archive">
            <?php endif; ?>
        </div>
    <?php endwhile; ?>
    <!-- end of the loop -->

    <?php wp_reset_postdata();
    wp_reset_query(); ?>

<?php else : ?>
    <p><?php _e('Sorry, no content for about us'); ?></p>
<?php endif; ?>