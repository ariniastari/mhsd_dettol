<div class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a onclick="ga('send', 'event', 'button', 'click', 'vote-button-menu');" href="<?php echo site_url(); ?>/?dettol_vote=true" class='right hidden-sm hidden-md hidden-lg'>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/btn-dukung-mobile.png" alt="" width="80" height="80">
    </a>
    <div class="logo-bg">
      <a class="navbar-brand" href="#first">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-inner.png" alt="">
      </a>
    </div>
  </div>
  <div class="navbar-collapse collapse">
    <ul class="nav navbar-nav">
      <li><a href="#second">mereka yang membutuhkan</a></li>
      <li><a href="#history-menu">Sejarah misi hidup sehat</a></li>
      <li><a href="#third">Dukungan yang diterima</a></li>
      <li><a class="wider" href="" data-toggle="modal" data-target="#modal-wallofpic">GALERI DUKUNGAN ANDA</a></li>
      <li class="active"><a onclick="ga('send', 'event', 'button', 'click', 'vote-button-menu');" href="<?php echo site_url(); ?>/?dettol_vote=true">ULURKAN <br/>TANGAN</a></li>
    </ul>
  </div><!--/.nav-collapse -->
  <!-- ADD HIDDEN SM -->
  <div class="navbar-right hidden-xs hidden-sm">
    <a href="http://www.dettol.co.id" target="_blank">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-right.png" alt="" class="img-responsive img-logo-right">
    </a>
    <a href="#" target="_blank">
      <img usemap="#social-link" src="<?php echo get_template_directory_uri(); ?>/assets/img/fb-tw.png" alt="" class="img-responsive img-socmed-right">
    </a>
  </div>
  <!-- END OF ADD HIDDEN SM -->
</div>

<map name="social-link">
  <area shape="circle" coords="17,16,17" alt="Facebook" href="http://facebook.com/DettolIndonesia" target="_blank">
  <area shape="circle" coords="17,62,17" alt="Venus" href="http://twitter.com/Dettol_ID" target="_blank">
</map>
