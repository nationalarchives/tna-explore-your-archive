<?php
/**
 * Category page
 * TNA Web Team
 */

get_header();

//Include Variables
include('_inc/variables.php');

/* Enable feature image for the banner */
$frontpage_ID = get_option('page_on_front');
$thumb_id = get_post_thumbnail_id($frontpage_ID);
$thumb_url_array = wp_get_attachment_image_src($thumb_id, '', true);
$thumb_url = $thumb_url_array[0];
?>
    <section id="banner" role="banner"
             style="background: url(<?php echo $thumb_url; ?> ) !important; background-size:cover !important; background-repeat:no-repeat; ">
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
                    <div class="clearfix"><br/></div>
                    <a class="buttonShowAll" href="/">Show all</a>

                </form>
            </div>
        </div>
    </section>

    <section id="events">
        <div class="container">
            <div id="index-events" class="row">
                <h2>
                    <?php
                    foreach ((get_the_category()) as $category) { ?>
                        <?php if ($category->cat_name != 'Featured') { ?>
                            <?php echo 'Events in ' . $category->cat_name . ' '; ?>
                        <?php } ?>
                    <?php } ?>
                </h2>
                <hr/>
                <?php

                // Events by category - Wp_query
                require(locate_template('_inc/events-category.php'));

                ?>

            </div>
        </div>
    </section>
    <section id="newsletter">
        <div class="container">
            <div class="row">
                <h2 class="hidden-but-accessible">Sign up to The National Archives' newsletter</h2>
                <div class="col-xs-12 col-sm-6">
                    <p>
                        <?php
                        $result = $_GET['result'];
                        if ($result == 'success') {
                            echo '<strong>Thank you</strong> for signing up for our free monthly enewsletter.';
                        } else {
                            echo get_option('newsletter');
                        }
                        ?>
                    </p>
                </div>
                <div class="col-xs-6 col-sm-6">
                    <form name="signup" id="banner-form" class="pad-medium" action="http://dmtrk.co.uk/signup.ashx"
                          method="post"><input type="hidden" name="addressbookid" value="281378"><input type="hidden"
                                                                                                        name="userid"
                                                                                                        value="28895"><input
                            type="hidden" name="ReturnURL" value="http://exploreyourarchive.org"><input
                            type="email" id="Email" name="Email" required=""
                            placeholder="Enter your email address"><input id="newsletterSignUp" type="submit"
                                                                          value="Sign up" class="button"></form>
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
                                               width="100%" height="450px" data-show-replies="false">Tweets about
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
    <section id="link_to_us">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <h2>Link to us</h2>
                </div>
            </div>
        </div>
    </section>
    <section id="link_to_eya">
        <div class="container">
            <h2 class="hidden-but-accessible">Link to EYA</h2>
            <p><?php echo get_option("link_to_us")?></p>
            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <a href="http://www.exploreyourarchive.org" target="_blank"><img src="http://www.exploreyourarchive.org/wp-content/uploads/sites/11/2015/11/EYA-Banner-300X300.jpg" border="0"></a><br><input type="text" value='<a href="http://www.exploreyourarchive.org" target="_blank"><img src="http://www.exploreyourarchive.org/wp-content/uploads/sites/11/2015/11/EYA-Banner-300X300.jpg" border="0"></a><br>' readonly onClick="javascript:this.focus();this.select();" style="width: 300px; ">
                </div>
                <div class="col-xs-6 col-sm-8">
                    <a href="http://www.exploreyourarchive.org" target="_blank"><img src="http://exploreyourarchive.org/wp-content/uploads/sites/11/2015/11/EYA-Banner-728X90.jpg" border="0"></a><br><input type="text" value='<a href="http://www.exploreyourarchive.org" target="_blank"><img src="http://exploreyourarchive.org/wp-content/uploads/sites/11/2015/11/EYA-Banner-728X90.jpg" border="0"></a><br>' readonly onClick="javascript:this.focus();this.select();" style="width: 728px; ">
                </div>
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