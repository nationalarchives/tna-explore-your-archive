<!DOCTYPE html>
<html lang="en-GB">
<head>
    <title>
        <?php if (is_category()) {
            echo 'Explore Your Archive in ';
            single_cat_title();
            echo ' | ';
            bloginfo('name');
        } elseif (is_tag()) {
            echo 'Tag Archive for ';
            single_tag_title();
            echo ' | ';
            bloginfo('name');
        } elseif (is_archive()) {
            wp_title('');
            echo ' Archive | ';
            bloginfo('name');
        } elseif (is_search()) {
            echo 'Search for &quot;' . wp_specialchars($s) . '&quot; | ';
            bloginfo('name');
        } elseif (is_home() || is_front_page()) {
            bloginfo('name');
            echo ' | ';
            bloginfo('description');
        } elseif (is_404()) {
            echo 'Error 404 Not Found | ';
            bloginfo('name');
        } elseif (is_single()) {
            wp_title('');
        } else {
            echo wp_title(' | ', false, right);
            bloginfo('name');
        } ?>
    </title>

    <meta charset="UTF-8">
    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="author" content="TNA Web Team">
    <meta name="description"
          content="Explore Your Archive is a joint campaign delivered by The National Archives and the Archives and Records Association across the UK and Ireland.">
    <meta name="apple-mobile-web-app-title" content="Explore Your Archive">
    <meta name="application-name" content="Explore Your Archive">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage"
          content="<?php echo get_template_directory_uri(); ?>/images/mstile-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Stylesheet -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/style.min.css" rel="stylesheet">
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

    <!-- Development -->
    <?php

    wp_head();
    $options = get_option('logo_options_group');

    ?>
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-Top">
<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
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