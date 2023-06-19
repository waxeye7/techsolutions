<?php
    get_header();
?>
<!-- above this comment is header.php -->

<div style="position: relative; display: flex; align-items: center;">
    <img src="<?php echo get_theme_image_url('background1.jpg'); ?>" style="width: 100%; height: auto; display: block;" />
    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center; color: white; width: 100%;">
        <h1 style="margin: 0;">TechSolutions: Has been empowering you with expert computer repairs for years, ensuring a seamless digital journey.</h1>
        <a style="color: white;" href="<?php echo home_url('/services/'); ?>">Book Online</a>
    </div>
</div>



<div class="services-section">
    <h1 style="text-align: center;">Services</h1>
    <div class="services-wrapper">
        <?php
            $args = array(
                'post_type' => 'services',
                'posts_per_page' => 3,
                'orderby' => 'rand'
            );
            $services_query = new WP_Query($args);

            if ($services_query->have_posts()) {
                while ($services_query->have_posts()) {
                    $services_query->the_post();
                    ?>
                    <div class="service-item">
                        <?php if (has_post_thumbnail()) { ?>
                            <div class="service-image" style="text-align:center;">
                                <?php the_post_thumbnail('thumbnail');?>
                            </div>
                        <?php } ?>
                        <h3 class="service-title"><?php the_title(); ?></h3>
                        <p class="service-description"><?php the_excerpt(); ?></p>
                        <a class="service-link" href="<?php the_permalink(); ?>">Read More</a>
                    </div>
                    <?php
                }
                wp_reset_postdata();
            } else {
                echo 'No services found.';
            }
        ?>
    </div>
</div>


<div style="background-color: #f2f2f2; padding: 20px;">
    <h1 style="text-align:center;">Testimonials</h1>
    <div style="display: flex; justify-content: space-between;">
        <?php
            $args = array(
                'post_type' => 'testimonial',
                'posts_per_page' => 3,
                'orderby' => 'rand'
            );
            $testimonial_query = new WP_Query($args);

            if ($testimonial_query->have_posts()) {
                while ($testimonial_query->have_posts()) {
                    $testimonial_query->the_post();
                    ?>
                    <div class="testimonial-item">
                        <?php if (has_post_thumbnail()) { ?>
                            <div>
                                <?php the_post_thumbnail('thumbnail'); ?>
                            </div>
                        <?php } ?>
                        <h3><?php the_title(); ?></h3>
                        <?php the_content(); ?>
                    </div>
                    <?php
                }
                wp_reset_postdata();
            } else {
                echo 'No testimonials found.';
            }
        ?>
    </div>
</div>


<!-- below this comment is footer.php -->
<?php
    get_footer();
?>