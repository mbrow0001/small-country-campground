<?php
/**
 * Template Name: Owl Carousel
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package cyberbility-starter
 */

get_header(); ?>

<div class="wrapper" id="page-wrapper">

    <div id="content" class="container">

        <div class="row">

            <div id="primary" class="col-md-12 content-area">

                <main id="main" class="site-main" role="main">

                    <h1 class="text-md-center">Carousel Examples</h1>
                    <hr>
                    <div class="spacer"></div>
                    
                    <h4 class="text-md-center">auto width</h4>
                    <div class="owl-carousel owl-theme owc-one">
                        <div class="item" style="width:250px"><img src="https://unsplash.it/250/300/?random"/></div>
                        <div class="item" style="width:500px"><img src="https://unsplash.it/501/300/?random"/></div>
                        <div class="item" style="width:200px"><img src="https://unsplash.it/200/300/?random"/></div>
                        <div class="item" style="width:650px"><img src="https://unsplash.it/650/300/?random"/></div>
                        <div class="item" style="width:250px"><img src="https://unsplash.it/251/300/?random"/></div>
                        <div class="item" style="width:320px"><img src="https://unsplash.it/321/300/?random"/></div>
                        <div class="item" style="width:420px"><img src="https://unsplash.it/420/300/?random"/></div>
                        <div class="item" style="width:800px"><img src="https://unsplash.it/800/300/?random"/></div>
                        <div class="item" style="width:400px"><img src="https://unsplash.it/400/300/?random"/></div>
                        <div class="item" style="width:650px"><img src="https://unsplash.it/651/300/?random"/></div>
                        <div class="item" style="width:550px"><img src="https://unsplash.it/550/300/?random"/></div>
                        <div class="item" style="width:320px"><img src="https://unsplash.it/320/300/?random"/></div>
                    </div>
                    
                    <div class="spacer"></div>                    
                    <div class="clearfix"></div>
                    <h4 class="text-md-center">basic</h4>

                    <div class="owl-carousel owl-theme owc-basic">
                        <div> <img src="https://unsplash.it/250/300/?random" alt=""> </div>
                        <div> <img src="https://unsplash.it/250/301/?random" alt=""> </div>
                        <div> <img src="https://unsplash.it/250/302/?random" alt=""> </div>
                        <div> <img src="https://unsplash.it/250/303/?random" alt=""> </div>
                        <div> <img src="https://unsplash.it/250/304/?random" alt=""> </div>
                        <div> <img src="https://unsplash.it/250/305/?random" alt=""> </div>
                        <div> <img src="https://unsplash.it/250/306/?random" alt=""> </div>
                        <div> <img src="https://unsplash.it/250/307/?random" alt=""> </div>
                        <div> <img src="https://unsplash.it/250/308/?random" alt=""> </div>
                        <div> <img src="https://unsplash.it/250/309/?random" alt=""> </div>
                        <div> <img src="https://unsplash.it/250/310/?random" alt=""> </div>
                        <div> <img src="https://unsplash.it/250/311/?random" alt=""> </div>
                    </div>

                    <div class="spacer"></div>                    
                    <div class="clearfix"></div>
                    <h4 class="text-md-center">split-padding</h4>

                    <div class="owl-carousel owl-theme owc-split">
                        <div> <img src="https://unsplash.it/1900/800/"/> </div>
                        <div> <img src="https://unsplash.it/1901/800/"/> </div>
                        <div> <img src="https://unsplash.it/1902/800/"/> </div>
                        <div> <img src="https://unsplash.it/1903/800/"/> </div>
                        <div> <img src="https://unsplash.it/1904/800/"/> </div>
                        <div> <img src="https://unsplash.it/1905/800/"/> </div>
                        <div> <img src="https://unsplash.it/1906/800/"/> </div>
                    </div>

                </main><!-- #main -->

            </div><!-- #primary -->

        </div><!-- .row -->

    </div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>