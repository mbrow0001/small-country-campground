<?php
/**
 * Template Name: About Page Demo
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package cyberbility-starter
 */

get_header(); ?>

<div class="header-img">
<?php the_post_thumbnail(); ?>
</div>

<div class="clearfix"></div>

<div class="wrapper" id="page-wrapper">

  <div  id="content" class="container-fluid">

    <div class="row">

      <div id="primary" class="content-area">

       <main id="main" class="site-main" role="main">

        <?php while ( have_posts() ) : the_post(); ?>
          <?php get_template_part( 'loop-templates/content', 'page' ); ?>                
        <?php endwhile; // end of the loop. ?>

        <section class="welcome container">
        <div class="row">
          <div class="col-sm-12 bar">
            <h2>Aperiam illum quos libero hic facilis omnis saepe tenetur</h2>
            <p class="lead bar">Molestiae, similique id! Assumenda adipisci molestias eveniet temporibus maxime. Aperiam perspiciatis amet labore quam, aliquid a atque, praesentium illum hic et, blanditiis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis quibusdam fuga quo ducimus deleniti ratione odio sint vero, porro, alias provident explicabo facilis, aliquid pariatur iste ea libero, dignissimos nam.</p>
            <p class="lead bar">Impedit rerum voluptates, magnam iusto officiis molestiae. Temporibus consectetur pariatur, dolor rerum ipsam molestias. Nemo odio expedita, sunt non ab, amet quibusdam!  Natus accusamus voluptas possimus totam itaque dolorem fugiat, reprehenderit unde perferendis voluptatibus cumque libero eaque fuga, atque consectetur tempore harum laudantium sint. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, voluptate, optio ex provident velit deserunt, quod facilis commodi maxime, suscipit blanditiis esse. Labore placeat ipsam, voluptates voluptatum eos quaerat commodi.</p>
          </div>
        </div>          
        </section>

        <section class="one">
          <div class="container">
          <div class="row bar-1">
            <div class="col-sm-4">
              <h5>Lead Initiatives with Confidence</h5>
              <p>Understanding the data behind a district initiative can mean the difference between success and underperformance. Using our SmartTag feature, any data points you currently track can be utilized to form a custom-filtered report based on your specific criteria - giving you and your community the assurance that your resources are being put to good use.</p>
            </div>
            <div class="col-sm-4">
              <h5>Develop Strategy Based on Data</h5>
              <p>Helping each student requires a plan of action, and to develop that plan you need data. And we don't just mean attendance and state assessments - we mean all of it. SchoolStatus provides a single-click search feature to access a full StudentCard overview in seconds. This gives educators the ability to truly See the Whole Student and create a plan unique to each child.</p>
            </div>
            <div class="col-sm-4">
             <h5>Master Compliance Using Minimal Clicks</h5>
             <p>SchoolStatus takes the burden of data compliance off of your shoulders, and gives educators much-needed time back to do what they do best. With a clear view of where you stand on any given monitored statistic, you will always have access to the data you need in order to master reporting up to the state, your board, or your community.</p>
           </div>
         </div>
         </div>
       </section>
   
            <div class="two parallax-window" data-speed="0.2">
                <div class="cap baz">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi architecto quibusdam iusto odit laudantium. </div>
              <div class="parallax-slider text-md-center">
                <img src="https://unsplash.it/1600/800/?random">
              </div>
            </div>


      <section class="container three">
        <div class="row">
          <div class="col-sm-6 bar">
            <h3 class="title">Asperiores sit animi nam et voluptates earum.</h3>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum laborum neque nam expedita dolor pariatur voluptatum vel accusamus, eos officia nemo laudantium dolorem, provident Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus necessitatibus neque eveniet a ipsum quaerat quis consectetur. Incidunt asperiores corporis nostrum facere commodi at, quo praesentium, doloribus vitae cupiditate ipsam. consequuntur aperiam repudiandae cumque eum non.</p>
            <button class="btn">This Is A Button</button>
          </div>
          <div class="col-sm-5 offset-sm-1 ms-lazy">
          	 <img class="" src="https://unsplash.it/600/500/?random" alt="">
          </div>
        </div>
      </section>

      <section class="last">
          <div class="col-sm-6 box box--one">          
          	<div class="text">
            <h3 class="title">Hover Title</h3>
            <button class="btn">Click Here</button>
            </div>
          </div>
          <div class="col-sm-6 box box--two">          
          	<div class="text">
            <h3 class="title">Hover Title</h3>
            <button class="btn">Click Here</button>
            </div>
          </div>
      </section>

        
    </main><!-- #main -->

  </div><!-- #primary -->

</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
