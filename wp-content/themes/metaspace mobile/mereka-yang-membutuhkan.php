<?php
/*
Template Name: Mereka yang membutuhkan
*/
?>
<?php get_header(); ?>

    <div id="pageone">
        <?php if (have_posts()) : while (have_posts()) : the_post();?>
        <?php the_title( '<h4>', '</h4>' ); ?>
        <hr />
        <?php the_content(); ?>
        <?php endwhile; endif; ?>
        <br />
    </div>

<?php get_footer(); ?>