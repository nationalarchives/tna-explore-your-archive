<?php
/**
 * News Page
 * TNA Web Team
 */

/* Header for the landing page */
require_once('header_sub.php');

/* Variables */
include('_inc/variables.php');
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <section id="event" class="news-internal">
        <div class="container">
            <div class="row">
                <div class="col-md-1 col-md-offset-11">
                    <script>
                        document.write('<a class="goBack" href="' + document.referrer + '">X</a>');
                    </script>
                    <noscript>
                        <a href="/" class="goBack">X</a>
                    </noscript>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-8">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php echo the_post_thumbnail(); ?>
                    <?php else: ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/placeholder.png" alt="Explore Your Archive">
                    <?php endif; ?>
                    <p>
                        <?php the_content(); ?>
                    </p>

                    <div class="clearfix"></div>
                </div>
                <div class="col-xs-12 col-md-4">
                   <?php  // WP_Query arguments
                    $args = array(
                    'post_type' => array('news'),
                    'posts_per_page' => '5',
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
                                <?php if ($news_field && '' != $news_field && $news_field !== '#') : ?>
                                    <a href="<?php echo $news_field ?>" target="_blank" title="<?php the_title(); ?>">
                                        <div class="thumbnail">
                                            <div class="caption">
                                                <h3><?php the_title(); ?></h3>
                                                <span><?php the_time('F jS, Y') ?></span>
                                                <p><?php echo excerpt(25); ?> </p>
                                            </div>
                                        </div>
                                    </a>
                                <?php else :?>
                                    <a href="<?php echo get_permalink() ?>" title="<?php the_title(); ?>">
                                        <div class="thumbnail">
                                            <div class="caption">
                                                <h3><?php the_title(); ?></h3>
                                                <span><?php the_time('F jS, Y') ?></span>
                                                <p><?php echo excerpt(25); ?> </p>
                                            </div>
                                        </div>
                                    </a>
                                <?php endif;?>
                        <?php endwhile; ?>
                        <!-- end of the loop -->

                        <?php wp_reset_postdata(); ?>

                    <?php else : ?>
                        <p><?php _e('Sorry, no news'); ?></p>
                    <?php endif; ?>
                    <div class="st_sharethis_large" id="s0" onclick="doExpand('m0');">Share:</div>
                </div>
            </div>
        </div>
    </section>
<?php endwhile; endif; ?>

<?php
/* Footer for the landing page */
require_once('footer_sub.php');
?>