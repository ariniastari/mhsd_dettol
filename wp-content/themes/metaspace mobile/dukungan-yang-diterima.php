<?php
/*
Template Name: Dukungan Yang Diterima
*/
?>
<?php get_header(); ?>

    <div id="pagetwo">
        <p>Beri Dukungan Anda!</p>
        <h4>1 KLIK ANDA MEMBANTU</h4>
        <h4>1 ANAK YANG MEMBUTUHKAN</h4>
        <p>Dukung dan sebarkan gerakan ini agar lebih banyak anak-anak terlindungi.</p>
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
        <p><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'DAFTAR SEKOLAH' ) ) ); ?>">Sekolah yang Telah Mendukung</a></p>
        <p><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'GALERI DUKUNGAN ANDA' ) ) ); ?>">Galeri Dukungan Anda</a></p>
        <br />
    </div>

<?php get_footer(); ?>