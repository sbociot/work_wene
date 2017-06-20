(function() {
  "use strict";
  $('.menu-toggle').on("click",function() {
    $(".header_container").toggleClass('open_sideNav');
    $(".mysideNav").toggleClass('side_nav_open');
    if($('div').eq(0).hasClass('side_nav_open')){
      console.log('yes');
      $(".main_content").toggleClass('push_content');
    }else{
        $(".main_content").toggleClass('push_content');
    }
  });

})();
