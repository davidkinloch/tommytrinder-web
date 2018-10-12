$(function() {
	$('.nav__toggle').click( function(e) {
    	e.preventDefault();
    	$(this).toggleClass('active');
    	$('.nav').toggleClass('active');
    	$('body').toggleClass('fixed');
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