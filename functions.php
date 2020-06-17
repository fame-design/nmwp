<?php

function load_scripts(){
    //wp_enqueue_style(handle, src, deps, ver, media);
    wp_enqueue_style('stylesheet', get_template_directory_uri() . '/css/stylesheet.css', false, '0.0.1', 'all');
    //wp_enqueue_script(handle, src, deps, ver, in_footer);
    wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array(), false, true);
}

add_action('wp_enqueue_scripts', 'load_scripts');

add_theme_support('post-thumbnails');

?>