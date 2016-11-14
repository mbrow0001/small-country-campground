<?php
/**
 * Template Name: Filter
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

        <div class="spacer"></div>
        <h1 class="text-sm-center">Filter</h1>
        <hr>

        <div class="spacer"></div>

        <div class="button-group filters-button-group">
          <button class="button is-checked" data-filter="*">show all</button>
          <button class="button" data-filter=".bill">Bill Murray</button>
          <button class="button" data-filter=".cage">Nicholas Cage</button>
          <button class="button" data-filter=".kitten">Kittens</button>
          <button class="button" data-filter=".beards">Beards</button>
          <button class="button" data-filter=".kitten, .cage">Cage & Kittens</button>
          <button class="button" data-filter=".beards, .bill">Murray & Beards</button>
        </div>

        <div class="filter">
          <!-- width of .grid-sizer used for columnWidth -->
          <div class="grid-sizer"></div>
          <div class="grid-item grid-item--height2 grid-item--width2 bill" style="background-image:url(http://fillmurray.com/400/400)">
            <img src="" alt="">
          </div>
          <div class="grid-item grid-item--height2 grid-item--width2 cage" style="background-image:url(http://www.placecage.com/500/500)">
            <img src="" alt="">
          </div>
          <div class="grid-item  cage" style="background-image:url(http://www.placecage.com/501/500)">
            <img src="" alt="">
          </div>
          <div class="grid-item grid-item--height2 grid-item--width2  bill" style="background-image:url(http://fillmurray.com/301/400)">
            <img src="" alt="">
          </div>
          <div class="grid-item grid-item--height2 cage" style="background-image:url(http://www.placecage.com/502/500)">
            <img src="" alt="">
          </div>
          <div class="grid-item grid-item--height2 alkali kitten" style="background-image:url(http://placekitten.com/500/500)">
            <img src="" alt="">
          </div>
          <div class="grid-item alkali bill" style="background-image:url(http://fillmurray.com/302/400)">
            <img src="" alt="">
          </div>
          <div class="grid-item grid-item--width2 bill" style="background-image:url(http://fillmurray.com/303/400)">
            <img src="" alt="">
          </div>
          <div class="grid-item grid-item--width2 alkaline-earth kitten" style="background-image:url(http://placekitten.com/501/500)">
            <img src="" alt="">
          </div>
          <div class="grid-item bill" style="background-image:url(http://fillmurray.com/304/400)">
            <img src="" alt="">
          </div>
          <div class="grid-item grid-item--width2  cage" style="background-image:url(http://www.placecage.com/503/500)">
            <img src="" alt="">
          </div>
          <div class="grid-item grid-item--width2 cage" style="background-image:url(http://www.placecage.com/504/500)">
            <img src="" alt="">
          </div>
          <div class="grid-item kitten" style="background-image:url(http://placekitten.com/502/500)">
            <img src="" alt="">
          </div>
          <div class="grid-item grid-item--width2 lanthanoid metal cage" style="background-image:url(http://www.placecage.com/505/500)">
            <img src="" alt="">
          </div>
          <div class="grid-item grid-item--height2 noble-gas non bill" style="background-image:url(http://fillmurray.com/305/400)">
            <img src="" alt="">
          </div>
          <div class="grid-item grid-item--height2 diatomic non bill" style="background-image:url(http://fillmurray.com/306/400)">
            <img src="" alt="">
          </div>
          <div class="grid-item actinoid cage" style="background-image:url(http://www.placecage.com/506/500)">
            <img src="" alt="">
          </div>
          <div class="grid-item actinoid metal cage" style="background-image:url(http://www.placecage.com/507/500)">
            <img src="" alt="">
          </div>
          <div class="grid-item kitten" style="background-image:url(http://placekitten.com/503/500)">
            <img src="" alt="">
          </div>
          <div class="grid-item grid-item--height2 grid-item--width2 kitten" style="background-image:url(http://placekitten.com/504/500)">
            <img src="" alt="">
          </div>
          <div class="grid-item grid-item--height2 kitten" style="background-image:url(http://placekitten.com/505/500)">
            <img src="" alt="">
          </div>
          <div class="grid-item kitten" style="background-image:url(http://placekitten.com/506/500)">
            <img src="" alt="">
          </div>
          <div class="grid-item kitten" style="background-image:url(http://placekitten.com/507/500)">
            <img src="" alt="">
          </div>

          <div class="grid-item grid-item--height2 grid-item--width2 beards" style="background-image:url(http://placebeard.it/500/480)">
            <img src="" alt="">
          </div>
          <div class="grid-item grid-item--width2 beards" style="background-image:url(http://placebeard.it/501/480)">
            <img src="" alt="">
          </div>
          <div class="grid-item grid-item--height2 grid-item--width2 beards" style="background-image:url(http://placebeard.it/502/480)">
            <img src="" alt="">
          </div>

          <div class="grid-item grid-item--height2 beards" style="background-image:url(http://placebeard.it/503/480)">
            <img src="" alt="">
          </div>
          <div class="grid-item grid-item--width2 beards" style="background-image:url(http://placebeard.it/504/480)">
            <img src="" alt="">
          </div>


          <div class="grid-item grid-item--height2 noble-gas non bill" style="background-image:url(http://fillmurray.com/305/400)">
            <img src="" alt="">
          </div>
          <div class="grid-item diatomic non bill" style="background-image:url(http://fillmurray.com/306/400)">
            <img src="" alt="">
          </div>
          <div class="grid-item actinoid cage" style="background-image:url(http://www.placecage.com/506/500)">
            <img src="" alt="">
          </div>
          <div class="grid-item actinoid metal cage" style="background-image:url(http://www.placecage.com/507/500)">
            <img src="" alt="">
          </div>
          <div class="grid-item kitten" style="background-image:url(http://placekitten.com/503/500)">
            <img src="" alt="">
          </div>
          <div class="grid-item kitten" style="background-image:url(http://placekitten.com/504/500)">
            <img src="" alt="">
          </div>
          <div class="grid-item kitten" style="background-image:url(http://placekitten.com/505/500)">
            <img src="" alt="">
          </div>
          <div class="grid-item kitten" style="background-image:url(http://placekitten.com/506/500)">
            <img src="" alt="">
          </div>
          <div class="grid-item kitten" style="background-image:url(http://placekitten.com/507/500)">
            <img src="" alt="">
          </div>

          <div class="grid-item beards" style="background-image:url(http://placebeard.it/500/480)">
            <img src="" alt="">
          </div>
          <div class="grid-item beards" style="background-image:url(http://placebeard.it/501/480)">
            <img src="" alt="">
          </div>
          <div class="grid-item beards" style="background-image:url(http://placebeard.it/502/480)">
            <img src="" alt="">
          </div>
        </div>



      </main><!-- #main -->

    </div><!-- #primary -->

  </div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
