<!-- Latest compiled and minified JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>

<!-- WebTrends -->
<script src="http://www.nationalarchives.gov.uk/wp-content/themes/tna/scripts/webtrends.js"></script>
<script type="text/javascript">
    //<![CDATA[
    var _tag=new WebTrends();
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
        <img id="DCSIMG" height="1" alt="DCSIMG" src="http://smartsource.nationalarchives.gov.uk/dcsdhhxq6000004rry7ab39or_9h9r/njs.gif?dcsuri=/nojavascript&amp;WT.js=No&amp;WT.tv=8.6.2" width=1 />
    </div>
</noscript>
<!-- END OF WebTrends -->
<?php wp_footer(); ?>


</body>
</html>