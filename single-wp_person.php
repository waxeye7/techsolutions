<?php
get_header();
?>

<div class="container">
    <?php
        while (have_posts()) : the_post();
    ?>
        <div class="person-details">
            <h1 class="text-align-center"><?php the_title(); ?></h1>
            <?php if (has_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
            <?php endif; ?>
            <?php the_content(); ?>
        </div>
    <?php 
        endwhile;
    ?>
</div>

<?php get_footer(); ?>
