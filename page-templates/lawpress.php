<?php
/**
 * Template Name: LawPress
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

      <div id="primary" class="content-area">

       <main id="main" class="site-main" role="main">

         <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img src="https://unsplash.it/2200/1000/?random" alt="First slide">
              <div class="cap">
                <h1 class="animate fadeInUp text-sm-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h1>
                <p class="animate fadeInUp fadeInUp--slow">Amet illum libero animi sunt inventore soluta! Reiciendis nobis ad harum, sunt, officiis odit excepturi eos non, laborum iure pariatur, fugiat.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="https://unsplash.it/2200/1000/?random" alt="Second slide">
              <div class="cap">
                <h1 class="animate fadeInUp text-sm-center">Ab dicta soluta commodi blanditiis, cupiditate iure sapiente libero molestiae nihil.</h1>
                <p class="animate fadeInUp fadeInUp--slow"> sed voluptatum dolor a consectetur, consequuntur laboriosam dolore reiciendis, deserunt voluptatibus?</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="https://unsplash.it/2200/1000/?random" alt="Third slide">
              <div class="cap">
                <h1 class="animate fadeInUp text-sm-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h1>
                <p class="animate fadeInUp fadeInUp--slow"> Eveniet sequi, maxime aut! Tempore accusantium sapiente ratione fugit animi. Unde omnis nesciunt molestiae, ipsam facilis dolorem velit ut amet reprehenderit illo? </p>
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

        <div class="col-sm-12">
        <div class="spacer"></div>
        <div class="spacer"></div>
          <div class="row">
            <div class="col-sm-12 text-sm-center">
              <h2>Latest News<br><small>the most recent info</small></h2>
            </div>
          </div>

          <div class="spacer"></div>

          <div class="row">
            <div class="col-sm-4 text-sm-center">
              <h4>Example title</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta aperiam aliquam ipsam modi. Ab eum voluptates, voluptate eaque quas id tempore qui commodi nihil quos harum, facere magni amet quo!</p>
              <a href="" class="btn btn-primary btn-big">Read More</a>
            </div>
            <div class="col-sm-4 text-sm-center">
              <h4>Example title</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum aut aliquam asperiores labore soluta ex iste, nam accusamus assumenda officia! Culpa sapiente voluptate minima pariatur placeat debitis dolorem officiis quo.</p>
              <a href="" class="btn btn-primary btn-big">Read More</a>
            </div>
            <div class="col-sm-4 text-sm-center">
              <h4>Example title</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque mollitia adipisci blanditiis ipsam accusamus, praesentium, quas explicabo impedit esse consequatur saepe magnam. Cum odio, rem possimus quae cupiditate. Ipsa, explicabo.</p>
              <a href="" class="btn btn-primary btn-big">Read More</a>
            </div>
          </div>
        </div>

        <div class="clearfix"></div>

        <div class="spacer"></div>
        <div class="spacer"></div>
        <div class="spacer"></div>

        <div class="parallax-window">
          <div class="parallax-slider text-md-center">
            <img src="https://unsplash.it/1200/800/?random">
            <h1 style="position:absolute; top: 40%; left: 20%; right: 20%; color:#FFF">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi architecto quibusdam iusto odit laudantium distinctio ex, quos aliquid! </h1>
            <p>Some other Content</p>
          </div>
        </div>

        <div class="clearfix"></div>
        
        <div class="col-sm-12" style="background: darkgrey">
          <div class="spacer"></div>

          <div class="row">
            <div class="col-sm-12 text-sm-center">
              <h2>See what our clients<br>are saying</h2>
            </div>
          </div>

          <div class="spacer"></div>

          <div class="row">
            <div class="col-sm-6 text-sm-center">
              <div class="row">
                <div class="col-sm-4">
                  <img src="http://placekitten.com/200/200" alt="">
                </div>
                <div class="col-sm-8">
                  <blockquote class="blockquote">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi velit consequatur veniam, libero corporis veritatis provident accusantium itaque, earum laborum minus, nisi. Unde temporibus explicabo, hic, maiores doloribus animi architecto.</p>
                    <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                  </blockquote>
                </div>
              </div>
            </div>
            <div class="col-sm-6 text-sm-center">
              <div class="row">
                <div class="col-sm-4">
                  <img src="http://placekitten.com/200/200" alt="">
                </div>
                <div class="col-sm-8">
                  <blockquote class="blockquote">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi voluptas quod, fuga facere, maiores itaque sunt nihil deserunt earum officia facilis esse praesentium saepe perferendis optio ipsum, dolorem voluptatibus mollitia!</p>
                    <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                  </blockquote>
                </div>
              </div>
            </div>
          </div>
          <div class="spacer"></div>
        </div><!-- end: Testimonials -->
        
        <!-- start: Partner Logos -->
        <div class="col-sm-12" style="background: orange">
          <div class="spacer"></div>
          <div class="spacer"></div>

          <div class="row">
            <div class="col-sm-12 text-sm-center">
              <h2>Big or Small<br><strong>businesses trust us</strong></h2>
            </div>
          </div>

          <div class="spacer"></div>

          <div class="row text-sm-center">
            <div class="col-sm-3">
              <h2>Business Logo</h2>
            </div>
            <div class="col-sm-3">
              <h2>Business Logo</h2>
            </div>
            <div class="col-sm-3">
              <h2>Business Logo</h2>
            </div>
            <div class="col-sm-3">
              <h2>Business Logo</h2>
            </div>
          </div>
          <div class="spacer"></div>
          <div class="spacer"></div>
        </div><!-- end: Partner Logos -->

        <!-- start: boxes -->
        <div class="col-sm-12" style="background: darkgrey">
          <div class="spacer"></div>

          <div class="row">
            <div class="col-sm-12 text-sm-center">
              <h2>Legal<br>Practice Areas</h2>
            </div>
          </div>

          <div class="spacer"></div>

          <div class="row">
            <div class="col-sm-4 bar">
              <h3><i class="fa fa-5x fa-home pull-left"></i></h3>
              <h4>Example Title Here</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi nostrum excepturi, provident modi praesentium eaque eius accusantium voluptatum culpa, dolores sunt, quam possimus? Necessitatibus quasi enim veritatis iste id repellat.</p>
            </div>
            <div class="col-sm-4 bar">
              <h3><i class="fa fa-5x fa-home pull-left"></i></h3>
              <h4>Example Title Here</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium voluptatem sit eos in vero, eligendi earum officia, sunt numquam accusamus nihil reiciendis repellat incidunt dolore excepturi doloremque unde, amet ratione.</p>
            </div>
            <div class="col-sm-4 bar">
              <h3><i class="fa fa-5x fa-home pull-left"></i></h3>
              <h4>Example Title Here</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi ut expedita atque enim a consequatur sunt excepturi eius quos. Obcaecati vitae porro vero dicta, esse. Ducimus architecto natus laborum tempora.</p>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-4 bar">
              <h3><i class="fa fa-5x fa-home pull-left"></i></h3>
              <h4>Example Title Here</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi nostrum excepturi, provident modi praesentium eaque eius accusantium voluptatum culpa, dolores sunt, quam possimus? Necessitatibus quasi enim veritatis iste id repellat.</p>
            </div>
            <div class="col-sm-4 bar">
              <h3><i class="fa fa-5x fa-home pull-left"></i></h3>
              <h4>Example Title Here</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium voluptatem sit eos in vero, eligendi earum officia, sunt numquam accusamus nihil reiciendis repellat incidunt dolore excepturi doloremque unde, amet ratione.</p>
            </div>
            <div class="col-sm-4 bar">
              <h3><i class="fa fa-5x fa-home pull-left"></i></h3>
              <h4>Example Title Here</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi ut expedita atque enim a consequatur sunt excepturi eius quos. Obcaecati vitae porro vero dicta, esse. Ducimus architecto natus laborum tempora.</p>
            </div>
          </div>
          <div class="spacer"></div>
        </div><!-- end: boxes -->


        <!-- start: Partner Logos -->
        <div class="col-sm-12" style="background: orange">
          <div class="spacer"></div>
          <div class="spacer"></div>

          <div class="row">
            <div class="col-sm-6">
              <img src="http://fillmurray.com/1200/400" alt="">
            </div>
            <div class="col-sm-6">
              <h2>Big or Small<br><strong>businesses trust us</strong></h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic provident vitae tenetur inventore doloribus dolores eum, numquam earum maxime. Aliquid minus illum eum dolore consequatur illo, error voluptate dicta dolorum!</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni, mollitia, animi. Consequuntur ipsum, molestiae possimus inventore quam laudantium illum, sed, fugit quae atque facilis repellat sequi ad quas nobis tenetur.</p>
            </div>
          </div>

          <div class="spacer"></div>

      </main><!-- #main -->

    </div><!-- #primary -->

  </div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
