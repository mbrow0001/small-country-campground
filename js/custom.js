jQuery(document).ready(function($) {

  /* 
  **  ScrollSpy 
  */
  
  $('body').scrollspy({ target: '#navbar-example' });

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

  $('#fullpage').fullpage({
  //Scrolling
  css3: true,
  scrollingSpeed: 700,
  easing: 'easeInOutCubic',
  easingcss3: 'ease',
  //Accessibility
  keyboardScrolling: true,
  animateAnchor: true,
  recordHistory: true
  });

  /*
  **  Scroll Reveal 
  */

  //defaults 
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

  // bill
  sr.reveal('.bill-1', {origin: 'top', duration:500}, 200);
  sr.reveal('.bill-2', {origin: 'left', duration:1000}, 200);
  sr.reveal('.bill-3', {origin: 'right', duration:500}, 400);

  // cats
  sr.reveal('.cat-1', {origin: 'top', duration:1500}, 200);
  sr.reveal('.cat-2', {origin: 'right', duration:2000}, 500);
  sr.reveal('.cat-3', {origin: 'left', duration:500}, 600);

  //masonry
  sr.reveal('.ms-lazy', {origin: 'bottom', duration:500});


  /* 
  **  Masonry 
  */

  var msnry = new Masonry( '.masonry', {
    // set itemSelector so .grid-sizer is not used in layout
    itemSelector: '.grid-item',
    columnWidth: 250,
    isFitWidth: true
  });

  $('.masonry--res').masonry({
    // set itemSelector so .grid-sizer is not used in layout
    itemSelector: '.grid-item',
    // use element for option
    columnWidth: '.grid-sizer',
    percentPosition: true
  });

  /*
  **  Isotope 
  */

  // filter Example
  var $iso = $('.filter').isotope({
    itemSelector: '.grid-item',
    percentPosition: true,
    masonry: {
      // use element for option
      columnWidth: '.grid-sizer'
    }
  });

  // Protek Example
  var $isoProtek = $('.protek-filter').isotope({
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
    $isoProtek.isotope({ filter: filterValue });
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

  $('.owc-split').owlCarousel({
    items:1,
    stagePadding: 150,
    autoplay: true,
    loop:true,
    margin:10,
    nav:true,
    responsive:{
      600:{
        items:1
      }
    }
  });

  $('.owc-one').owlCarousel({ 
    margin:10,
    loop:true,
    autoWidth:true,
    items:4
  });

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

});