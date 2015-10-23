<?php
/**
 * Front Page
 * TNA Web Team
 */

get_header();

//Include Variables
include('_inc/variables.php');

?>
    <section id="banner" role="banner"
             style="background: url(<?php echo $thumb_url; ?> ) !important; background-size:cover !important; background-repeat:no-repeat;"
             >
        <div class="container">
            <div class="wrapper">
                <strong><?php echo get_option('eya_event_date'); ?></strong>

                <h1><?php echo get_option('eya_title'); ?></h1>

                <p><?php echo get_option('eya_desc'); ?> <a class="page-scroll" href="#about">Read more</a></p>

                <form id="category-select" class="category-select" action="<?php echo esc_url(home_url('/')); ?>"
                      method="get">

                    <?php
                    // Select region query
                    require(locate_template('_inc/select-by-region.php'));

                    ?>

                    <noscript>
                        <button type="submit">Go</button>
                    </noscript>

                </form>
            </div>
        </div>
    </section>

    <section id="events">
        <div class="container">
            <div id="index-events" class="row">
                <h2><?php echo get_option('eya_headline_section_one'); ?></h2>
                <hr/>
                <?php
                // Events by Featured category - Wp_query
                require(locate_template('_inc/events-by-featured.php'));

                // Events by Date - Wp_query
                require(locate_template('_inc/events-by-date.php'));

                ?>
            </div>
            <div id="loadMore">Show more</div>
            <div id="showLess">Show fewer</div>
        </div>
    </section>
    <section id="latest-news">
        <div class="container">
            <div class="row">
                <h2><?php echo get_option('eya_headline_section_two'); ?></h2>
                <hr/>
                <div class="row">
                    <div id="index-news" class="col-xs-12 col-sm-6 col-md-8">
                        <?php

                        // Latest news - Wp_query
                        require(locate_template('_inc/latest-news.php'));

                        ?>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div align="center"><a class="twitter-timeline"
                                               href="https://twitter.com/search?q=%23explorearchives"
                                               data-widget-id="389751188226191361" data-link-color="#3c90d1"
                                               width="100%" height="410px" data-show-replies="false">Tweets about
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
                        <div class="facebook">
                            <div class="fb-page" data-href="https://www.facebook.com/ExploreYourArchive2015"
                                 data-small-header="true" data-adapt-container-width="true" data-hide-cover="false"
                                 data-show-facepile="true" data-show-posts="true">
                                <div class="fb-xfbml-parse-ignore">
                                    <blockquote cite="https://www.facebook.com/ExploreYourArchive2015"><a
                                            href="https://www.facebook.com/ExploreYourArchive2015">Explore Your Archive
                                            2015</a></blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section id="about">
        <div class="container">
            <div class="row">
                <?php

                // About us - Wp_query
                require(locate_template('_inc/about.php'));

                ?>
            </div>

        </div>
    </section>
    <section id="latest-activity">
        <div class="container">
            <div class="row">
                <h2><?php echo get_option('eya_headline_section_three'); ?></h2>
                <hr/>
                <?php

                // Latest Activity - Wp_query
                require(locate_template('_inc/latest-activity.php'));

                ?>
            </div>
            <div class="row">
                <h2 class="hidden-but-accessible"><?php echo get_option('eya_headline_section_four'); ?></h2>

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