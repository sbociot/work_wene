(function() {
  "use strict";
$(".menu-toggle").on("click",function(){
  console.log("ok");
  $(".mysideNav").toggleClass('open_sideNav');
  $(".main").toggleClass('slide_content');
  $(".menu-toggle").toggleClass('hamburger_open');
  var windowSize = $(window).width();
  if(windowSize <= 414){
    console.log("la taille de l'ecran est inferieur a 400");
    $(".main h2").toggleClass('hideItems');
  }
});
})();
