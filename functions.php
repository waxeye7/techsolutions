<?php
function merlin_theme_styles() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'merlin_theme_styles');

register_nav_menus(array(
    'primary' => __('Primary Menu'),
    'footer' => __('Footer Menu')
));

// Custom Post Type Creation
function create_posttype() {
    register_post_type( 'wp_person',
        array(
            'labels' => array(
                'name' => __( 'People' ),
                'singular_name' => __( 'Person' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'people'),
        )
    );
    register_post_type( 'dog_training',
        array(
            'labels' => array(
                'name' => __( 'Dog Trainings' ),
                'singular_name' => __( 'Dog Training' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'dog-trainings'),
            'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        )
    );
}
add_action( 'init', 'create_posttype' );

// Enable 'Featured Images' for posts/pages/custom posts
add_theme_support( 'post-thumbnails' );


function custom_theme_fonts() {
    wp_enqueue_style('Montserrat', get_template_directory_uri() . './fonts/Montserrat.ttf');
    wp_enqueue_style('SourceSansPro', get_template_directory_uri() . './fonts/SourceSansPro.otf');
    wp_enqueue_style('Karla', get_template_directory_uri() . './fonts/Karla.ttf');
  }
  
  add_action('wp_enqueue_scripts', 'custom_theme_fonts');
