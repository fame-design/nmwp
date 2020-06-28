<?php get_header(); ?>
<div class="content-wrapper">
<ul>
    <?php if ( have_posts() ) :
        while ( have_posts() ) : the_post(); ?>
            <li>
                <div class="postsListEntry">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <div> <?php the_post_thumbnail(); ?> </div>
                    <div> <?php the_excerpt(); ?> </div>
                    <div>
                        <div> <?php the_author(); ?> <?php the_date('Y-m-d'); ?></div>
                        <div> <?php the_tags(); ?> <div>
                        <div> categories: <?php echo get_the_category_list(' | '); ?> <div>
                    </div>
                </div>
            </li>
        <?php endwhile;
    endif; ?>
</ul>
</div>
<?php get_footer(); ?>