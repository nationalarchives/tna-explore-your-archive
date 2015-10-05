<?php require_once('header_sub.php');?>
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
                        <img class="aboutImg" src="http://placehold.it/600x289/f0f0f0f0/efefef?text=EYA">
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
<?php require_once('footer_sub.php');?>