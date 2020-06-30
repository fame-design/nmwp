<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="Viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FD-Theme</title>
    <?php wp_head(); ?>
</head>
<body>
<div class="page-wrapper">
    <header class="site-header">
        <div class="header-wrapper">
            <div class="site-title-wrapper">
                <a href="<?php echo home_url(); ?>"><h1><?php bloginfo('name'); ?></h1></a>
            </div>
            <div class="nav-wrapper">
                <?php wp_nav_menu(array('theme_location' => 'sticky_bar')); ?>
            <div>
        </div>
    </header>