<!DOCTYPE html>
<html lang="en-gb">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.min.js"></script>

    <!--[if (gte IE 6)&(lte IE 8)]>
    <script type="text/javascript" src="http://livelb.nationalarchives.gov.uk/wp-content/themes/tna/scripts/selectivizr-min.js"></script>
    <script type="text/javascript" src="http://livelb.nationalarchives.gov.uk/wp-content/themes/tna/scripts/respond.min.js"></script>
    <![endif]-->

    <title><?php the_title(); ?><?php bloginfo('description'); ?></title>

    <meta name="description"
          content="Explore Your Archive is a joint campaign delivered by The National Archives and the Archives and Records Association across the UK and Ireland.">
    <meta name="author" content="TNA Web Team">
    <meta name="apple-mobile-web-app-title" content="Explore Your Archive">
    <meta name="application-name" content="Explore Your Archive">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage"
          content="<?php echo get_template_directory_uri(); ?>/images/mstile-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Fav Icons -->
    <link rel="apple-touch-icon" sizes="57x57"
          href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60"
          href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72"
          href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76"
          href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114"
          href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120"
          href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144"
          href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152"
          href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180"
          href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon-32x32.png"
          sizes="32x32">
    <link rel="icon" type="image/png"
          href="<?php echo get_template_directory_uri(); ?>/images/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon-96x96.png"
          sizes="96x96">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon-16x16.png"
          sizes="16x16">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/images/manifest.json">

    <script
        src='https://maps.googleapis.com/maps/api/js?key=AIzaSyCeHfiJ8a9-ALS5hk7FL2izlXYBe0iFQc4&sensor=false&extension=.js'></script>
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
    $address = get_post_meta($post->ID, custom_latlng, true);
    ?>
    <!-- Development -->
    <script>
        var geocoder;
        var map;
        var address = '<?php echo $address; ?>';

        function initialize() {
            geocoder = new google.maps.Geocoder();
            var latlng = new google.maps.LatLng(51.5000, 0.1167);
            var myOptions = {
                zoom: 15,
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
                }, function (results, status) {
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
                            google.maps.event.addListener(marker, 'click', function () {
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

    <!-- Google Analytics -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','http://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-2827241-12', 'exploreyourarchive.org');
        ga('send', 'pageview');

    </script>
</head>
<body style="background:#772367">