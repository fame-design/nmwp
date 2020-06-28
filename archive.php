<?php get_header(); ?>
<div class="content-wrapper">
    <h2><?php if(is_category()) {single_cat_title();}
    else if(is_tag()) {single_tag_title();} ?></h2>
    <ul class="postsList">
        <?php if ( have_posts() ) :
            while ( have_posts() ) : the_post(); ?>
                <li class="postsListEntry">

                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <div> <?php the_post_thumbnail(); ?> </div>
                        <div> <?php the_excerpt(); ?> </div>
                        <div>
                            <span>by <?php the_author(); ?> <?php the_date('Y-m-d'); ?></span>
                            <span> <?php the_tags(); ?> </span>
                            <span> categories: <?php echo get_the_category_list(' | '); ?> </span>
                        </div>

                </li>
            <?php endwhile;
        endif; ?>
    </ul>
</div>
<?php get_footer(); ?>