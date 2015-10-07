<!DOCTYPE html>
<html lang="en-gb">
<head>
    <title><?php the_title(); ?> <?php bloginfo('description'); ?></title>

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
    $address= get_post_meta($post->ID, custom_latlng, true);
    ?>
    <!-- Development -->
    <script>
        var geocoder;
        var map;
        var address = '<?php echo $address; ?>';

        function initialize() {
            geocoder = new google.maps.Geocoder();
            var latlng = new google.maps.LatLng(51.5000,0.1167);
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
<body style="background:#772367">