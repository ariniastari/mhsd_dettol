<?php
/*
Template Name: Galeri Dukungan Anda
*/
?>
<?php get_header(); ?>

    <div id="pagethree">
        <h3>GALERI DUKUNGAN ANDA</h3>
        <p>Mereka yang telah memberikan dukungan kepada
Misi Hidup Sehat Dettol</p>
        <div class="dukungan">
            <p><span>
                <?php
                  foreach (query_vote_split_to_array() as $value) { ?>
                      <?php 
                        echo $value; 
                      ?>
                 <?php 
                  }
                ?>
            </span></p>
        </div>
        <div class="fto">
            <?php
                foreach (get_images_facebook() as $value) { ?>
                  <img src="<?php echo $value->profile_picture ?>" alt="Dettol" height="30" width="30">
               <?php 
                }
              ?>
        </div>
        <p>Anda dapat menjadi bagian dari galeri Misi Hidup Sehat Dettol dengan memberikan dukungan dan menyebarkan inisiatif ini.</p>
        <p><a href="<?php echo site_url(); ?>/?dettol_vote=true"><img src="<?php echo get_template_directory_uri(); ?>/btn-dukung.png" alt="Dettol" height="70" width="70" /></a></p>
        <br />
    </div>

<?php get_footer(); ?>