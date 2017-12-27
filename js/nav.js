$(document).ready(function(){
  var scroll_start = 0;
  var startchange = $('#nav-trigger');
  var offset = startchange.offset();
  if (startchange.length){
   $(document).scroll(function() {
      scroll_start = $(this).scrollTop();
      if(scroll_start > offset.top) {
          $(".navlist").css('box-shadow', 'rgba(0, 0, 0, 0.1) -4px 0 8px');
       } else {
          $('.navlist').css('box-shadow', 'none');
       }
   });
  }
  // 
  // var sections = $('#about, #trainers, #classes, #schedule, #contact'), nav = $('nav'), nav_height = nav.outerHeight();
  //
  // $(window).on('scroll', function () {
  //   var cur_pos = $(this).scrollTop();
  //
  //   sections.each(function() {
  //     var top = $(this).offset().top - nav_height,
  //         bottom = top + $(this).outerHeight();
  //
  //     if (cur_pos >= top && cur_pos <= bottom) {
  //       nav.find('a').removeClass('active');
  //       sections.removeClass('active');
  //
  //       $(this).addClass('active');
  //       nav.find('a[href="#'+$(this).attr('id')+'"]').addClass('active');
  //     }
  //   });
  // });
});
