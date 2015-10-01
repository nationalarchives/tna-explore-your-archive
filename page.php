<!DOCTYPE html>
<html lang="en-gb">
<head>
    <title><?php the_title(); ?><?php bloginfo('description'); ?></title>

    <meta charset="UTF-8">
    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="<?php the_content(); ?>">

    <script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyCeHfiJ8a9-ALS5hk7FL2izlXYBe0iFQc4&sensor=false&extension=.js'></script>
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
    <style>
        #map_canvas {
            height:400px;
            width:550px;
        }
        .gm-style-iw * {
            display: block;
            width: 100%;
        }
        .gm-style-iw h4, .gm-style-iw p {
            margin: 0;
            padding: 0;
        }
        .gm-style-iw a {
            color: #4272db;
        }
        html,
        body,
        #map_canvas {
            height: 100%;
            width: 100%;
        }
    </style>
    <!-- Development -->
    <script>
        var geocoder;
        var map;
        var address = "San Diego, CA";

        function initialize() {
            geocoder = new google.maps.Geocoder();
            var latlng = new google.maps.LatLng(-34.397, 150.644);
            var myOptions = {
                zoom: 8,
                center: latlng,
                mapTypeControl: true,
                mapTypeControlOptions: {
                    style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
                },
                navigationControl: true,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
            if (geocoder) {
                geocoder.geocode({
                    'address': address
                }, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        if (status != google.maps.GeocoderStatus.ZERO_RESULTS) {
                            map.setCenter(results[0].geometry.location);

                            var infowindow = new google.maps.InfoWindow({
                                content: '<b>' + address + '</b>',
                                size: new google.maps.Size(150, 50)
                            });

                            var marker = new google.maps.Marker({
                                position: results[0].geometry.location,
                                map: map,
                                title: address
                            });
                            google.maps.event.addListener(marker, 'click', function() {
                                infowindow.open(map, marker);
                            });

                        } else {
                            alert("No results found");
                        }
                    } else {
                        alert("Geocode was not successful for the following reason: " + status);
                    }
                });
            }
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>

</head>
<body>
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


                    <div id="map_canvas" ></div>


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