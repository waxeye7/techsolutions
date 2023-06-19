<?php
function merlin_theme_styles() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'merlin_theme_styles');

function enqueue_scripts() {
    wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');




register_nav_menus(array(
    'primary' => __('Primary Menu'),
    'footer' => __('Footer Menu')
));

// Custom Post Type Creation
function create_posttype() {


    register_post_type( 'services',
    array(
        'labels' => array(
            'name' => __( 'Services' ),
            'singular_name' => __( 'Service' )
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'services'),
        'supports' => array( 'title', 'editor', 'client', 'thumbnail', 'excerpt' ),
    )
);

    register_post_type( 'testimonial',
    array(
        'labels' => array(
            'name' => __( 'Testimonials' ),
            'singular_name' => __( 'Testimonial' )
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor','client'),
    )
);
register_post_type('faq',
array(
    'labels' => array(
        'name' => __('FAQs'),
        'singular_name' => __('FAQ')
    ),
    'public' => true,
    'has_archive' => true,
    'rewrite' => array('slug' => 'faq'),
    'supports' => array('title', 'editor'),
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
