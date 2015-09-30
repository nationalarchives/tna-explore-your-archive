<footer>
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-sm-3">
                <a href="http://www.nationalarchives.gov.uk" target="_blank"><img
                        src="<?php bloginfo('stylesheet_directory'); ?>/images/explore-your-archive-logo-tna.png" alt="The National Archives"></a>
            </div>
            <div class="col-xs-6 col-sm-6">
                <p><?php echo get_option('footer_info'); ?></p>
                    <!-- Footer Menu -->
                    <?php wp_nav_menu( array('menu' => 'Footer' )); ?>
                <p><?php echo get_option('footer_copyright'); ?></p>
            </div>
            <!-- Optional: clear the XS cols if their content doesn't match in height -->
            <div class="clearfix visible-xs-block"></div>
            <div class="col-xs-6 col-sm-3">
                <a class="ara" href="http://www.archives.org.uk/" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/ara.png"
                                                                                       alt="Archvies & Records Association"></a>
            </div>
        </div>
    </div>
</footer>
</main>
<!-- Latest compiled and minified JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<!-- Instagram -->
<script async defer src="//platform.instagram.com/en_US/embeds.js"></script>
<!-- Drop Down Style -->
<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>

<!-- Scrolling -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.min.js"></script>

<?php wp_footer(); ?>
</body>
</html>