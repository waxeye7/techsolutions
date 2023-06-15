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



<!-- below this comment is footer.php -->
<?php
    get_footer();
?>