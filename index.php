<?php
    get_header();
?>
<!-- above this comment is header.php -->


    <div style="position: relative;">
        <img src="<?php echo get_theme_image_url('background1.jpg'); ?>" style="width: 100%; height: auto;" />
        <div style="position: absolute; bottom: 20px; left: 50%; transform: translateX(-50%); text-align: center;">
            <h1>TechSolutions: Has been empowering you with expert computer repairs for years, ensuring a seamless digital journey.</h1>
            <button style="margin-right: 10px;">Order Online</button>
        </div>
    </div>

  <section class='post-container' style="margin-top: 2 0px;">


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


<!-- below this comment is footer.php -->
<?php
    get_footer();
?>