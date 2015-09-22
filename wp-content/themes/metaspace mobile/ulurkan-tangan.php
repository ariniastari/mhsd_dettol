<?php
/*
Template Name: Ulurkan Tangan
*/
?>
<?php get_header(); ?>

    <div id="pagefour">
        <h2>TERIMA KASIH</h2><br />
        <h4>ATAS KEPEDULIAN ANDA</h4><br />
        <p>Sebarkan inisiatif Misi Hidup Sehat Dettol! Bersama kita dapat membantu lebih banyak anak-anak agar tetap sehat, agar harapan dan impian mereka terus hidup.</p>
        <p>Klik share dan jadilah bagian dari Galeri Misi Hidup Sehat Dettol.</p>
        <div class="share">
            <?php
                $site_url = site_url();
                $site_url_back = esc_url( get_permalink( get_page_by_title( 'ULURKAN TANGAN' ) ) );
                $redirect = "https://www.facebook.com/dialog/share?app_id=943519405663654&display=popup&href=".$site_url."&redirect_uri=".$site_url_back;
            ?>
            <a href="<?php echo $redirect ?>"><img src="<?php echo get_template_directory_uri(); ?>/f.png" alt="Dettol" width="80" height="20" /></a>
             <a href="https://twitter.com/share?text=Ulurkan%20tangan%2Csebarkan%20%23MisiHidupSehatDettol%20agar%20lebih%20banyak%20anak%20tetap%20sehat%2C%20impian%20mereka%20terus%20hidup.%20Kunjungi&url=<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/t.png" alt="Dettol" width="80" height="20" /></a>
        </div>
        <h5>Bergabunglah bersama Keluarga Dettol Indonesia. </h5>
        <p>Dapatkan berbagai inspirasi untuk melindungi keluarga Anda.</p>
        <br />
    </div>

<?php get_footer(); ?>