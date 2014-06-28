<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title><?php wp_title('|', true, 'right'); ?><?php bloginfo( 'name' ); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <?php wp_enqueue_style('bootstrap'); ?>
        <?php wp_enqueue_style('starter'); ?>
        <?php wp_head(); ?>        
    </head>
    
    <body class="container-fluid">
        <header class="col-md-12">
            <p class="col-md-2 titolo"><?php bloginfo( 'name' ); ?></p>
            <nav class="col-md-10">
                <?php wp_nav_menu( array( 'theme_location' => 'starter' ) ); ?>
            </nav>
        </header>