<!DOCTYPE html>
<html lang="en-gb">
<head>
    <title><?php the_title(); ?><?php bloginfo('description'); ?></title>

    <meta charset="UTF-8">
    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="<?php the_content(); ?>">

    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/js/map.js"></script>

    <!-- Share this -->
    <script type="text/javascript">var switchTo5x = true;</script>
    <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
    <script type="text/javascript">stLight.options({
            publisher: "3256c013-0a0d-4579-834c-f9b43de0507f",
            onhover: false,
            doNotHash: false,
            doNotCopy: false,
            hashAddressBar: false
        });</script>

    <!-- Development -->
    <?php
    wp_head();
    ?>

</head>
<body onload="initialize()">
<section id="event">
    <div class="container">
        <div class="row">
            <div class="col-md-1 col-md-offset-11">
                <a href="/" class="goBack">X</a>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <h1>Derbyshire Lives through the First World War</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <?php if (has_post_thumbnail()) : ?>
                    <?php echo the_post_thumbnail(); ?>
                <?php else: ?>
                    <img src="../images/event-img.jpg" alt="event image">
                <?php endif; ?>
                <ul>
                    <li><i class="fa fa-map-marker"></i>
                        <br/><span>London</span></li>
                    <li><i class="fa fa-calendar"></i>
                        <br/><span>Friday 15<br/>
                        November 2015</span></li>
                    <li><i class="fa fa-clock-o"></i>
                        <br/><span>18:00 - 19:30</span></li>
                    <li><span>£8.00</span></li>
                </ul>
                <p>
                    As Britain built up its navy before the First World War, German intelligence needed to learn as much
                    as possible about the Royal Navy and its latest weaponry. <br/>
                    <br/>
                    This exhibition draws on previously unseen documents in the National Records of Scotland to explore
                    the gripping story of a spy who was sent to Scotland in 1912, and how he was snared by the
                    authorities.

                </p>
                <a href="/" class="visitWebsite" target="_blank">Visit website</a>
            </div>
            <div class="col-xs-12 col-md-6">
                <div class="iframe-respo">
                    <?php if ( have_posts() ) : ?>
                        <!-- WordPress has found matching posts -->
                        <div style="display: none;">
                            <?php $i = 1; ?>
                            <?php while ( have_posts() ) : the_post(); ?>
                                <?php if ( get_post_meta($post->ID, 'latlng', true) !== '' ) : ?>
                                    <div id="item<?php echo $i; ?>">
                                        <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                                        <?php the_content(); ?>
                                    </div>
                                <?php endif; ?>
                                <?php $i++;	?>
                            <?php endwhile; ?>
                        </div>
                        <script type="text/javascript">
                            var locations = [
                                <?php  $i = 1; while ( have_posts() ) : the_post(); ?>
                                <?php if ( get_post_meta($post->ID, 'latlng', true) !== '' ) : ?>
                                {
                                    latlng : new google.maps.LatLng<?php echo get_post_meta($post->ID, 'latlng', true); ?>,
                                    info : document.getElementById('item<?php echo $i; ?>')
                                },
                                <?php endif; ?>
                                <?php $i++; endwhile; ?>
                            ];
                        </script>
                        <div id="map" style="width: 100%; height: 100%;"></div>

                    <?php else : ?>
                        <!-- No matching posts, show an error -->
                        <h1>Error 404 &mdash; Page not found.</h1>
                    <?php endif; ?>
                </div>


                <div class="st_sharethis_large" id="s0" onclick="doExpand('m0');">Share:</div>

            </div>
        </div>
    </div>
</section>


<!-- Latest compiled and minified JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>

<?php wp_footer(); ?>


</body>
</html>