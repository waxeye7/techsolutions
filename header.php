<?php require_once('image-functions.php'); ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width">
        <title><?php bloginfo('name'); ?></title>
        <?php wp_head(); ?>
    </head>
    
<body <?php body_class(); ?>>
    <div class="container">
            <div class="flex relative">
    </div>
        <header class="site-header">
            <a style="margin-right:10px;" href="<?php echo home_url(); ?>">
                <div style="max-width:50px; max-height:50px;">
                    <img src="<?php echo get_theme_image_url('logo.png'); ?>" alt="Home" style="width:100%; height:100%;" />
                </div>
            </a>

            <h2 class="heading" style="margin-right:20px;"><?php bloginfo('name'); ?></h2>

            
            <nav>
                <?php
                    $argument = array( 'theme_location' => 'primary' );
                    wp_nav_menu( $argument );
                ?>
            </nav>
            

        </header>
        <div class="content">