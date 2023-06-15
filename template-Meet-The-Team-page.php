<?php
/*
Template Name: Meet the Team
*/
get_header();
?>

<div class="container">
    <h1 class="text-align-center">Meet the Team</h1>

    <div class="team-list">
        <?php
            $args = array(
                'post_type' => 'wp_person',
                'posts_per_page' => -1, // Show all posts
            );
            $team_query = new WP_Query($args);

            if ($team_query->have_posts()) : 
                while ($team_query->have_posts()) : $team_query->the_post(); 
        ?>
                    <div class="team-member">
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    </div>
        <?php 
                endwhile; 
                wp_reset_postdata(); // Reset the query
            else: 
        ?>
                <p>No team members found.</p>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>