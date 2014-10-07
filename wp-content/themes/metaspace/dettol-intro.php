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
      <img onclick="ga('send', 'event', 'button', 'click', 'play-video');" src="<?php echo get_template_directory_uri(); ?>/assets/img/video-button.png" alt="">
    </div>
  </div>
  <div class="col-md-6 col-xs-12">
    <?php the_field('intro_description'); ?>
    <a onclick="ga('send', 'event', 'button', 'click', 'vote-button');" href="<?php echo site_url(); ?>/?dettol_vote=true"><div class="btn-dukung"></div></a>
  </div>
  <div class="modal fade" id="modal-video">
    <div class="modal-dialog">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <div class="modal-body clearfix">
          <iframe class="video" width="100%" height="100%" src="//www.youtube.com/embed/pvc66cUajqo" frameborder="0" allowfullscreen></iframe>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
</div>