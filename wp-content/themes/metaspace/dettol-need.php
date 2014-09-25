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
        <?php
          $values = get_field('second_gallery');
          if($values) {
            // dd($values);
            $counter = 1;
            foreach ($values as $value) {
              if ($counter % 2 != 0){ ?>
              <li>
                <div class="carousel-img" style="background: url('<?php echo $value['second_gallery_image']; ?>')" data-toggle="modal" data-target="#<?php echo $value['gallery_id'] ?>">
                  <div class="school-name"><?php echo $value['second_gallery_title']; ?>

                  </div>
                </div>
                <!-- <img src="<?php echo $value['second_gallery_image']; ?>" alt="" class="img-responsive" data-toggle="modal" data-target="#<?php echo $value['gallery_id'] ?>"> -->
                

              <?php 
              }
              else { ?>
                <div class="carousel-img" style="background: url('<?php echo $value['second_gallery_image']; ?>')" data-toggle="modal" data-target="#<?php echo $value['gallery_id'] ?>">
                  <div class="school-name"><?php echo $value['second_gallery_title']; ?>
                    
                  </div>
                </div>
              </li>
              <?php
              }
              $counter ++;
            }

            if (count($values) % 2 != 0){ ?>
              </li>
            <?php
            }
          }
        ?>
      </ul>
    </div>

    <?php
      if( have_rows('second_gallery') ):

          while ( have_rows('second_gallery') ) : the_row();
    ?>
      <div class="modal fade" id="<?php the_sub_field("gallery_id"); ?>">
      <div class="modal-dialog">
        <div class="modal-content modal-butuh">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <div class="modal-body clearfix">
            <div class="col-md-6 col-xs-12">
              <img src="<?php the_sub_field("image_inside"); ?>" alt="" class="img-responsive">
            </div>
            <div class="col-md-6 col-xs-12">
              <?php the_sub_field("second_gallery_text"); ?>
            </div>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <?php
          endwhile;

      else :

          // no rows found

      endif;
    ?>
  </div>
</div>