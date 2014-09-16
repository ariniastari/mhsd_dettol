<?php get_header(); //dd(searchTweets(3, '#misihidupsehat'));?>

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
              beri dukungan
            </h4>
            <h1>
              SATU KLIK<br/>SATU ANAK CUCI TANGAN
            </h1>
            <div class="col-md-8 col-md-offset-2">
              <p>
                Ikut berkomitmen bersama Dettol untuk memberi masa depan yang lebih baik untuk anak-anak Indonesia. Satu klik dari anda akan memberi kesempatan hidup sehat untuk satu anak Indonesia.
              </p>
            </div>
            <div class="col-md-8 col-md-offset-3 col-xs-11 col-xs-offset-1 col-sm-10 col-sm-offset-2 col-lg-7 col-lg-offset-3">
              <div class="counter clearfix">
                <?php
                  foreach (query_vote_split_to_array() as $value) { ?>
                    <div class="counter-number">
                      <?php echo $value; ?>
                    </div>
                 <?php 
                  }
                ?>
              </div>
            </div>
            <div class="col-md-7 col-md-offset-4 col-xs-12 col-lg-5 col-lg-offset-4 col-sm-7 col-sm-offset-3">
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
                        wall of pictures
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
                      <p>Anda dapat menjadi bagian dari galeri <strong>Sentuhan Sehat Dettol</strong> dengan memberikan dukungan dan menyebarkan inisiatif ini. </p>
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/btn-dukung.png" alt="">
                    </div>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
            <div class="share-cont clearfix">
              <span>Sebarkan gerakan ini</span>
              <a href="https://www.facebook.com/dialog/share?app_id=943519405663654&display=popup&href=<?php get_site_url(); ?>&redirect_uri=<?php get_site_url(); ?>">
              <div class="fb-white">
              </div>
            </a>
                <div class="twitter-white"></div>
            </div>
            <div class="modal fade" id="modal-thanks">
              <div class="modal-dialog">
                <div class="modal-content">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <div class="modal-body clearfix">
                    <!-- NEW -->
                    <!-- ADD HAND MASK -->
                    <div class="col-md-6 hidden-xs col-sm-8">

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
        <?php
          $tweets = searchTweets(3, '#misihidupsehat');
            if ($tweets){
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
    