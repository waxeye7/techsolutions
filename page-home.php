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




<!-- below this comment is footer.php -->
<?php
    get_footer();
?>