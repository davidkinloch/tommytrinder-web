$(function() {
 console.log( "doc triggered" );
	$('.nav__toggle').click( function(e) {
    	e.preventDefault();
    	$(this).toggleClass('active');
    	$('.nav').toggleClass('active');
    	$('body').toggleClass('fixed');
  	});

  $('.header .button--primary').click(function(e) {
    e.preventDefault();
    if ( $( this ).hasClass( "active" ) ) {
        $(this).removeClass('active').html("Contact Us");
        $('.modal').removeClass('active').fadeOut( "fast" ); 
      } else {
          $('.modal').addClass('active').fadeIn( "slow" );
      $(this).addClass('active').html("Close");    
    }
  });

	$("#mute-video").click( function (){
	    if( $("video").prop('muted') ) {
	          $("video").prop('muted', false);
	          $(this).addClass('active').html("Audio Off");
	    } else {
	      $("video").prop('muted', true);
	      $(this).removeClass('active').html("Audio On");
	    }
	  });
});



