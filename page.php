<?php get_header(); ?>
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