<?php get_header(); //dd(get_img_url_from_vote($_GET['source']));//dd(get_img_url_from_vote());//dd(get_field('jumlah_dukungan'));?>

  <body>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&appId=385772391524911&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <!-- Part 1: Wrap all page content here -->
    <div id="wrap">

      <!-- Fixed navbar -->
      <?php get_template_part('dettol', 'menu'); ?>

      <!-- Begin page content -->
      <?php get_template_part('dettol', 'intro'); ?>

      <?php get_template_part('dettol', 'need'); ?>

      <div class="row third" id="third">
        <div class="col-md-12">
          <div class="hands-bg">
            <h4>
              Beri Dukungan Anda!
            </h4>
            <h1>
              1 KLIK ANDA MEMBANTU <br/> 1 ANAK YANG MEMBUTUHKAN
            </h1>
            <div class="col-md-8 col-md-offset-2">
              <p>
                Dukung dan sebarkan gerakan ini agar lebih banyak anak-anak terlindungi.
              </p>
            </div>
            <div class="col-md-8 col-md-offset-2 col-xs-11 col-xs-offset-1 col-sm-10 col-sm-offset-2 col-lg-7 col-lg-offset-3">
              <div class="counter clearfix">
                <?php
                  foreach (query_vote_split_to_array() as $value) { ?>
                    <div class="counter-number">
                      <?php 
                        echo $value; 
                      ?>
                    </div>
                 <?php 
                  }
                ?>
                <div class="clearfix"></div>
              </div>
            </div>
            <div class="col-md-7 col-md-offset-3 col-xs-12 col-lg-5 col-lg-offset-4 col-sm-8 col-sm-offset-3">
              <div class="btn-green" data-toggle="modal" data-target="#modal-dukung">Sekolah yang Telah Mendukung</div>
              <div class="btn-tosca" data-toggle="modal" data-target="#modal-wallofpic">Galeri Dukungan Anda</div>
            </div>
            <div class="modal fade" id="modal-dukung">
              <div class="modal-dialog">
                <div class="modal-content">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <div class="modal-body clearfix">
                    <h3>Sekolah yang Telah Mendukung</h3>
                    <p>Ratusan sekolah telah memberikan dukungan kepada Misi Hidup Sehat Dettol</p>
                      <div class="cycle-slideshow school-pagination clearfix" data-cycle-slides=".page" data-cycle-fx="scrollHorz" data-cycle-timeout=0 data-cycle-prev=".prev" data-cycle-next=".next" data-cycle-pager=".pager">
                        <?php
                          $dataset = get_field('daftar_sekolah');
                          $counter = 1;
                          foreach ($dataset as $set) {
                            if($counter % 16 == 1){
                              ?>
                              <div class="col-md-12 page clearfix">
                              <?php
                            }

                            if($counter % 16 != 0){
                            ?>
                            <div class="col-md-3 col-xs-6">
                              <div class="school-cont">
                                <?php echo $set['nama_sekolah'];?>
                              </div>
                            </div>
                            <?php
                            }

                            if($counter % 16 == 0){
                              ?>
                                <div class="col-md-3 col-xs-6">
                              <div class="school-cont">
                                <?php echo $set['nama_sekolah'];?>
                              </div>
                            </div>
                                </div>
                              <?php
                            }

                            if($counter % 16 != 0 && $counter == count($dataset)){
                              ?>
                                </div>
                              <?php
                            }
                            $counter++;
                          }
                        ?>
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
                    <!-- NEW -->
                    <!-- ADD HAND MASK -->
                    <div class="col-md-6 hidden-xs col-sm-8">
                      <?php 
                        $user_ID = get_current_user_id();
                        if($user_ID) { 
                          echo get_avatar( $user_ID, 100 ); 
                        }
                      ?>
                      <div class="hand-mask">

                        <div class="pic-collage">
                          <?php
                            foreach (get_images_facebook() as $value) { ?>
                              <img src="<?php echo $value->profile_picture ?>" alt="" class="img-responsive">
                           <?php 
                            }
                          ?>
                        </div>
                        <div class="hand-border">
                          
                        </div>
                      </div>
                    </div>
                    <!-- END NEW -->
                    <div class="col-md-6 col-xs-12 col-sm-4">
                      <h3>
                        GALERI DUKUNGAN ANDA
                      </h3>
                      <p>
                        Mereka yang telah memberikan dukungan kepada<br/> Misi Hidup Sehat Dettol
                      </p>
                      <div class="counter-modal clearfix">
                        <?php
                          foreach (query_vote_split_to_array() as $value) { ?>
                            <div class="counter-num-modal">
                              <?php echo $value; ?>
                            </div>
                         <?php 
                          }
                        ?>
                      </div>
                      <div class="visible-xs pic-collage-mobile clearfix">
                        <div class="text-center">
                        <?php
                        $i = 1;
                        if ($i <= 100) {
                          foreach (get_images_facebook() as $value) { ?>
                            <img src="<?php echo $value->profile_picture ?>" alt="">
                         <?php 
                            $i++;
                          }
                        }
                        ?>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                      <p>Anda dapat menjadi bagian dari galeri <strong>Misi Hidup Sehat Dettol</strong> dengan memberikan dukungan dan menyebarkan inisiatif ini. </p>
                      <div class="text-center">
                        <a href="<?php echo site_url(); ?>/?dettol_vote=true"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/btn-dukung.png" alt=""></a>
                      </div>
                    </div>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
            <div class="share-cont clearfix">
              <span>Sebarkan gerakan ini</span>
              <a class="fb-white" href="<?php echo site_url(); ?>/wp-login.php?loginFacebook=1">
              </a>
              <a class="twitter-white" href="<?php echo site_url(); ?>/wp-login.php?loginTwitter=1">
              </a>
            </div>
            <div class="modal fade" id="modal-thanks">
              <div class="modal-dialog">
                <div class="modal-content">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <div class="modal-body clearfix">
                    <!-- NEW -->
                    <!-- ADD HAND MASK -->
                    <div class="col-md-6 hidden-xs col-sm-8">
                      <?php 
                        $user_ID = get_current_user_id();
                        if($user_ID) {
                          if(get_img_url_from_vote($_GET['source'])[0]) {
                      ?>
                            <img src="<?php echo get_img_url_from_vote($_GET['source'])[0]->profile_picture; ?>" class='img-glow'/>
                      <?php 
                          } else {
                            echo get_avatar( $user_ID, 100 );
                          }
                        }
                      ?>
                      <div class="hand-mask">
                        <div class="pic-collage">
                          <?php
                            foreach (get_images_facebook() as $value) { ?>
                              <img src="<?php echo $value->profile_picture ?>" alt="" class="img-responsive">
                           <?php 
                            }
                          ?>
                        </div>
                        <div class="hand-border">
                          
                        </div>
                      </div>
                    </div>
                    <!-- END NEW -->
                    <div class="col-md-6 col-xs-12 col-sm-4">
                      <h3>
                        terima kasih <br/>
                        <span style="font-size: 20px;">atas kepedulian anda</span>
                      </h3>
                      <p>
                        Sebarkan inisiatif Misi Hidup Sehat Dettol! Bersama kita dapat membantu lebih banyak anak-anak agar tetap sehat, agar harapan dan impian mereka terus hidup.
                      </p>
                      <p>Klik share dan jadilah bagian dari Galeri <strong>Misi Hidup Sehat Dettol</strong>. </p>
                      <div class="clearfix">
                        <a class="btn-share-fb" href="<?php echo site_url(); ?>/wp-login.php?loginFacebook=1">
                        </a>
                        <a class="btn-share-tw" href="<?php echo site_url(); ?>/wp-login.php?loginTwitter=1">
                        </a>
                      </div>
                      <h5>
                        Bergabunglah bersama Keluarga Dettol Indonesia. <br/>
                        <span>Dapatkan berbagai inspirasi untuk melindungi keluarga Anda.</span>

                      </h5>
                      <div class="fb-like" data-href="https://www.facebook.com/DettolIndonesia" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
                      <a href="https://twitter.com/Dettol_ID" class="twitter-follow-button" data-show-count="false">Follow @Dettol_ID</a>
                      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                    </div>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
            <div class="modal fade" id="modal-vote">
              <div class="modal-dialog">
                <div class="modal-content">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <div class="modal-body clearfix">
                    <div class="col-xs-12 text-center">
                      <p>
                        Anda akan diarahkan ke Facebook untuk memberikan dukungan
                      </p>
                      <a class="btn-tosca" href="<?php echo site_url(); ?>/wp-login.php?loginFacebook=1">Lanjutkan</a>
                    </div>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

          </div>
        </div>
      </div>
      <div class="row forth">
        <div class="col-md-3 col-sm-3 col-xs-6">
          Anda juga bisa memberikan dukungan dengan menggunakan hashtag <strong>#misihidupsehatdettol</strong>
        </div>
        <?php
          $tweets = searchTweets(3, '#misihidupsehatdettol');
          //d($tweets);
            if (!$tweets['error'] && $tweets){
              foreach ($tweets['statuses'] as $value) { ?>
              <div class="col-md-3 col-sm-3 col-xs-6">
                <?php echo $value['text']; ?>    
                <i class="fa fa-twitter"></i> - <?php echo "@".$value['user']['screen_name']; ?>
              </div>  
            <?php
            }
          }
        ?>
      </div>
    </div>

<?php get_footer(); ?>
    
