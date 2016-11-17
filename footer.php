<footer>
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-sm-3">
                <a href="http://www.nationalarchives.gov.uk" target="_blank"><img
                        src="<?php bloginfo('stylesheet_directory'); ?>/images/explore-your-archive-logo-tna.png"
                        alt="The National Archives"></a>
            </div>
            <div class="col-xs-6 col-sm-6">
                <p><a href="<?php echo get_option('footer_link_one'); ?>"
                      target="_blank"><?php echo get_option('footer_link_one_desc'); ?></a>, Contact us at <a
                        href="mailto:exploreyourarchive@nationalarchives.gov.uk">exploreyourarchive@nationalarchives.gov.uk</a>
                </p>
                <!-- Footer Menu -->
                <?php wp_nav_menu(array('menu' => 'Footer')); ?>
                <p><?php echo get_option('footer_copyright'); ?></p>
            </div>
            <!-- Optional: clear the XS cols if their content doesn't match in height -->
            <div class="clearfix visible-xs-block"></div>
            <div class="col-xs-6 col-sm-3">
                <a class="ara" href="http://www.archives.org.uk/" target="_blank"><img
                        src="<?php bloginfo('stylesheet_directory'); ?>/images/ara.jpg"
                        alt="Archvies & Records Association" width="260"></a>
            </div>
        </div>
    </div>
</footer>
</main>

<!--[if lt IE 9]>
<script src="//oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->

<!-- Latest compiled and minified JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<!-- Instagram -->
<script async defer src="//platform.instagram.com/en_US/embeds.js"></script>
<!-- Drop Down Style -->
<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/equal_heights.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>

<!-- Scrolling -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.min.js"></script>

<!-- WebTrends -->
<script src="http://www.nationalarchives.gov.uk/wp-content/themes/tna/scripts/webtrends.js"></script>
<script type="text/javascript">
    //<![CDATA[
    var _tag = new WebTrends();
    _tag.dcsGetId();
    //]]>>
</script>
<script type="text/javascript">
    //<![CDATA[
    // Add custom parameters here.
    //_tag.DCSext.param_name=param_value;
    _tag.dcsCollect();
    //]]>>
</script>
<noscript>
    <div>
        <img id="DCSIMG" height="1" alt="DCSIMG"
             src="http://smartsource.nationalarchives.gov.uk/dcsdhhxq6000004rry7ab39or_9h9r/njs.gif?dcsuri=/nojavascript&amp;WT.js=No&amp;WT.tv=8.6.2"
             width=1/>
    </div>
</noscript>
<!-- END OF WebTrends -->

<?php wp_footer(); ?>

</body>
</html>