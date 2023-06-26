<?php
/*
Template Name: contact
*/
get_header();
?>

<section class="contact-section" style="padding: 20px 0;">
  <div class="" style="max-width: 800px; margin: 0 auto; padding: 10px 20px;">
    <h2 style="text-align: center; color: #333; font-size: 2.5em; margin-bottom: 30px;">Contact Us</h2>
    <div class="contact-info" style="display: flex; justify-content: space-between; margin-bottom: 20px;">
      <div class="contact-info-item" style="flex: 1; padding: 20px; background-color: #fff; box-shadow: 0 0 10px rgba(0,0,0,0.1); border-radius: 10px;">
        <h3 style="color: #333; font-size: 1.5em; margin-bottom: 10px;">Phone</h3>
        <p style="font-size: 1.2em; color: #666;">0800 888 4550</p>
      </div>
      <div class="contact-info-item" style="flex: 1; padding: 20px; background-color: #fff; box-shadow: 0 0 10px rgba(0,0,0,0.1); border-radius: 10px;">
        <h3 style="color: #333; font-size: 1.5em; margin-bottom: 10px;">Email</h3>
        <p style="font-size: 1.2em; color: #666;">contact@techsolutions.com</p>
      </div>
      <div class="contact-info-item" style="flex: 1; padding: 20px; background-color: #fff; box-shadow: 0 0 10px rgba(0,0,0,0.1); border-radius: 10px;">
        <h3 style="color: #333; font-size: 1.5em; margin-bottom: 10px;">Address</h3>
        <p style="font-size: 1.2em; color: #666;">573 Colombo Street, Christchurch</p>
      </div>
    </div>
    <p style="text-align: center; font-size: 1.2em; color: #666;">
We invite you to reach out through any of the contact options provided above. Whether you're seeking expert assistance, have an inquiry, or are ready to book a service, our dedicated team is here to serve your needs. Connect with us - your journey towards seamless digital experience starts here.</p>
  </div>
</section>

<section class="contact-section" style="padding: 20px 0; margin-bottom:10px;">
  <div class="" style="max-width: 800px; margin: 0 auto; padding: 20px;">
    <h2 style="text-align: center; color: #333; font-size: 2.5em; margin-bottom: 30px;">Send us a Message</h2>
    <form action="#" method="post" style="background-color: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
      <div style="margin-bottom: 20px;">
        <label style="display: block; color: #333; font-size: 1.2em; margin-bottom: 10px;">Your Name</label>
        <input type="text" name="name" style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc;">
      </div>
      <div style="margin-bottom: 20px;">
        <label style="display: block; color: #333; font-size: 1.2em; margin-bottom: 10px;">Your Email</label>
        <input type="email" name="email" style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc;">
      </div>
      <div style="margin-bottom: 20px;">
        <label style="display: block; color: #333; font-size: 1.2em; margin-bottom: 10px;">Message</label>
        <textarea name="message" rows="5" style="max-height:500px; min-height:60px; max-width:700px !important; width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc;"></textarea>
      </div>
      <div style="text-align: center;" class="hover-style">
        <input type="submit" value="Send Message" style="background-color: #333; color: #fff; border: none; padding: 15px 30px; font-size: 1em; border-radius: 5px; cursor: pointer;">
      </div>
    </form>
  </div>
</section>


<?php
get_footer();
?>
