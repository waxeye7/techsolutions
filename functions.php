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

function custom_excerpt_more($more) {
    return ' <a class="read-more" href="' . get_permalink(get_the_ID()) . '">' . __('Read More', 'your-theme-domain') . '</a>';
}
add_filter('excerpt_more', 'custom_excerpt_more');



function best_dog_shortcode() {
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 1,
        'orderby' => 'meta_value_num',
        'meta_key' => 'votes',
        'order' => 'DESC',
    );

    $best_dog_query = new WP_Query($args);

    if ($best_dog_query->have_posts()) {

        while ($best_dog_query->have_posts()) {
            $best_dog_query->the_post();
            ?>
            <div class="post">
                <h1><?php the_title(); ?></h1>
                <div><?php the_content(); ?></div>
            </div>

            <?php
        }
        wp_reset_postdata();
    } else {
        echo '<p>No dogs found.</p>';
    }
}
add_shortcode('best_dog', 'best_dog_shortcode');
