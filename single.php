<?php
/**
 * Front Page
 * TNA Web Team
 */

    /* Header for the landing page */
    require_once('header_sub.php');

    /* Variables */
    include('_inc/variables.php');
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <section id="event">
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
                <div class="col-xs-12 col-md-6">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php echo the_post_thumbnail(); ?>
                    <?php else: ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/placeholder.png" alt="Explore Your Archive">
                    <?php endif; ?>
                    <ul>
                        <li><i class="fa fa-map-marker"></i>
                            <span><?php
                                foreach ((get_the_category()) as $category) { ?>
                                    <?php if ($category->cat_name != 'Featured') { ?>
                                        <?php echo $category->cat_name . ' '; ?>
                                    <?php } ?>
                                <?php } ?></span>
                        </li>
                        <li><i class="fa fa-calendar"></i>
                            <br/>
                            <?php if ($format_start_date == $format_end_date) { ?>
                                <span><?php echo $format_start_date->format('d F Y'); ?> </span>

                            <?php } else { ?>
                                <span><?php echo $format_start_date->format('d') .' - ' . $format_end_date->format('d F Y') ?></span>
                            <?php } ?>
                        </li>
                        <li><i class="fa fa-clock-o"></i>
                            <br/><span><?php echo $time ?></span></li>
                        <li><span class="price"><?php echo $price ?></span></li>
                    </ul>
                    <p>
                        <?php the_content(); ?>
                    </p>

                    <div class="clearfix"></div>
                    <a href="<?php echo $link ?>" class="visitWebsite" target="_blank">Visit website</a>
                </div>
                <div class="col-xs-12 col-md-6">
                    <div class="iframe-respo">
                        <div id="map_canvas"></div>
                    </div>
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