<?php get_header(); ?>
<div class="content-wrapper">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
        <div class="single-post">
            <div> <?php the_post_thumbnail(); ?> </div>
            <h2><?php the_title(); ?></h2>
            <div> <?php the_author(); ?> <?php the_date('Y-m-d'); ?></div>
            <div> <?php the_category(); ?> </div>
            <div> <?php the_tags(); ?> </div>
            <div> <?php the_content(); ?> </div>
            <div> <?php comments_template(); ?> </div>
        </div>

    <?php endwhile; else : ?>
        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
</div>
<?php get_footer(); ?>