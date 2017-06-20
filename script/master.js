(function() {
  "use strict";
  $('.menu-toggle').on("click",function() {
    $(".header_container").toggleClass('open_sideNav');
    // si au click sur le menu le container a la class open ajoute la marge au main_content
    // if($('div').eq(0).hasClass('open_sideNav')){
    //   console.log('yes');
    //   $(".main_content").css("margin-left" ,"auto");
    // }else{
    //     $(".content").css("margin-left" ,"auto");
    // }
  });

})();
