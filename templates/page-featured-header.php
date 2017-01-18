<?php
/**
 * Template Name: Featured Header
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package cyberbility-starter
 */

$header = get_theme_mod( 'header_layout_choice', 'default');
if ( $header !== 'default') {
  get_template_part('templates/headers/header', $header);
} else {
  get_header();
} ?>

<div class="header-img">
  <?php the_post_thumbnail(); ?>
  <div class="shadow"></div>
  <div class="title">
    <?php the_title(); ?>
  </div>
</div>


<div class="wrapper" id="page-wrapper">

  <div  id="content" class="container">

    <div class="row">

      <div id="primary" class="col-md-12 content-area">

       <main id="main" class="site-main" role="main">

        <?php while ( have_posts() ) : the_post(); ?>
          <?php get_template_part( 'templates/content', 'page' ); ?>                
        <?php endwhile; // end of the loop. ?>
        
    </main><!-- #main -->

  </div><!-- #primary -->

</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
