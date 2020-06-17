<?php get_header(); ?>
<ul>
    <?php if ( have_posts() ) :
        while ( have_posts() ) : the_post(); ?>
            <li>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <div><?php the_excerpt(); ?></div>
            </li>
        <?php endwhile;
    endif; ?>
</ul>
<?php get_footer(); ?>