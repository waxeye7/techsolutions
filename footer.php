</div>

<footer class="site-footer">
  <div class="footer-content">
    <div class="footer-section">
      <div class="flex">
        <div class="logo">
          <a href="<?php echo home_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo">
          </a>
        </div>
        <a href="<?php echo home_url(); ?>">
        <h3 style="color:#fefefe;"><?php bloginfo('name'); ?></h3>
            </a>

          
      </div>
      <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>">
    <div class="contact-button">
        Contact Us
    </div>
</a>
      
      <div class="footer-divider"></div>

    </div>
    


    <div class="footer-section">
      <div class="footer-links">
      <?php
        $argument = array( 'theme_location' => 'footer' );
        wp_nav_menu( $argument );
      ?>
      </div>
      <div class="footer-divider"></div>
    </div>
    

    <div class="footer-section">
    <div class="social-media-links">
        <a href="https://twitter.com" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png" alt="Twitter"></a>
        <a href="https://instagram.com" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/instagram.png" alt="Instagram"></a>
        <a href="https://youtube.com" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/youtube.png" alt="YouTube"></a>
        <a href="https://facebook.com" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" alt="Facebook"></a>
      </div>
    </div>
  </div>
</footer>