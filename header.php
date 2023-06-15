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
    <img src="<?php echo get_theme_image_url('dog2.png'); ?>" class="go-away-low-res" alt="Home" style="max-width:300px; max-height:300px; position:fixed; left:20px; top:170px; z-index:1000;"  />
  <img src="<?php echo get_theme_image_url('dog2.png'); ?>" alt="Home" class="go-away-low-res" style="max-width:300px; max-height:300px;  transform: scaleX(-1); position:fixed; right:20px; top:170px; z-index:1000;" />
    </div>
        <header class="site-header" >
            <a style="margin-right:10px;" href="<?php echo home_url(); ?>">
                <div style="max-width:40px; max-height:40px;">
                    <img src="<?php echo get_theme_image_url('home.svg'); ?>" alt="Home" style="width:100%; height:100%;" />
                </div>
            </a>

            <h2 style="margin-right:auto;"><?php bloginfo('name'); ?></h2>

            
            <nav>
                <?php
                    $argument = array( 'theme_location' => 'primary' );
                    wp_nav_menu( $argument );
                ?>
            </nav>
            

        </header>
        <div class="content">