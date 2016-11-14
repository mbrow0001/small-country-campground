<?php
/**
 * Template Name: Home Idea
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
    
    <div  id="content" class="container">

        <div class="row">
        
    	   <div id="primary" class="col-md-12 content-area">
           
                 <main id="main" class="site-main" role="main">

                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php get_template_part( 'loop-templates/content', 'page' ); ?>                
                    <?php endwhile; // end of the loop. ?>

                  <div class="row">
                    <div class="col-sm-4">
                      <div class="home-srv">
                        <img src="http://placehold.it/50/50/" alt="">
                        <h4 class="title">Title Here</h4>
                        <p class="txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus quo consequuntur modi optio recusandae.</p>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="home-srv">
                        <img src="http://placehold.it/50/50/" alt="">
                        <h4 class="title">Title Here</h4>
                        <p class="txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. placeat, itaque suscipit vero nobis dicta. Sit!</p>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="home-srv">
                        <img src="http://placehold.it/50/50/" alt="">
                        <h4 class="title">Title Here</h4>
                        <p class="txt">Lorem impedit ipsum dolor impedit sit amet, consectetur adipisicing elit. incidunt impedit tenetur dolor!</p>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-4 ">
                      <div class="home-srv">
                        <img src="http://placehold.it/50/50/" alt="">
                        <h4 class="title">Title Here</h4>
                        <p class="txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus quo consequuntur modi optio recusandae.</p>
                      </div>
                    </div>
                    <div class="col-sm-4 ">
                      <div class="home-srv">
                        <img src="http://placehold.it/50/50/" alt="">
                        <h4 class="title">Title Here</h4>
                        <p class="txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. placeat, itaque suscipit vero nobis dicta. Sit!</p>
                      </div>
                    </div>
                    <div class="col-sm-4 ">
                      <div class="home-srv">
                        <img src="http://placehold.it/50/50/" alt="">
                        <h4 class="title">Title Here</h4>
                        <p class="txt">Lorem impedit ipsum dolor impedit sit amet, consectetur adipisicing elit. incidunt impedit tenetur dolor!</p>
                      </div>
                    </div>
                  </div>



                </main><!-- #main -->
               
    	    </div><!-- #primary -->

        </div><!-- .row -->
        
    </div><!-- Container end -->
    
</div><!-- Wrapper end -->

<?php get_footer(); ?>
