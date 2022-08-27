<?php
  $ig_feed_headline    = get_field('ig_headline');
  $ig_shortcode        = get_field('ig_shortcode');
?>  

<section  class="home-ig-feed section-no-pad-mobile">
  <a id="home-section-ig-feed" class="home-anchor"></a>
  <div class="ig-feed-container">
    <div class="ig-title-card">
      <i class="fab fa-instagram"></i>
      <h3><?php echo((empty($ig_feed_headline)) ? (acf_get_field('ig_headline')['default_value']) : $ig_feed_headline ); ?></h3>
    </div>
    <div class="ig-feed-items">
      <?php echo do_shortcode("[instagram-feed feed=1]") ?>
    </div>
  </div>
</section>