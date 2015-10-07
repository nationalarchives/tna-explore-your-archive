<!DOCTYPE html>
<html lang="en-GB">
<head>
    <title><?php the_title(); ?> <?php bloginfo('description'); ?></title>

    <meta charset="UTF-8">
    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- Stylesheet -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/style.min.css" rel="stylesheet">
    <!-- Development -->
    <?php

    wp_head();
    $options = get_option('logo_options_group');

    ?>
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-Top">
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4&appId=179377418776342";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<main role="main">
    <header>
        <div class="container clearfix">
            <div class="row">
                <div class="col-xs-6 col-md-4">
                    <a class="page-scroll" href="/"><img src="<?php echo $options['url']; ?>"
                                                                 alt="Explore Your Archive"></a>
                </div>
                <a href="#eya" class="box-shadow-menu">
                    Menu
                </a>

                <div class="col-xs-12 col-sm-6 col-md-8">
                    <!-- Navigation -->
                    <nav class="navbar-fixed-Top">

                        <!-- Collect the nav links, forms, and other content for toggling -->

                        <ul class="nav">
                            <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                            <li>
                                <a class="page-scroll" href="#events">Events</a>
                            </li>
                            <li>
                                <a class="page-scroll" href="#latest-news">News</a>
                            </li>
                            <li>
                                <a class="page-scroll" href="#about">About</a>
                            </li>
                            <li>
                                <a class="page-scroll" href="#latest-activity">Latest activity</a>
                            </li>
                        </ul>

                        <!-- /.navbar-collapse -->
                    </nav>
                </div>
                <div class="col-xs-12 col-md-12 mobileNav">
                    <!-- Navigation -->
                    <nav class="navbar-fixed-Top">
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <ul class="nav">
                            <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                            <li>
                                <a class="page-scroll" href="#events">Events</a>
                            </li>
                            <li>
                                <a class="page-scroll" href="#latest-news">News</a>
                            </li>
                            <li>
                                <a class="page-scroll" href="#about">About</a>
                            </li>
                            <li>
                                <a class="page-scroll" href="#latest-activity">Latest activity</a>
                            </li>
                        </ul>

                        <!-- /.navbar-collapse -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- /header -->