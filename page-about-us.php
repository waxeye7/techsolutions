<!-- When you want to create a unique php page setup for just one page, you can add its dashboard slug after 'page-'  and this php file will be used for the page with said slug -->
<?php
    get_header();
?>

    <h1>About Us</h1>
    <div class="post">
    <?php the_content(); ?>

    </div>

<?php
    get_footer();
?>