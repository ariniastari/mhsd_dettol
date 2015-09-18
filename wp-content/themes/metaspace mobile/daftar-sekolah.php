<?php
/*
Template Name: Daftar Sekolah
*/
?>
<?php get_header(); ?>

    <div id="pagefive">
        <h3>SEKOLAH YANG TELAH MENDUKUNG</h3>
        <p>Ratusan sekolah telah memberikan dukungan kepada Misi Hidup Sehat Dettol</p>
        <div class="listsekolah">
            <ul>
                <?php
                    /* 
                     * Paginate Advanced Custom Field repeater
                     */

                    if( !empty($_GET['page']) )
                    {
                        $page = $_GET['page'];
                    } else {
                        $page = 1;
                    }

                    // dd($_GET);
                    // Variables
                    $row              = 0;
                    $images_per_page  = 20; // How many images to display on each page
                    $images           = get_field( 'daftar_sekolah', 11 );
                    $total            = count( $images );
                    $pages            = ceil( $total / $images_per_page );
                    $min              = ( ( $page * $images_per_page ) - $images_per_page ) + 1;
                    $max              = ( $min + $images_per_page ) - 1;

                    // ACF Loop
                    if( have_rows( 'daftar_sekolah', 11 ) ) : ?>

                      <?php while( have_rows( 'daftar_sekolah', 11 ) ): the_row();

                        $row++;

                        // Ignore this image if $row is lower than $min
                        if($row < $min) { continue; }

                        // Stop loop completely if $row is higher than $max
                        if($row > $max) { break; } ?>                     
                        
                        <?php $img_obj = get_sub_field( 'nama_sekolah', 11 ); ?>
                        <li><?php echo strtoupper($img_obj);?></li>

                      <?php endwhile;

                      
                      ?>

                    <?php else: ?>

                      No images found

                    <?php endif; ?>
            </ul>
        </div>
        <div class="pagination">
            <br />
            <?php 
            // Pagination

                      echo paginate_links( array(
                        'base' => get_permalink() . '%_%' . '/',
                        'format' => '&page=%#%',
                        'current' => $page,
                        'total' => $pages
                      ) );
                      ?>
        </div>
        <br />
    </div>

<?php get_footer(); ?>