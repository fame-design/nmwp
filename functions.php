<?php

function load_scripts(){
    //wp_enqueue_style(handle, src, deps, ver, media);
    wp_enqueue_style( 'theme-colors', get_template_directory_uri() .'/css/colors.css', array(), null, 'all' );
    wp_enqueue_style( 'layout', get_template_directory_uri() .'/css/layout.css', array(), null, 'all' );
    
    //wp_enqueue_script(handle, src, deps, ver, in_footer);
    wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array(), false, true);
}

add_action('wp_enqueue_scripts', 'load_scripts');

//activate featured images
add_theme_support('post-thumbnails');



//customize excerpt
function wpdocs_custom_excerpt_length(){
    return 50;
}

add_filter('excerpt_length', 'wpdocs_custom_excerpt_length');

function wpdocs_excerpt_more(){
    return '<a href=' . get_the_permalink() . '> Read More</a>';
}
add_filter('excerpt_more', 'wpdocs_excerpt_more');

?>