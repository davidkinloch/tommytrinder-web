/* test*/
//CAPTIONS
  $('.thumbnails li').hover(function(){
    $(".caption p", this).stop().fadeIn("slow");
  }, function() {
    $(".caption p", this).stop().fadeOut("fast");
  });