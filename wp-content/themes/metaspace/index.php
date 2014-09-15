<?php get_header(); ?>

  <body>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
       var js, fjs = d.getElementsByTagName(s)[0];
       if (d.getElementById(id)) return;
       js = d.createElement(s); js.id = id;
       js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
     }(document, 'script', 'facebook-jssdk'));</script>

    <!-- Part 1: Wrap all page content here -->
    <div id="wrap">

      <!-- Fixed navbar -->
      <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
          <div class="logo-bg">
            <a class="navbar-brand" href="#first">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-inner.png" alt="">
            </a>
            <a href="http://www.dettol.co.id" target="_blank" class="hidden-lg hidden-sm">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-right.png" alt="" class="img-responsive">
            </a>
          </div>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="#second">mereka yang membutuhkan</a></li>
            <li><a href="#third">Dukungan yang diterima</a></li>
            <li><a href="#third">wall of pictures</a></li>
            <li class="active"><a href="" data-toggle="modal" data-target="#modal-thanks">beri <br/>dukungan</a></li>
          </ul>
        </div><!--/.nav-collapse -->
        <div class="navbar-right hidden-xs hidden-sm hidden-md">
          <a href="http://www.dettol.co.id" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-right.png" alt="" class="img-responsive">
          </a>
          <a href="https://www.facebook.com/DettolIndonesia">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fb-header.png" alt="" class="img-responsive">
          </a>
          <a href="https://twitter.com/Dettol_ID">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/twitter-header.png" alt="" class="img-responsive">
          </a>
        </div>
      </div>

      <!-- Begin page content -->
      <div class="row first" id="first">
        <div class="col-md-6 col-xs-12">
          <div class="cycle-slideshow" data-cycle-timeout="5000" data-cycle-speed="2000">
            <?php
              if( have_rows('intro_photo_gallery') ):

                  while ( have_rows('intro_photo_gallery') ) : the_row();
            ?>

                      <img src="<?php the_sub_field('image_top_left'); ?>" alt="" width="100%" class="img-responsive">
                      
            <?php
                  endwhile;

              else :

                  // no rows found

              endif;
            ?>
          </div>
          <div class="cycle-slideshow" data-cycle-timeout="9000" data-cycle-speed="2000">
            <?php
              if( have_rows('intro_photo_gallery') ):

                  while ( have_rows('intro_photo_gallery') ) : the_row();
            ?>

                      <img src="<?php the_sub_field('image_top_right'); ?>" alt="" width="100%" class="img-responsive">
                      
            <?php
                  endwhile;

              else :

                  // no rows found

              endif;
            ?>
          </div>
          <div class="cycle-slideshow" data-cycle-timeout="10000" data-cycle-speed="2000">
            <?php
              if( have_rows('intro_photo_gallery') ):

                  while ( have_rows('intro_photo_gallery') ) : the_row();
            ?>

                      <img src="<?php the_sub_field('image_bottom_left'); ?>" alt="" width="100%" class="img-responsive">
                      
            <?php
                  endwhile;

              else :

                  // no rows found

              endif;
            ?>
          </div>
          <div class="cycle-slideshow" data-cycle-timeout="7000" data-cycle-speed="2000">
            <?php
              if( have_rows('intro_photo_gallery') ):

                  while ( have_rows('intro_photo_gallery') ) : the_row();
            ?>

                      <img src="<?php the_sub_field('image_bottom_right'); ?>" alt="" width="100%" class="img-responsive">
                      
            <?php
                  endwhile;

              else :

                  // no rows found

              endif;
            ?>
          </div>
          <div class="btn-video" data-toggle="modal" data-target="#modal-video">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/video.png" alt="">
            <span>LIHAT VIDEO</span>
          </div>
        </div>
        <div class="col-md-6 col-xs-12">
          <?php the_field('intro_description'); ?>
          <a href="http://localhost:8888/wp-login.php?loginFacebook=1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/btn-dukung.png" alt="" class="right btn-dukung"></a>
        </div>
        <div class="modal fade" id="modal-video">
          <div class="modal-dialog">
            <div class="modal-content">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <div class="modal-body clearfix">
                <embed width="100%" height="100%" src="http://www.youtube.com/v/jqrE98W-gBI">
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
      </div>

      <div class="row second" id="second">
        <div class="col-md-4 col-xs-12">
          <div class="left-cont">
            <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-second.jpg" class="img-responsive" alt=""> -->
            <h3>mereka yang membutuhkan</h3>
            <div class="separator"></div>
            <?php the_field("second_description"); ?>
          </div>
        </div>
        <div class="col-md-8 carousel col-xs-12">
          <div class="jcarousel">
            <ul>
              <li>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/face1.jpg" alt="" class="img-responsive" data-toggle="modal" data-target="#modal-slide">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/face2.jpg" alt="" class="img-responsive" data-toggle="modal" data-target="#modal-slide">
              </li>
              <li>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/face3.jpg" alt="" class="img-responsive" data-toggle="modal" data-target="#modal-slide">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/face4.jpg" alt="" class="img-responsive" data-toggle="modal" data-target="#modal-slide">
              </li>
              <li>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/face1.jpg" alt="" class="img-responsive" data-toggle="modal" data-target="#modal-slide">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/face2.jpg" alt="" class="img-responsive" data-toggle="modal" data-target="#modal-slide">
              </li>
              <li>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/face3.jpg" alt="" class="img-responsive" data-toggle="modal" data-target="#modal-slide">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/face4.jpg" alt="" class="img-responsive" data-toggle="modal" data-target="#modal-slide">
              </li>
            </ul>
          </div>
          <div class="jcarousel-pagination">
              <!-- Pagination items will be generated in here -->
          </div>
          <div class="modal fade" id="modal-slide">
            <div class="modal-dialog">
              <div class="modal-content modal-butuh">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <div class="modal-body clearfix">
                  <div class="col-md-6 col-xs-12">
                    <div class="col-md-6 col-xs-6">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/modal1.jpg" alt="" class="img-responsive">
                    </div>
                    <div class="col-md-6 col-xs-6">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/modal2.jpg" alt="" class="img-responsive">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/modal3.jpg" alt="" class="img-responsive">
                    </div>
                  </div>
                  <div class="col-md-6 col-xs-12">
                    <h3><span>3.</span> Kelurahan Gandaria Utara</h3>
                    <p>Warga Kelurahan Gandaria Utara sangat aktif membangun lingkungannya. Kegiatan itu berpusat di balai kegiatan warga, termasuk juga Sekolah Pendidikan Anak Usia Dini (PAUD). Namun, tempat itu tidak didukung oleh fasilitas cuci tangan yang layak.</p>
                    <p>Dukung Sentuhan Sehat Dettol untuk mereka membangun lingkungan yang lebih sehat.</p>
                  </div>
                </div>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->
        </div>
      </div>
      <div class="row third" id="third">
        <div class="col-md-12">
          <div class="hands-bg">
            <h4>
              beri dukungan
            </h4>
            <h1>
              SATU KLIK<br/>SATU ANAK CUCI TANGAN
            </h1>
            <p>
              Ikut berkomitmen bersama Dettol untuk memberi masa depan yang lebih baik untuk anak-anak Indonesia. Satu klik dari anda akan memberi kesempatan hidup sehat untuk satu anak Indonesia.
            </p>
            <div class="col-md-6 col-md-offset-3 col-xs-12">
              <div class="counter clearfix">
                <div class="counter-number">
                  2
                </div>
                <div class="counter-number">
                  5
                </div>
                <div class="counter-number">
                  0
                </div>
                <div class="counter-number">
                  0
                </div>
                <div class="counter-number">
                  0
                </div>
                <div class="counter-number">
                  0
                </div>
                <div class="counter-number">
                  0
                </div>
              </div>
            </div>
            <div class="col-md-8 col-md-offset-3 col-xs-12 col-lg-5 col-lg-offset-4">
              <div class="btn-green" data-toggle="modal" data-target="#modal-dukung">Dukungan yang Sudah Diterima</div>
              <div class="btn-tosca hidden-xs" data-toggle="modal" data-target="#modal-wallofpic">Wall of Pictures</div>
            </div>
            <div class="modal fade" id="modal-dukung">
              <div class="modal-dialog">
                <div class="modal-content">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <div class="modal-body clearfix">
                    <h3>Dukungan yang Diterima</h3>
                    <p>Puluhan sekolah telah memberikan dukungan kepada Misi Hidup Sehat Dettol</p>
                      <div class="cycle-slideshow school-pagination clearfix" data-cycle-slides=".page" data-cycle-fx="scrollHorz" data-cycle-timeout=0 data-cycle-prev=".prev" data-cycle-next=".next" data-cycle-pager=".pager">
                        <div class="col-md-12 page clearfix">
                          <div class="col-md-3 col-xs-6">
                            <div class="school-cont">
                              SDN 8 Pulogadung
                            </div>
                          </div>
                          <div class="col-md-3 col-xs-6">
                            <div class="school-cont">
                              SDN 8 Pulogadung
                            </div>
                          </div>
                          <div class="col-md-3 col-xs-6">
                            <div class="school-cont">
                              SDN 8 Pulogadung
                            </div>
                          </div>
                          <div class="col-md-3 col-xs-6">
                            <div class="school-cont">
                              SDN 8 Pulogadung
                            </div>
                          </div>
                          <div class="col-md-3 col-xs-6">
                            <div class="school-cont">
                              SDN 8 Pulogadung
                            </div>
                          </div>
                          <div class="col-md-3 col-xs-6">
                            <div class="school-cont">
                              SDN 8 Pulogadung
                            </div>
                          </div>
                          <div class="col-md-3 col-xs-6">
                            <div class="school-cont">
                              SDN 8 Pulogadung
                            </div>
                          </div>
                          <div class="col-md-3 col-xs-6">
                            <div class="school-cont">
                              SDN 8 Pulogadung
                            </div>
                          </div>
                          <div class="col-md-3 col-xs-6">
                            <div class="school-cont">
                              SDN 8 Pulogadung
                            </div>
                          </div>
                          <div class="col-md-3 col-xs-6">
                            <div class="school-cont">
                              SDN 8 Pulogadung
                            </div>
                          </div>
                          <div class="col-md-3 col-xs-6">
                            <div class="school-cont">
                              SDN 8 Pulogadung
                            </div>
                          </div>
                          <div class="col-md-3 col-xs-6">
                            <div class="school-cont">
                              SDN 8 Pulogadung
                            </div>
                          </div>
                          <div class="col-md-3 col-xs-6">
                            <div class="school-cont">
                              SDN 8 Pulogadung
                            </div>
                          </div>
                          <div class="col-md-3 col-xs-6">
                            <div class="school-cont">
                              SDN 8 Pulogadung
                            </div>
                          </div>
                          <div class="col-md-3 col-xs-6">
                            <div class="school-cont">
                              SDN 8 Pulogadung
                            </div>
                          </div>
                          <div class="col-md-3 col-xs-6">
                            <div class="school-cont">
                              SDN 8 Pulogadung
                            </div>
                          </div>
                        </div>
                        <div class="col-md-12 page clearfix">
                          <div class="col-md-3 col-xs-6">
                            <div class="school-cont">
                              SDN 8 Pulogadung
                            </div>
                          </div>
                          <div class="col-md-3 col-xs-6">
                            <div class="school-cont">
                              SDN 8 Pulogadung
                            </div>
                          </div>
                          <div class="col-md-3 col-xs-6">
                            <div class="school-cont">
                              SDN 8 Pulogadung
                            </div>
                          </div>
                          <div class="col-md-3 col-xs-6">
                            <div class="school-cont">
                              SDN 8 Pulogadung
                            </div>
                          </div>
                          <div class="col-md-3 col-xs-6">
                            <div class="school-cont">
                              SDN 8 Pulogadung
                            </div>
                          </div>
                          <div class="col-md-3 col-xs-6">
                            <div class="school-cont">
                              SDN 8 Pulogadung
                            </div>
                          </div>
                          <div class="col-md-3 col-xs-6">
                            <div class="school-cont">
                              SDN 8 Pulogadung
                            </div>
                          </div>
                          <div class="col-md-3 col-xs-6">
                            <div class="school-cont">
                              SDN 8 Pulogadung
                            </div>
                          </div>
                          <div class="col-md-3 col-xs-6">
                            <div class="school-cont">
                              SDN 8 Pulogadung
                            </div>
                          </div>
                          <div class="col-md-3 col-xs-6">
                            <div class="school-cont">
                              SDN 8 Pulogadung
                            </div>
                          </div>
                          <div class="col-md-3 col-xs-6">
                            <div class="school-cont">
                              SDN 8 Pulogadung
                            </div>
                          </div>
                          <div class="col-md-3 col-xs-6">
                            <div class="school-cont">
                              SDN 8 Pulogadung
                            </div>
                          </div>
                          <div class="col-md-3 col-xs-6">
                            <div class="school-cont">
                              SDN 8 Pulogadung
                            </div>
                          </div>
                          <div class="col-md-3 col-xs-6">
                            <div class="school-cont">
                              SDN 8 Pulogadung
                            </div>
                          </div>
                          <div class="col-md-3 col-xs-6">
                            <div class="school-cont">
                              SDN 8 Pulogadung
                            </div>
                          </div>
                          <div class="col-md-3 col-xs-6">
                            <div class="school-cont">
                              SDN 8 Pulogadung
                            </div>
                          </div>
                        </div>
                        <div class="col-md-12 page clearfix">
                          <div class="col-md-3 col-xs-6">
                            <div class="school-cont">
                              SDN 8 Pulogadung
                            </div>
                          </div>
                          <div class="col-md-3 col-xs-6">
                            <div class="school-cont">
                              SDN 8 Pulogadung
                            </div>
                          </div>
                          <div class="col-md-3 col-xs-6">
                            <div class="school-cont">
                              SDN 8 Pulogadung
                            </div>
                          </div>
                          <div class="col-md-3 col-xs-6">
                            <div class="school-cont">
                              SDN 8 Pulogadung
                            </div>
                          </div>
                          <div class="col-md-3 col-xs-6">
                            <div class="school-cont">
                              SDN 8 Pulogadung
                            </div>
                          </div>
                          <div class="col-md-3 col-xs-6">
                            <div class="school-cont">
                              SDN 8 Pulogadung
                            </div>
                          </div>
                          <div class="col-md-3 col-xs-6">
                            <div class="school-cont">
                              SDN 8 Pulogadung
                            </div>
                          </div>
                          <div class="col-md-3 col-xs-6">
                            <div class="school-cont">
                              SDN 8 Pulogadung
                            </div>
                          </div>
                          <div class="col-md-3 col-xs-6">
                            <div class="school-cont">
                              SDN 8 Pulogadung
                            </div>
                          </div>
                          <div class="col-md-3 col-xs-6">
                            <div class="school-cont">
                              SDN 8 Pulogadung
                            </div>
                          </div>
                          <div class="col-md-3 col-xs-6">
                            <div class="school-cont">
                              SDN 8 Pulogadung
                            </div>
                          </div>
                          <div class="col-md-3 col-xs-6">
                            <div class="school-cont">
                              SDN 8 Pulogadung
                            </div>
                          </div>
                          <div class="col-md-3 col-xs-6">
                            <div class="school-cont">
                              SDN 8 Pulogadung
                            </div>
                          </div>
                          <div class="col-md-3 col-xs-6">
                            <div class="school-cont">
                              SDN 8 Pulogadung
                            </div>
                          </div>
                          <div class="col-md-3 col-xs-6">
                            <div class="school-cont">
                              SDN 8 Pulogadung
                            </div>
                          </div>
                          <div class="col-md-3 col-xs-6">
                            <div class="school-cont">
                              SDN 8 Pulogadung
                            </div>
                          </div>
                        </div>
                        <div class="col-md-12 page clearfix">
                          <div class="col-md-3 col-xs-6">
                            <div class="school-cont">
                              SDN 8 Pulogadung
                            </div>
                          </div>
                          <div class="col-md-3 col-xs-6">
                            <div class="school-cont">
                              SDN 8 Pulogadung
                            </div>
                          </div>
                          <div class="col-md-3 col-xs-6">
                            <div class="school-cont">
                              SDN 8 Pulogadung
                            </div>
                          </div>
                          <div class="col-md-3 col-xs-6">
                            <div class="school-cont">
                              SDN 8 Pulogadung
                            </div>
                          </div>
                          <div class="col-md-3 col-xs-6">
                            <div class="school-cont">
                              SDN 8 Pulogadung
                            </div>
                          </div>
                          <div class="col-md-3 col-xs-6">
                            <div class="school-cont">
                              SDN 8 Pulogadung
                            </div>
                          </div>
                          <div class="col-md-3 col-xs-6">
                            <div class="school-cont">
                              SDN 8 Pulogadung
                            </div>
                          </div>
                          <div class="col-md-3 col-xs-6">
                            <div class="school-cont">
                              SDN 8 Pulogadung
                            </div>
                          </div>
                          <div class="col-md-3 col-xs-6">
                            <div class="school-cont">
                              SDN 8 Pulogadung
                            </div>
                          </div>
                          <div class="col-md-3 col-xs-6">
                            <div class="school-cont">
                              SDN 8 Pulogadung
                            </div>
                          </div>
                          <div class="col-md-3 col-xs-6">
                            <div class="school-cont">
                              SDN 8 Pulogadung
                            </div>
                          </div>
                          <div class="col-md-3 col-xs-6">
                            <div class="school-cont">
                              SDN 8 Pulogadung
                            </div>
                          </div>
                          <div class="col-md-3 col-xs-6">
                            <div class="school-cont">
                              SDN 8 Pulogadung
                            </div>
                          </div>
                          <div class="col-md-3 col-xs-6">
                            <div class="school-cont">
                              SDN 8 Pulogadung
                            </div>
                          </div>
                          <div class="col-md-3 col-xs-6">
                            <div class="school-cont">
                              SDN 8 Pulogadung
                            </div>
                          </div>
                          <div class="col-md-3 col-xs-6">
                            <div class="school-cont">
                              SDN 8 Pulogadung
                            </div>
                          </div>
                        </div>
                        <div class="control clearfix">
                          <div class="prev">
                            < Prev
                          </div>
                          <div class="pager"></div>

                          <div class="next">
                            Next >
                          </div>
                        </div>
                      </div>

                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
            <div class="modal fade" id="modal-wallofpic">
              <div class="modal-dialog">
                <div class="modal-content">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <div class="modal-body clearfix">
                    <div class="col-md-6">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hand-wop.png" alt="" class="img-responsive">
                    </div>
                    <div class="col-md-6">
                      <h3>
                        wall of pictures
                      </h3>
                      <p>
                        Mereka yang telah memberikan dukungan kepada<br/> Misi Hidup Sehat Dettol
                      </p>
                      <div class="counter-modal clearfix">
                        <div class="counter-num-modal">
                          2
                        </div>
                        <div class="counter-num-modal">
                          5
                        </div>
                        <div class="counter-num-modal">
                          0
                        </div>
                        <div class="counter-num-modal">
                          0
                        </div>
                        <div class="counter-num-modal">
                          0
                        </div>
                        <div class="counter-num-modal">
                          0
                        </div>
                        <div class="counter-num-modal">
                          0
                        </div>
                      </div>
                      <p>Anda dapat menjadi bagian dari galeri <strong>Sentuhan Sehat Dettol</strong> dengan memberikan dukungan dan menyebarkan inisiatif ini. </p>
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/btn-dukung.png" alt="">
                    </div>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
            <div class="share-cont clearfix">
              <span>Sebarkan gerakan ini</span>
              <a href='http://www.facebook.com/share.php?u=http://www.dettol.co.id' target="_blank">
                <div class="fb-white"></div>
              </a>
              <a href="">
                <div class="twitter-white"></div>
              </a>
            </div>
            <div class="modal fade" id="modal-thanks">
              <div class="modal-dialog">
                <div class="modal-content">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <div class="modal-body clearfix">
                    <div class="col-md-6 hidden-xs">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hand-wop.png" alt="" class="img-responsive">
                    </div>
                    <div class="col-md-6 col-xs-12">
                      <h3>
                        terima kasih atas kepedulian anda
                      </h3>
                      <p>
                        Ayo sebarkan Sentuhan Sehat Dettol agar lebih banyak orang yang tergerak untuk membuat perubahan bagi mereka yang membutuhkan.
                      </p>
                      <p>Klik share dan jadilah bagian dari galeri Sentuhan Sehat Dettol. </p>
                      <div class="clearfix">
                        <a href="">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/share-fb.jpg" alt="">
                        </a>
                        <a href="">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/share-tw.jpg" alt="">
                        </a>
                      </div>
                      <h5>
                        Bergabunglah Bersama Keluarga Dettol Indonesia
                      </h5>
                      <div class="fb-like" data-href="https://www.facebook.com/DettolIndonesia" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
                      <a href="https://twitter.com/Dettol_ID" class="twitter-follow-button" data-show-count="false">Follow @Dettol_ID</a>
                      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                    </div>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
          </div>
        </div>
      </div>
      <div class="row forth">
        <div class="col-md-3 col-sm-3 hidden-xs">
          Anda juga bisa memberikan dukungan dengan menggunakan hashtag <strong>#misihidupsehat</strong>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6">
          Lorem ipsum dolor sit amet #misihidupsehat
          <i class="fa fa-twitter"></i> - @johnsmith
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6">
          Lorem ipsum dolor sit amet #misihidupsehat
          <i class="fa fa-twitter"></i> - @johnsmith
        </div>
        <div class="col-md-3 col-sm-3 hidden-xs">
          Lorem ipsum dolor sit amet #misihidupsehat
          <i class="fa fa-twitter"></i> - @johnsmith
        </div>
      </div>
    </div>

<?php get_footer(); ?>
    