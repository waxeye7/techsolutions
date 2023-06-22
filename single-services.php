<?php get_header(); ?>

<div class="content-area" style="margin: 0 auto; max-width: 800px; padding: 40px; background-color: #f9f9f9; box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.1);">

    <?php while (have_posts()) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >

            <!-- Featured Image -->
            <?php if ( has_post_thumbnail() ) : ?>
                <div class="post-thumbnail" style="height: 300px; overflow: hidden; margin-bottom: 20px;">
                    <?php the_post_thumbnail('full', array('style' => 'height: 100%; width: 100%; object-fit:cover;')); ?>
                </div>
            <?php endif; ?>

            <header class="entry-header">
                <h1 class="entry-title" style="font-size: 2.5em; color: #333; margin-bottom: 20px; text-transform: uppercase; letter-spacing: 1px;"><?php the_title(); ?></h1>
            </header>

            <div class="entry-content" style="font-size: 1.2em; line-height: 1.8em; background-color: #f9f9f9;">
                <?php the_content(); ?>
            </div>

            <?php
            // Custom fields for services
            $service_price = get_post_meta(get_the_ID(), 'service_price', true);
            $service_duration = get_post_meta(get_the_ID(), 'service_duration', true);
            ?>

            <?php if ($service_price || $service_duration) : ?>
                <div class="service-meta" style="margin-top: 30px;">
                    <?php if ($service_price) : ?>
                        <p class="service-price" style="margin-bottom: 10px;"><strong>Price:</strong> <?php echo $service_price; ?></p>
                    <?php endif; ?>
                    <?php if ($service_duration) : ?>
                        <p class="service-duration"><strong>Duration:</strong> <?php echo $service_duration; ?></p>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

        </article>

    <?php endwhile; ?>
</div>

<?php get_footer(); ?>
