<?php get_header(); ?>

<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
        ?>
        <div class="service-item-single">
            <?php if (has_post_thumbnail()) { ?>
                <div class="service-image" style="text-align:center;">
                    <?php the_post_thumbnail('thumbnail');?>
                </div>
            <?php } ?>
            <h1 class="service-title"><?php the_title(); ?></h1>
            <div class="service-content">
                <?php the_content(); ?>
            </div>
        </div>
        <?php
    }
}
?>

<?php get_footer(); ?>
