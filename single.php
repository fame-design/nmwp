<?php get_header(); ?>
<div class="content-wrapper">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>

    <?php endwhile; else : ?>
        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
</div>
<?php get_footer(); ?>