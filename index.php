<?php
    get_header();
?>
<!-- above this comment is header.php -->


  <section class='post-container' style="margin-top: 2  0px;">


        <?php 
            if(have_posts()) : while(have_posts()) : the_post(); ?>
    
            <article class="post">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php the_excerpt(); ?>
            </article>
            
            <?php endwhile;
            
            else :
                echo '<p>No content found</p>';
            
            endif;
        ?>
    </section>


    
    
    <section class="teachers-container"> <!-- add a css class for the section that will contain your looping divisions -->
    <h1>Meet Our Esteemed Teachers</h1>

        <!-- custom posts will loop here -->
        <?php
            // rename below variable name according your custom post (i.e. $people or $testimonials etc) 
            // make sure to change the variable names inside if() while() line as well
            $custom_post_variable_name = new WP_Query(array(
                'posts_per_page' => 20, // optional upper limit to display number
                'post_type' => 'teacher' // !IMPORTANT! you need to change the 'pod-name' to the 'Pod Name' you wrote at create new pod  
            ));
            if($custom_post_variable_name->have_posts()) : while($custom_post_variable_name->have_posts()) : $custom_post_variable_name->the_post(); ?>
            
            <div class="div-css-teacher"> <!-- add a css class for the div that will be the card for custom post -->
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
                <img src="<?php the_post_thumbnail_url(); ?>" alt="" class='img-css-name'> <!-- style img via this class -->
            </div>
            
            <?php endwhile;         
            endif;
        ?>
        <!-- loop ends -->
    </section>


    <section class="dog-events-section">
  <h1>Dog Events</h1>
  <div class="dog-events-container">
    <!-- Dog Event 1 -->
    <div class="dog-event">
      <h2>Dog Event 1</h2>
      <p>Date: May 30, 2023</p>
      <p>Location: Central Park</p>
      <button class="btn-register">Register</button>
    </div>

    <!-- Dog Event 2 -->
    <div class="dog-event">
      <h2>Dog Event 2</h2>
      <p>Date: June 10, 2023</p>
      <p>Location: Dog Park</p>
      <button class="btn-register">Register</button>
    </div>
  </div>

  <!-- Modal Popups -->
  <div class="modal-overlay">
    <div class="modal">
      <div class="modal-content">
        <h2>Register for Dog Event</h2>
        <p>Sign up now to reserve your spot!</p>
        <a href="#" class="signup-link">Sign Up</a>
      </div>
    </div>
  </div>
</section>

<!-- below this comment is footer.php -->
<?php
    get_footer();
?>