<?php
/** Front Page */

get_header();
?>
    <section id="banner" role="banner">
        <div class="container">
            <div class="wrapper">
                <strong><?php echo get_option('eya_event_date'); ?></strong>

                <h1><?php echo get_option('eya_title'); ?></h1>

                <p><?php echo get_option('eya_desc'); ?> <a class="page-scroll" href="#about">Read more</a></p>

                <form action="index.html" method="post">
                    <fieldset>
                        <legend>Find By</legend>
                        <select class="chosen-select">
                            <option value="London">Region</option>
                            <option value="London">London</option>
                            <option value="London">London</option>
                            <option value="London">London</option>
                        </select>
                    </fieldset>
                    <fieldset>
                        <select class="chosen-select">
                            <option value="London">Date</option>
                            <option value="London">London</option>
                            <option value="London">London</option>
                            <option value="London">London</option>
                        </select>
                    </fieldset>
                    <button type="submit">Go</button>
                </form>
            </div>
        </div>
    </section>

    <section id="events">
        <div class="container">
            <div class="row">
                <h2><?php echo get_option('eya_headline_section_one'); ?></h2>
                <hr/>
                <div class="col-sm-6 col-md-3">
                    <a href="event.html">
                        <div class="thumbnail">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/event-img.jpg"
                                 alt="event image">
                            <span class="featured">FEATURED</span>
                            <span class="price">FREE</span>

                            <div class="caption">
                                <h3>Glasgow City Archives TNA EYA TNA</h3>

                                <p><i class="fa fa-map-marker"></i> London</p>

                                <p><i class="fa fa-clock-o"></i> 18:00 - 19:30</p>

                                <p><i class="fa fa-calendar"></i> Friday 15 November 2015</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-3">
                    <a href="event.html">
                        <div class="thumbnail">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/event-img.jpg"
                                 alt="event image">
                            <span class="featured">FEATURED</span>
                            <span class="price">FREE</span>

                            <div class="caption">
                                <h3>Glasgow City Archives</h3>

                                <p><i class="fa fa-map-marker"></i> London</p>

                                <p><i class="fa fa-clock-o"></i> 18:00 - 19:30</p>

                                <p><i class="fa fa-calendar"></i> Friday 15 November 2015</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-3">
                    <a href="event.html">
                        <div class="thumbnail">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/event-img.jpg"
                                 alt="event image">
                            <span class="featured">FEATURED</span>
                            <span class="price">FREE</span>

                            <div class="caption">
                                <h3>Glasgow City Archives</h3>

                                <p><i class="fa fa-map-marker"></i> London</p>

                                <p><i class="fa fa-clock-o"></i> 18:00 - 19:30</p>

                                <p><i class="fa fa-calendar"></i> Friday 15 November 2015</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-3">
                    <a href="event.html">
                        <div class="thumbnail">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/event-img.jpg"
                                 alt="event image">
                            <span class="featured">FEATURED</span>
                            <span class="price">FREE</span>

                            <div class="caption">
                                <h3>Glasgow City Archives</h3>

                                <p><i class="fa fa-map-marker"></i> London</p>

                                <p><i class="fa fa-clock-o"></i> 18:00 - 19:30</p>

                                <p><i class="fa fa-calendar"></i> Friday 15 November 2015</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-3">
                    <a href="event.html">
                        <div class="thumbnail">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/event-img.jpg"
                                 alt="event image">
                            <span class="price">FREE</span>

                            <div class="caption">
                                <h3>Glasgow City Archives</h3>

                                <p><i class="fa fa-map-marker"></i> London</p>

                                <p><i class="fa fa-clock-o"></i> 18:00 - 19:30</p>

                                <p><i class="fa fa-calendar"></i> Friday 15 November 2015</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-3">
                    <a href="event.html">
                        <div class="thumbnail">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/event-img.jpg"
                                 alt="event image">
                            <span class="price">FREE</span>

                            <div class="caption">
                                <h3>Glasgow City Archives</h3>

                                <p><i class="fa fa-map-marker"></i> London</p>

                                <p><i class="fa fa-clock-o"></i> 18:00 - 19:30</p>

                                <p><i class="fa fa-calendar"></i> Friday 15 November 2015</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-3">
                    <a href="event.html">
                        <div class="thumbnail">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/event-img.jpg"
                                 alt="event image">
                            <span class="price">FREE</span>

                            <div class="caption">
                                <h3>Glasgow City Archives</h3>

                                <p><i class="fa fa-map-marker"></i> London</p>

                                <p><i class="fa fa-clock-o"></i> 18:00 - 19:30</p>

                                <p><i class="fa fa-calendar"></i> Friday 15 November 2015</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-3">
                    <a href="event.html">
                        <div class="thumbnail">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/event-img.jpg"
                                 alt="event image">
                            <span class="price">FREE</span>

                            <div class="caption">
                                <h3>Glasgow City Archives</h3>

                                <p><i class="fa fa-map-marker"></i> London</p>

                                <p><i class="fa fa-clock-o"></i> 18:00 - 19:30</p>

                                <p><i class="fa fa-calendar"></i> Friday 15 November 2015</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-3">
                    <a href="event.html">
                        <div class="thumbnail">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/event-img.jpg"
                                 alt="event image">
                            <span class="price">FREE</span>

                            <div class="caption">
                                <h3>Glasgow City Archives</h3>

                                <p><i class="fa fa-map-marker"></i> London</p>

                                <p><i class="fa fa-clock-o"></i> 18:00 - 19:30</p>

                                <p><i class="fa fa-calendar"></i> Friday 15 November 2015</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-3">
                    <a href="event.html">
                        <div class="thumbnail">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/event-img.jpg"
                                 alt="event image">
                            <span class="price">FREE</span>

                            <div class="caption">
                                <h3>Glasgow City Archives</h3>

                                <p><i class="fa fa-map-marker"></i> London</p>

                                <p><i class="fa fa-clock-o"></i> 18:00 - 19:30</p>

                                <p><i class="fa fa-calendar"></i> Friday 15 November 2015</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-3">
                    <a href="event.html">
                        <div class="thumbnail">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/event-img.jpg"
                                 alt="event image">
                            <span class="price">FREE</span>

                            <div class="caption">
                                <h3>Glasgow City Archives</h3>

                                <p><i class="fa fa-map-marker"></i> London</p>

                                <p><i class="fa fa-clock-o"></i> 18:00 - 19:30</p>

                                <p><i class="fa fa-calendar"></i> Friday 15 November 2015</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-3">
                    <a href="event.html">
                        <div class="thumbnail">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/event-img.jpg"
                                 alt="event image">
                            <span class="price">FREE</span>

                            <div class="caption">
                                <h3>Glasgow City Archives</h3>

                                <p><i class="fa fa-map-marker"></i> London</p>

                                <p><i class="fa fa-clock-o"></i> 18:00 - 19:30</p>

                                <p><i class="fa fa-calendar"></i> Friday 15 November 2015</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="latest-news">
        <div class="container">
            <div class="row">
                <h2><?php echo get_option('eya_headline_section_two'); ?></h2>
                <hr/>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-8">
                        <?php
                        // WP_Query arguments
                        $args = array(
                            'post_type' => array('post'),
                            'posts_per_page' => '4',
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
                                        <a href="<?php echo $news_field ?>" target="_blank">
                                            <div class="thumbnail">
                                                <?php if (has_post_thumbnail()) : ?>
                                                    <?php echo the_post_thumbnail(); ?>
                                                <?php else: ?>
                                                    <img src="http://placehold.it/345x166/f0f0f0f0/e8e8e8?text=EYA">
                                                <?php endif; ?>
                                                <div class="caption">
                                                    <h3><?php the_title(); ?></h3>
                                                    <span><?php the_time('F jS, Y') ?>
                                                        by <?php the_author_posts_link() ?></span>

                                                    <p><?php the_content() ?> </p>

                                                </div>
                                            </div>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            <?php endwhile; ?>
                            <!-- end of the loop -->

                            <?php wp_reset_postdata(); ?>

                        <?php else : ?>
                            <p><?php _e('Sorry, no content'); ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div align="center"><a class="twitter-timeline"
                                               href="https://twitter.com/search?q=%23explorearchives"
                                               data-widget-id="389751188226191361" data-link-color="#3c90d1"
                                               width="100%" height="540px" data-show-replies="false">Tweets about
                                "#explorearchives"</a>
                            <script>!function (d, s, id) {
                                    var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                                    if (!d.getElementById(id)) {
                                        js = d.createElement(s);
                                        js.id = id;
                                        js.src = p + "://platform.twitter.com/widgets.js";
                                        fjs.parentNode.insertBefore(js, fjs);
                                    }
                                }(document, "script", "twitter-wjs");</script>

                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section id="about">
        <div class="container">
            <div class="row">
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
                                <img class="aboutImg" src="http://placehold.it/345x266/f0f0f0f0/efefef?text=EYA">
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                    <!-- end of the loop -->

                    <?php wp_reset_postdata(); ?>

                <?php else : ?>
                    <p><?php _e('Sorry, no content'); ?></p>
                <?php endif; ?>
            </div>

        </div>
    </section>
    <section id="latest-activity">
        <div class="container">
            <div class="row">
                <h2><?php echo get_option('eya_headline_section_three'); ?></h2>
                <hr/>
                <?php
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

                    <?php wp_reset_postdata(); ?>

                <?php else : ?>
                    <p><?php _e('Sorry, no content'); ?></p>
                <?php endif; ?>

            </div>
            <div class="row">
                <h2><?php echo get_option('eya_headline_section_four'); ?></h2>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <ul>
                        <li><a href="<?php echo get_option('twitter_url'); ?>" target="_blank"><i
                                    class="fa fa-twitter-square"></i></a></li>
                        <li><a href="<?php echo get_option('facebook_url'); ?>" target="_blank"><i
                                    class="fa fa-facebook-square"></i></a></li>
                        <li><a href="<?php echo get_option('pinterest_url'); ?>" target="_blank"><i
                                    class="fa fa-pinterest-square"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>