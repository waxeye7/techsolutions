<?php
/*
Template Name: Dog Training Archive Template
*/
get_header();
?>

<div class="dog-training-container">
  <h1 class="text-align-center" style="margin-bottom: 30px;">Dog Training Tips</h1>
  <?php
  // Display the Dog Training posts
  $args = array(
    'post_type' => 'dog_training',
    'posts_per_page' => -1,
  );
  $training_posts = new WP_Query( $args );
  if ( $training_posts->have_posts() ) :
    while ( $training_posts->have_posts() ) : $training_posts->the_post();
  ?>

      <div class="dog-training-post">

        <h3 class="dog-training-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

        <div class="dog-training-excerpt">
          <?php the_excerpt(); ?>
        </div>

        <a href="<?php the_permalink(); ?>" class="read-more-button">Read More</a>

      </div>

  <?php
    endwhile;
    wp_reset_postdata();
  else :
    // If no content, display a message
    echo '<p>No content found</p>';
  endif;
  ?>

</div>

<?php
get_footer();
?>
