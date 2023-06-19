<!-- When you want to create a unique php page setup for just one page, you can add its dashboard slug after 'page-'  and this php file will be used for the page with said slug -->
<?php
    get_header();
?>

    <section class="contact-section">
      <div class="container">
        <h2>Contact Us</h2>
        <div class="contact-info">
          <div class="contact-info-item">
            <h3>Phone</h3>
            <p>123-456-7890</p>
          </div>
          <div class="contact-info-item">
            <h3>Email</h3>
            <p>info@techsolutions.com</p>
          </div>
          <div class="contact-info-item">
            <h3>Address</h3>
            <p>123 Main St, City, State, Country</p>
          </div>
        </div>
        <p>If you have any questions or inquiries, please feel free to contact us using the information provided above. We're here to assist you!</p>
      </div>
    </section>



<?php
    get_footer();
?>