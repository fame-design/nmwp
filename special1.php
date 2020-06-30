<?php
/*
Template Name: Special Page 1
*/
?>

<?php get_header(); ?>
<?php get_template_part('part1'); ?>
<div class="content-wrapper">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
    <div class="page">
        <h2><?php the_title(); ?></h2>
        <div> <?php the_content(); ?> </div>
    </div>

<?php endwhile;?>
<?php endif; ?>
</div>
<?php get_footer(); ?>