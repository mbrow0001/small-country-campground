jQuery(document).ready(function($) {

  /*
  **  Parallax 
  */
  $('.parallax-window').parallax({
    naturalWidth: 800,
    naturalHeight: 400
  });

  /*
  **  FullPage.js 
  */
  $('#fullpage').fullpage({ });

  /*
  **  Scroll Reveal 
  */
  window.sr = new ScrollReveal({ 
    origin: 'bottom',
    reset: true,
    duration: 400,
    distance: '50px',
    opacity: 0,
    scale: 0,
    easing: 'ease-in-out',
    viewFactor: 0.4,
    mobile: true
  });
  sr.reveal('.foo');
  sr.reveal('.bar', {origin: 'left',viewFactor: 0.8, duration: 800});
  sr.reveal('.baz', {origin: 'right',viewFactor: 0.8});
  //bar 
  sr.reveal('.bar-1', {duration:200}, 100);
  sr.reveal('.bar-2', {origin: 'left', duration:1000}, 100);
  sr.reveal('.bar-3', {duration:2000}, 200);
  //masonry
  sr.reveal('.ms-lazy', {origin: 'bottom', duration:500});

  /* 
  **  Masonry 
  */
  $('.masonry').masonry({
    // set itemSelector so .grid-sizer is not used in layout
    itemSelector: '.grid-item',
    // use element for option
    columnWidth: '.grid-sizer',
    percentPosition: true
  });

  $('.masonry-two').masonry({
    // set itemSelector so .grid-sizer is not used in layout
    itemSelector: '.grid-item',
    // use element for option
    columnWidth: '.grid-sizer',
    percentPosition: true
  });

  /*
  **  Isotope 
  */
  var $iso = $('.filter').isotope({
    itemSelector: '.grid-item',
    percentPosition: true,
    masonry: {
      // use element for option
      columnWidth: '.grid-sizer'
    }
  });
  
  // bind filter button click
  $('.filters-button-group').on( 'click', 'button', function() {
    var filterValue = $( this ).attr('data-filter');
    $iso.isotope({ filter: filterValue });
  });
  // change is-checked class on buttons
  $('.button-group').each( function( i, buttonGroup ) {
    var $buttonGroup = $( buttonGroup );
    $buttonGroup.on( 'click', 'button', function() {
      $buttonGroup.find('.is-checked').removeClass('is-checked');
      $( this ).addClass('is-checked');
    });
  });

  /*
  **  Owl Carousel
  */
  $('.owc-basic').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots: true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
  });

  $('.owc-home').owlCarousel({ 
    loop:true,
    margin:10,
    nav: false,
    dots: true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
  });

  $('#owc-home--blog').owlCarousel({ 
    loop:true,
    nav: true,
    navText: ['<i class="fa fa-arrow-circle-o-left"></i>','<i class="fa fa-arrow-circle-o-right"></i>'],
    dots: false,
    margin:0,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
  });

  // Bootstrap 3 Navbar Affix
    var toggleAffix = function(affixElement, wrapper, scrollElement) {

    var height = affixElement.outerHeight(),
        top = 500;
    if (scrollElement.scrollTop() >= top){
        wrapper.height(height);
        affixElement.addClass("affix");
    }
    else {
        affixElement.removeClass("affix");
        wrapper.height('auto');
    }

  };


  $('[data-toggle="affix"]').each(function() {
    var ele = $(this),
        wrapper = $('<div></div>');

    $(window).on('scroll resize', function() {
        toggleAffix(ele, wrapper, $(this));
    });

    // init
    toggleAffix(ele, wrapper, $(window));
  });


}); // end Jquery



       // 3. This function creates an <iframe> (and YouTube player)
      //    after the API code downloads.
      var player;
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
          height: '108%',
          width: '108%',
          playerVars: {
                    autoplay: 1,
                    loop: 1,
                    controls: 0,
                    enablejsapi: 1,
                    showinfo: 0,
                    autohide: 1,
                    modestbranding: 1,
                    rel: 0,
                    vq: 'hd1080'},
          videoId: 'DBKJImEUURA',
          events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          }
        });
      }

      // 4. The API will call this function when the video player is ready.
      function onPlayerReady(event) {
        event.target.playVideo();
        player.mute();
      }

      var done = false;
      function onPlayerStateChange(event) {
        
      }
      function stopVideo() {
        player.stopVideo();
      }