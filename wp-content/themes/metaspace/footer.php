<div id="footer" class="clearfix">
  <div class="container clearfix">
    <div class="row">
    <div class="col-sm-2">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-footer.png" alt="">
      <a href="http://www.dettol.co.id" target="_blank" class="hidden-sm hidden-lg hidden-md">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-footer-right.png" alt="">
      </a>
    </div>
    <div class="col-sm-8">
      <div class="text">
        <p class="inline">Copyright Dettol 2014</p>
        <a href="http://legal.reckittbenckiser.com/ID/PrivacyStatement.htm" target="_blank">Privacy Policy</a>
        <a class="last" href="http://www.dettol.co.id/contactus.php" target="_blank">Hubungi Kami</a>
        <p>
          Untuk informasi lebih lanjut: <a href="http://dettol.co.id" target="_blank">www.dettol.co.id</a>
        </p>
      </div>
    </div>
    <div class="col-sm-2">
      <a href="http://www.dettol.co.id" target="_blank" class="hidden-xs">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-footer-right.png" alt="" class="right">
      </a>
    </div>
    </div>
  </div>
</div>


    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jcarousel.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/cycle.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/dettol.js"></script>
    <script>

    $('.navbar-collapse a').click(function (e) {
      if($('.navbar-toggle').css('display') == 'block' && !$(this).siblings().length){
        $('.navbar-collapse').collapse('toggle');
      }
    });

    function fbShare(url, title, descr, image, winWidth, winHeight) {
        var winTop = (screen.height / 2) - (winHeight / 2);
        var winLeft = (screen.width / 2) - (winWidth / 2);
        window.open('http://www.facebook.com/sharer.php?s=100&p[title]=' + title + '&p[summary]=' + descr + '&p[url]=' + url + '&p[images][0]=' + image, 'sharer', 'top=' + winTop + ',left=' + winLeft + ',toolbar=0,status=0,width=' + winWidth + ',height=' + winHeight);
    }

    $(".twitter").click(function(e) {
      e.preventDefault();
      var href = $(e.target).attr('href');
      window.open(href, "tweet", "height=300,width=550,resizable=1") 
    });

    $(function() {
      $('.jcarousel').jcarousel();
      $('.jcarousel-pagination').jcarouselPagination({
        'carousel': $('.jcarousel')
      });
      $('.jcarousel-pagination')
        .on('jcarouselpagination:active', 'a', function() {
            $(this).addClass('active');
        })
        .on('jcarouselpagination:inactive', 'a', function() {
            $(this).removeClass('active');
        });
    });

    $(function() {
      if (window.location.hash.indexOf("#thank_you") !== -1) {
          $("#modal-thanks").modal();
      }

      if (window.location.hash == "#_=_") {
          $("#modal-thanks").modal();
      }
    });
    </script>
  </body>
</html>