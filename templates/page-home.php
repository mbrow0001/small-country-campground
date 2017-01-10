<?php
/**
* Template Name: Home
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
    <div class="row">
      <div id="primary" class="col-md-12 content-area">
        <main id="main" class="site-main" role="main">

          <!-- Slider -->
          <div class="row">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                  <div class="shadow"></div>
                  <img src="/wp-content/uploads/2016/12/14249775_1197762710267308_2452429550109535233_o.jpg" alt="First slide">
                  <div class="cap">
                    <h1 class="animate fadeIn text-sm-center">Welcome to Small Country Campground</h1>
                    <p class="animate fadeIn">Join the Small Country Campground family <br> where life long memories are made</p>
                    <a href="/our-story" class="btn btn-ghost">Read Our Story</a>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="shadow"></div>
                  <img src="http://cycat4.com/wp-content/uploads/2017/01/IMG_0770-2.jpg" alt="Second slide">
                  <div class="cap">
                    <h1 class="animate fadeIn text-sm-center">Virginia's Funnest Campground</h1>
                    <p class="animate fadeIn"> Between the lake, mini-golf course, pool, hiking, playgrounds and many events, there is never a dull moment at Small Country Campground for families of all ages and interests. </p>
                  </div>
                </div>
                <div class="carousel-item">                  
                  <div class="shadow"></div>
                  <img src="http://cycat4.com/wp-content/uploads/2017/01/pexels-photo-61129.jpg" alt="Third slide">
                  <div class="cap">
                    <h1 class="animate fadeIn text-sm-center">Where Life Long Memories Are Made</h1>
                    <p class="animate fadeIn">The families who visit come back year after year. Upon arrival, your children are picked up by a pack of friends. A safe, family friendly environment where your family can relax, unwind and spend some quality time. </p>
                  </div>
                </div>
              </div>
              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="icon-prev" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="icon-next" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
          <!-- end: Slider -->
          <div class="slider-shadow">
            <img src="http://cycat4.com/wp-content/uploads/2017/01/shadow-bottom.png">
          </div>

          <div class="spacer"></div>
          <div class="spacer"></div>

          <img class="bg-shape" src="http://cycat4.com/wp-content/uploads/2017/01/background.png">
          <img class="bg-shape" src="http://cycat4.com/wp-content/uploads/2017/01/bg-shape-3.png" style="
              top: 172vh;
          "><img class="bg-shape" src="http://cycat4.com/wp-content/uploads/2017/01/bg-shape-3.png" style="
              top: 209vh;
          ">

          <section class="welcome container">
            <div class="wtp__boxes">
              <div class="col-md-6 col-sm-12 wtp--padding">
                <a class="ml-0 box box--tall">                    
                  <div class="shadow shadow--blue"></div>
                  <h2 class="title">Check Out <br> <small>Upcoming Events at the Campground</small></h2> 
                  <div class="bg-img box--upcoming"></div>
                  <button href="#" class="btn-ghost">Check Out Upcoming Events at the Campground</button>
                  <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
                </a>
              </div>
              <div class="col-md-6 col-sm-12">
                <a href="#vid" class="box box--tall box--video">              
                  <div class="shadow--blue"></div>               
                  <div class="bg-img box--youtube"></div>
                  <div id="player"></div>
                </a>
              </div>
            </div>

            <div class="clearfix"></div>

            <!-- Ways to Play --> 
            <div class="col-lg-3 col-sm-4">
              <a class="box box--desc">                  
                <h4 class="box--desc__title">Ways to Play</h4>
                <p>Here we take play very seriously. Each year we improve and add ways to play that the whole family will love. Join us to make the types of memories that last your family a lifetime.</p>
              </a>
            </div>
            <div class="col-lg-9 col-md-8">
              <div class="col-md-4">
                <a class="box">                      
                  <div class="bg-img box--toys"></div>                    
                  <div class="shadow"></div>
                  <h5 class="title title--cap">Lake Toys</h5>                 
                  <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
                </a>
              </div>
              <div class="col-md-4">
                <a class="box">                      
                  <div class="bg-img box--play"></div>                    
                  <div class="shadow"></div>
                  <h5 class="title title--cap">Playgrounds</h5>                <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
                </a>
              </div>
              <div class="col-md-4">
                <a class="box">                      
                  <div class="bg-img box--mini"></div>                    
                  <div class="shadow"></div>
                  <h5 class="title title--cap">Mini Golf</h5>                      
                  <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
                </a>
              </div>
              <div class="col-lg-3 col-md-4">
                <a class="box">                  
                  <div class="bg-img box--pool"></div>
                  <div class="shadow"></div>
                  <h5 class="title title--cap">The Pool</h5>
                  <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
                </a>
              </div>
              <div class="col-lg-9 col-md-8">
                <a class="box">                      
                  <div class="bg-img box--hiking"></div>                    
                  <div class="shadow"></div>
                  <h5 class="title title--cap">Hiking Trails</h5>                      
                  <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
                </a>
              </div>
            </div>

            <div class="clearfix"></div>
            
            <!-- What's Near Us -->
            <div class="wtp__boxes">
              <div class="col-md-9">
                <a class="ml-0 box box--tall">                  
                  <div class="bg-img box--near"></div>                  
                  <div class="shadow shadow--blue"></div>
                  <h5 class="title">What's Near Us <br>
                    <small>Hiking, Caves, Nature, Wineries & Dining</small>
                  </h5>                  
                  <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
                </a>
              </div>
              <div class="col-md-3 wtp--padding--left">
                <a class="box box--tall">                  
                  <div class="bg-img box--camp2"></div>                  
                  <div class="shadow shadow--blue"></div>
                  <h5 class="title">???</h5>                  
                  <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </section>

          <!-- Ways to Stay -->
          <div class="wts row">
            <div class="wts_title">
              <h1 class="container">Ways to Stay</h1>
            </div>
            <div class="service-boxes">
              <div class="container">
                <div class="row">
                  <div class="col-md-4">                  
                    <div class="service-box">
                      <div class="service-icon">
                        <a href="/ways-to-stay/the-manor-house/">
                          <i class="fa fa-home" aria-hidden="true"></i>
                          <h4>The Manor House</h4>
                          <button type="button" class="btn-ghost">Check Availablity</button>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">                    
                    <div class="service-box">
                      <div class="service-icon">
                        <a href="/ways-to-stay/park-model-cabin-style/">
                         <i class="fa fa-bed" aria-hidden="true"></i>
                         <h4>Cabins</h4>
                         <button type="button" class="btn-ghost">Check Availablity</button>
                       </a>
                     </div>
                   </div>
                 </div>
                 <div class="col-md-4">                    
                  <div class="service-box">
                    <div class="service-icon">
                      <a href="#">
                       <i class="fa fa-compass" aria-hidden="true"></i>
                       <h4>Rent Our RV's</h4>
                       <button type="button" class="btn-ghost">Check Availablity</button>
                     </a>
                   </div>
                 </div>
               </div>

               <div class="clearfix"></div>
               <div class="spacer"></div>

               <div class="col-md-4">                    
                <div class="service-box">
                  <div class="service-icon">
                    <a href="/ways-to-stay/sites-for-your-tent/">
                      <i class="fa fa-free-code-camp" aria-hidden="true"></i>
                      <h4>Tent Camping Sites</h4>
                      <button type="button" class="btn-ghost">Check Availablity</button>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="service-box">
                  <div class="service-icon">
                    <a href="/ways-to-stay/camper-rv-rentals/">
                      <i class="fa fa-map-signs" aria-hidden="true"></i>
                      <h4>RV Camping Sites</h4>
                      <button type="button" class="btn-ghost">Check Availablity</button></a>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">                        
                  <div class="service-box">
                   <div class="service-icon">
                    <a href="">
                      <i class="fa fa-ticket" aria-hidden="true"></i>
                      <h4>Day Pass</h4>
                      <button type="button" class="btn-ghost">Check Availablity</button></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- end: Ways to Stay -->

        <div class="spacer"></div>

        <!-- Blog Articles -->
        <section class="container px-0 blog--home">
          <div id="owc-home--blog" class="owl-carousel owl-theme">

        <?php echo do_shortcode('[su_posts template="templates/su-blog-home.php"]') ?>

           <!--  <article class="item">
              <a href="#" class="blog__img" style="background-image: url(/wp-content/uploads/2016/12/IMG_0770.jpg)" alt="">
                <div class="shadow"></div>      
                <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
              </a>
              <div class="blog__detail">
                <p class="date">January 10th, 2017</p>
                <h4 class="blog__title">Blog Title</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora, maiores consequatur perferendis minima nam eveniet quos. </p>                        
              </div>
            </article>
            <article class="item">
              <a href="#" class="blog__img" style="background-image: url(/wp-content/uploads/2016/12/13620272_1148329961877250_5335866865786206549_n.jpg)" alt="">                
                <div class="shadow"></div>      
                <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
              </a>
              <div class="blog__detail">
                <p class="date">January 11th, 2017</p>
                <h4 class="blog__title">Blog Title</h4>
                <p>Tempora commodi, ad iusto, dolore dolorem sint laborum facere itaque hic sit explicabo maxime culpa, eos. </p>                        
              </article>
              <article class="item">
                <a href="#" class="blog__img" style="background-image: url(/wp-content/uploads/2016/12/P4112482.jpg)" alt="">               
                  <div class="shadow"></div>      
                  <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
                </a>
                <div class="blog__detail">
                  <p class="date">January 15th, 2017</p>
                  <h4 class="blog__title">Blog Title</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora, maiores consequatur perferendis minima nam eveniet quos. </p>                        
                </article> -->
              </div>
            </section>

            <div class="spacer"></div>


        <!-- Testimonials Slider -->
        <section class="row">
          <div class="parallax-window pw--home-testi" data-speed="0.8">
            <div class="parallax-slider text-md-center">
              <img src="/wp-content/uploads/2016/12/rainbow.jpg">
            </div>

            <div class="owl-carousel owl-theme owc-home">
              <div class="item">
                <p> 
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic recusandae nisi aliquid nesciunt quia, nihil! Sit perspiciatis illo blanditiis eligendi amet similique itaque nemo delectus nisi! Praesentium atque magnam laboriosam.
                </p>
                <p>
                  Testimonail #1
                </p>
              </div>
              <div class="item">
                <p> 
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic recusandae nisi aliquid nesciunt quia, nihil! Sit perspiciatis illo blanditiis eligendi amet similique itaque nemo delectus nisi! Praesentium atque magnam laboriosam.
                </p>
                <p>
                  Testimonail #2
                </p>
              </div>
              <div class="item">
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic recusandae nisi aliquid nesciunt quia, nihil! Sit perspiciatis illo blanditiis eligendi amet similique itaque nemo delectus nisi! Praesentium atque magnam laboriosam.
                  <cite>Testimonail #3</cite>
                </p>
              </div>
            </div>
          </div>
        </section>


          </main><!-- #main -->
        </div><!-- #primary -->
      </div><!-- .row -->
    </div><!-- Container end -->
  </div><!-- Wrapper end -->

  <?php get_footer(); ?>