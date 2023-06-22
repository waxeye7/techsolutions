<!-- When you want to create a unique php page setup for just one page, you can add its dashboard slug after 'page-'  and this php file will be used for the page with said slug -->
<?php
/*
Template Name: about
*/
    get_header();
?>

<div class="content-area">
    <main id="main" class="site-main">
        <section class="about-section">
            <div class="about-content">
                <h1>About Us</h1>
                <p>Welcome to our website! We are a dedicated team of professionals passionate about providing high-quality computer repair services.</p>
                <p>With years of experience in the industry, we strive to solve all your computer-related problems efficiently and effectively.</p>
                <p>Our skilled technicians are well-versed in diagnosing hardware and software issues, performing system upgrades, optimizing performance, and much more.</p>
                <p>We value our customers and aim to provide exceptional service, ensuring your satisfaction with every repair or service we offer.</p>
                <p>Feel free to browse through our website to learn more about our services, and don't hesitate to contact us if you have any questions or need assistance.</p>
            </div>
            <div class="about-image">
                <img src="<?php echo get_theme_image_url('team.webp'); ?>" style="width: 100%; height: auto; display: block;" />
            </div>
        </section>
    </main>
</div>


<?php
    get_footer();
?>