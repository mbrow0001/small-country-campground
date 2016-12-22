<?php
/**
 * Template Name: Full Branch
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

  <div  id="content" class="container-fluid">

  	<h1>This is template came from a Branch</h1>

    <div class="row">

      <div id="primary" class="col-md-12 content-area">

       <main id="main" class="site-main" role="main">

        <?php while ( have_posts() ) : the_post(); ?>
          <?php get_template_part( 'loop-templates/content', 'page' ); ?>                
        <?php endwhile; // end of the loop. ?>
        
    </main><!-- #main -->

  </div><!-- #primary -->

</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
