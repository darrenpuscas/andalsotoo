console.log('front-fixed-menu');
jQuery( document ).ready(function( $ ) {


    var  mn = $(".front-fixed-menu");
        fix = "fix";
        hdr = $('wrap').height();

    $(window).scroll(function() {
      if( $(this).scrollTop() > 5 ) {
        mn.addClass(fix);
      } else {
        mn.removeClass(fix);
      }
    });
});
