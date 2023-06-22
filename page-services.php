<?php
/*
Template Name: services
*/

    get_header();
?>
<!-- above this comment is header.php -->


<div class="services-section">
    <h1 style="text-align: center;">Learn what we have to offer here at TechSolutions</h1>
    <div class="services-page-services-wrapper">
        <?php
            $args = array(
                'post_type' => 'services',
                'posts_per_page' => -1,
                'orderby' => 'title',
                'order' => 'ASC'
            );
            $services_query = new WP_Query($args);

            if ($services_query->have_posts()) {
                while ($services_query->have_posts()) {
                    $services_query->the_post();
                    ?>
                    <div class="service-item">
                        <?php if (has_post_thumbnail()) { ?>
                            <div class="service-image" style="text-align:center;">
                                <?php the_post_thumbnail('full');?>
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

<!-- below this comment is footer.php -->
<?php
    get_footer();
?>