<?php
    get_header();
?>
<!-- above this comment is header.php -->


<div class="faq-section">
  <h1 style="margin-bottom:4%;">Frequently Asked Questions</h1>
  <div class="faq-wrapper">
    <div class="questions-section">
      <ul class="question-list">
        <?php
          $args = array(
            'post_type' => 'faq',
            'posts_per_page' => -1,
            'orderby' => 'title',
            'order' => 'ASC'
          );
          $faq_query = new WP_Query($args);

          if ($faq_query->have_posts()) {
            while ($faq_query->have_posts()) {
              $faq_query->the_post();
              ?>
              <li class="question-item"><?php the_title(); ?></li>
              <?php
            }
            wp_reset_postdata();
          } else {
            echo 'No FAQs found.';
          }
        ?>
      </ul>
    </div>
    <div class="answers-section">
      <?php
        $faq_query = new WP_Query($args);

        if ($faq_query->have_posts()) {
          while ($faq_query->have_posts()) {
            $faq_query->the_post();
            ?>
            <div class="answer-container">
              <?php the_content(); ?>
            </div>
            <?php
          }
          wp_reset_postdata();
        } else {
          echo 'No FAQs found.';
        }
      ?>
    </div>
  </div>
</div>

<!-- below this comment is footer.php -->
<?php
    get_footer();
?>

<script>
  jQuery(document).ready(function ($) {
    $(".question-item").first().addClass("active");
    $(".answer-container").first().addClass("show");

    $(".question-item").click(function () {
      $(".question-item").removeClass("active");
      $(this).addClass("active");
      $(".answer-container").removeClass("show");
      var index = $(this).index();
      $(".answer-container").eq(index).addClass("show");
    });
  });
</script>