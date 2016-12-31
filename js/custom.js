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

});