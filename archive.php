<?php
/*
Template Name: Archives
*/
get_header();

//Include Variables
include('_inc/variables.php');

?>
    <section id="banner_inner" role="banner"
             style="background: url(<?php echo $thumb_url; ?> ) !important; background-size:cover !important; background-repeat:no-repeat;"
    >
        <div class="container">
            <div class="wrapper">
                <h1><?php echo get_option('eya_archive_title'); ?></h1>
                    <div class="clearfix"><br/></div>
                    <a class="buttonShowAll" href="/">Home</a>
            </div>
        </div>
    </section>

    <section id="events">
        <div class="container">
            <div id="index-events" class="row">
                <h2><?php echo the_title() ?></h2>
                <hr/>
                <?php
                // Events by Date - Wp_query
                require(locate_template('_inc/events-archive.php'));

                ?>
            </div>
            <div id="loadMore">Show all</div>
            <div id="showLess">Show fewer</div>
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

    <section id="latest-activity">
        <div class="container">
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