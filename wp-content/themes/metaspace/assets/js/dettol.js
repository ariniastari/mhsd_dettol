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
});