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
                  <div class="gradient"></div>
                  <div class="shadow"></div>
                  <img src="/wp-content/uploads/2016/12/14249775_1197762710267308_2452429550109535233_o.jpg" alt="First slide">
                  <div class="cap">
                    <h1 class="animate fadeIn text-sm-center">Welcome</h1>
                    <p class="animate fadeIn">Join the Small Country Campground family <br> where life long memories are made</p>
                    <a href="#" class="btn btn-ghost">Read Our Story</a>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="gradient"></div>
                  <div class="shadow"></div>
                  <img src="https://unsplash.it/2100/1200/?random" alt="Second slide">
                  <div class="cap">
                    <h1 class="animate fadeIn text-sm-center">Ab dicta soluta commodi blanditiis, cupiditate iure sapiente libero molestiae nihil.</h1>
                    <p class="animate fadeIn"> sed voluptatum dolor a consectetur, consequuntur laboriosam dolore reiciendis, deserunt voluptatibus?</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="gradient"></div>
                  <div class="shadow"></div>
                  <img src="https://unsplash.it/2202/1200/?random" alt="Third slide">
                  <div class="cap">
                    <h1 class="animate fadeIn text-sm-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h1>
                    <p class="animate fadeIn"> Eveniet sequi, maxime aut! Tempore accusantium sapiente ratione fugit animi. Unde omnis nesciunt molestiae, ipsam facilis dolorem velit ut amet reprehenderit illo? </p>
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

          <div class="clearfix"></div>
          <div class="spacer"></div>
          <div class="spacer"></div>

          <section class="welcome wtp__full-boxes">
            <div class="row">
              <div class="col-md-6 col-sm-12">
                <div class="box box--tall box--upcoming">
                  <div class="gradient"></div>
                  <div class="shadow"></div>
                  <a href="#" class="btn-ghost">Check Out Upcoming Events at the Campground</a>
                </div>
              </div>
              <div class="col-md-6 col-sm-12">
                <div class="box box--tall box--youtube">
                  <div class="gradient"></div>
                  <div class="shadow"></div>
                  <i class="btn-play fa fa-play"></i>
                </div>
              </div>
            </div>
            
            <!-- Ways to Play -->            
            <div class="row">
              <div class="col-md-3">
                <div class="box box--desc">
                  <h4 class="box--desc__title"><strong>Ways to Play</strong></h4>
                  <p>Here we take play very seriously. Each year we improve and add ways to play that the whole family will love. Join us to make the types of memories that last your family a lifetime.</p>
                </div>
              </div>
              <div class="col-md-9">
                <div class="row">
                  <div class="col-md-4">
                    <div class="box box--toys">
                      <div class="gradient"></div>
                  <div class="shadow"></div>
                      <h5 class="title">Lake Toys</h5>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="box box--play">
                      <div class="gradient"></div>
                  <div class="shadow"></div>
                      <h5 class="title">Playgrounds</h5>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="box box--mini">
                      <div class="gradient"></div>
                  <div class="shadow"></div>
                      <h5 class="title">Mini Golf</h5>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <div class="box box--camp">
                      <div class="gradient"></div>
                  <div class="shadow"></div>
                      <h5 class="title">???</h5>
                    </div>
                  </div>
                  <div class="col-md-9">
                    <div class="box box--hiking">
                      <div class="gradient"></div>
                  <div class="shadow"></div>
                      <h5 class="title">Hiking Trails</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <div class="box box--amen">
                  <div class="gradient"></div>
                  <div class="shadow"></div>
                  <h5 class="title">Amenities</h5>
                </div>
              </div>
              <div class="col-md-3">
                <div class="box box--bag">
                  <div class="gradient"></div>
                  <div class="shadow"></div>
                  <h5 class="title">???</h5>
                </div>
              </div>
              <div class="col-md-3">
                <div class="box box--paint">
                  <div class="gradient"></div>
                  <div class="shadow"></div>
                  <h5 class="title">???</h5>
                </div>
              </div>
              <div class="col-md-3">
                <div class="box box--pool">
                  <div class="gradient"></div>
                  <div class="shadow"></div>
                  <h5 class="title">The Pool</h5>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-9">
                <div class="box box--tall box--near">
                  <div class="gradient"></div>
                  <div class="shadow"></div>
                  <h5 class="title">What's Near Us</h5>
                </div>
              </div>
              <div class="col-md-3">
                <div class="box box--tall box--camp2">
                  <div class="gradient"></div>
                  <div class="shadow"></div>
                  <h5 class="title">???</h5>
                </div>
              </div>
            </div>
          </section>

        <div class="spacer"></div>
        <div class="spacer"></div>

        <!-- Ways to Stay -->
        <div class="container text-xs-center">
          <div class="service-inner">
            <div class="row service-boxes">
              <div class="col-md-4 px-1 service-col">
                <div class="service-box">
                  <div class="service-icon">
                    <a href="">
                      <i class="fa fa-home" aria-hidden="true"></i>
                      <h4>The Manor House</h4></a>
                      <button type="button" class="btn btn-secondary btn-lg">Check Availablity</button>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 px-1 ">
                  <div class="service-box">
                    <div class="service-icon">
                      <a href="">
                       <i class="fa fa-bed" aria-hidden="true"></i>
                       <h4>Cabins</h4></a>
                       <button type="button" class="btn btn-secondary btn-lg">Check Availablity</button>
                     </div>
                   </div>
                 </div>
                 <div class="col-md-4 px-1 ">
                  <div class="service-box">
                    <div class="service-icon">
                      <a href="">
                       <i class="fa fa-compass" aria-hidden="true"></i>
                       <h4>Rent Our RV's</h4>
                       <button type="button" class="btn btn-secondary btn-lg">Check Availablity</button></a>
                     </div>
                   </div>
                 </div>
               </div>
               <div class="spacer"></div>
               <div class="row service-boxes">
                <div class="col-md-4 px-1 ">
                  <div class="service-box">

                    <div class="service-icon">
                      <a href="/our-facility-2/">
                        <i class="fa fa-free-code-camp" aria-hidden="true"></i>
                        <h4>Tent Camping Sites</h4></a>
                        <button type="button" class="btn btn-secondary btn-lg">Check Availablity</button>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 px-1 ">
                    <div class="service-box">
                      <div class="service-icon">
                        <a href="">
                          <i class="fa fa-map-signs" aria-hidden="true"></i>
                          <h4>RV Camping Sites</h4></a>
                          <button type="button" class="btn btn-secondary btn-lg">Check Availablity</button>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 px-1 ">
                      <div class="service-box">
                       <div class="service-icon">
                        <a href="">
                          <i class="fa fa-ticket" aria-hidden="true"></i>
                          <h4>Day Pass</h4></a>
                          <button type="button" class="btn btn-secondary btn-lg">Check Availablity</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end: Ways to Stay -->

              <div class="spacer"></div>
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

              <div class="spacer"></div>
              <div class="spacer"></div>

              <section class="container">
                <div class="row">
                  <div class="col-md-4">
                    <img src="/wp-content/uploads/2016/12/IMG_0770.jpg" alt="">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora, maiores consequatur perferendis minima nam eveniet quos, doloribus provident. Voluptatum accusamus aperiam, molestiae tempore obcaecati delectus amet facere laboriosam suscipit corrupti.</p>
                    <a class="btn btn-ghost" href="#">Read Story</a>
                  </div>
                  <div class="col-md-4">
                    <img src="/wp-content/uploads/2016/12/IMG_0770.jpg" alt="">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim iusto earum cum tenetur laborum! Ex labore, eveniet alias quas praesentium dolore, rem dolor, recusandae ducimus esse temporibus odit amet tempore.</p>
                    <a class="btn btn-ghost" href="#">Read Story</a>
                  </div>
                  <div class="col-md-4">
                    <img src="/wp-content/uploads/2016/12/IMG_0770.jpg" alt="">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, magnam at voluptatem. Eveniet, aliquam, vitae. Illo consectetur odit unde, assumenda ratione nobis, quasi voluptate, quas architecto molestiae accusamus perferendis. Commodi.</p>
                    <a class="btn btn-ghost" href="#">Read Story</a>
                  </div>
                </div>
              </section>


            </main><!-- #main -->
          </div><!-- #primary -->
        </div><!-- .row -->
      </div><!-- Container end -->
    </div><!-- Wrapper end -->

    <?php get_footer(); ?>