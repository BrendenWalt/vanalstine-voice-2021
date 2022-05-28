<?php
  $ig_feed_headline    = get_field('ig_headline');
?>  

<section class="home-ig-feed">
  <div class="ig-feed-container">
    <div class="ig-title-card">
      <i class="fab fa-instagram"></i>
      <h3><?php echo((empty($ig_feed_headline)) ? (acf_get_field('ig_headline')['default_value']) : $ig_feed_headline ); ?></h3>
    </div>
    <div class="ig-feed-items">
      <?php echo do_shortcode("[instagram-feed]") ?>
    </div>
  </div>
</section>