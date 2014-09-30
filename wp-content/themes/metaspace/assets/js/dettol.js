$(document).ready(function(){
  $(function() {
    $('a[href*=#]:not([href=#])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html,body').animate({
            scrollTop: target.offset().top - 110
          }, 1000);
          return false;
        }
      }
    });
  });
  $(window).load(function(){
    if($(window).width() > 992){
      var heightLeft = $('.first > .col-md-6:first-child').height();
      $('.first > .col-md-6:nth-child(2)').css('height',heightLeft);
    }
  });
  $(window).resize(function(){
    if($(window).width() > 992){
      var heightLeft = $('.first > .col-md-6:first-child').height();
      $('.first > .col-md-6:nth-child(2)').css('height',heightLeft);
    }
  });

  $('#modal-video .close').click(function(){
    $('.video').attr('src', '');
    $('.video').attr('src', '//www.youtube.com/embed/pvc66cUajqo');
  });

  // $('.jcarousel li img').hover(function(){
  //   $(this).css('opacity','0.5');
  //   $(this).next('.school-name').css('display','block');
  //   },function(){
  //   $(this).css('opacity','1');
  //   $(this).next('.school-name').css('display','none');
  // });
  // $('.jcarousel li img:nth-child(3)').hover(function(){
  //   $(this).css('opacity','0.5');
  //   $(this).next('.school-name').css({
  //     'display':'block',
  //     'top':'70%'
  //   });
  //   },function(){
  //   $(this).css('opacity','1');
  //   $(this).next('.school-name').css('display','none');
  // });

  // $('.jcarousel li .school-name:nth-child(2)').hover(function(){
  //   $(this).prev('img').css('opacity', '0.5');
  //   $(this).css('display','block');
  //   },function(){
  //   $(this).prev('img').css('opacity', '1');
  //   $(this).css('display','none');
  // });
  // $('.jcarousel li .school-name:nth-child(4)').hover(function(){
  //   $(this).prev('img').css('opacity', '0.5');
  //   $(this).css('display','block');
  //   },function(){
  //   $(this).prev('img').css('opacity', '1');
  //   $(this).css('display','none');
  // });
});