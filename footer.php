<?php
/**
* The template for displaying the footer.
*
* Contains the closing of the #content div and all content after
*
* @package cyberbility-starter
*/
?>
<div class="wrapper" id="wrapper-footer">

    <div class="container-fluid footer-container">
        <?php dynamic_sidebar('footerfull'); ?>
        <div class="row">
            <div class="col-md-12">

                <footer id="colophon" class="site-footer" role="contentinfo">

                    <div class="row footer-wrapper-outer">

                        <div class="col-md-4">
                            <p>
                            Ready to Book?<br>
                                <span><a href="#">Check Availability</a></span>
                            </p>
                        </div>
                        <div class="col-md-4">
                            <p>
                                Talk to Our Team<br>
                                <span><a href="tel:5409672431">(540) 967-2431</a></span>
                            </p>
                        </div>
                        <div class="col-md-4">
                            <p>
                                Email A Question<br>
                                <span><a href="mailto:camp@smallcountry.com">camp@smallcountry.com</a></span>
                            </p>
                        </div>

                        <div class="col-md-12 my-1">
                            <h2>Small Country Campground</h2>
                            <div class="spacer"></div>
                            <div class="row-spacing">
                                <div class ="col-spacing"><a href="#"><p>Campground Map</p></a></div><div class ="col-spacing"><h3><span class="align-top">&bull;</span></h3></div><div class ="col-spacing"> <a href=""><p>About</p></a></div><div class ="col-spacing"><h3><span class="align-top">&bull;</span></h3></div><div class ="col-spacing"><a href=""><p>Pricing</p></a></div>
                            </div>
                            <div class="row my-1">
                                <div class="col md-12">
                                    <p><small> &copy;2016 Cyberbility</small></p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </footer><!-- #colophon -->
            </div><!--col end -->
        </div><!-- row end -->

    </div><!-- container end -->

</div><!-- wrapper end -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>