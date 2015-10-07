<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * TNA Web Team
 *
 */

require_once('header_sub.php'); ?>

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
                    <div class="not-found">
                     <h1>404</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <div class="not-found">
                        <h2><?php _e( 'This is somewhat embarrassing, isn’t it?', 'explore-your-archive' ); ?></h2>
                        <p>It looks like nothing was found at this location. <a href="/">Go back home?</a></p>
                    </div>
                </div>

            </div>
        </div>
    </section>

<?php require_once('footer_sub.php'); ?>