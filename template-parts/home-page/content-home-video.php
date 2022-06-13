<?php 
  $video_text = get_field('video_text');
  $video = get_field('home_video');
?>

<section class="home-video" uk-scrollspy="target: .scroll-to-top; cls: uk-animation-fade; delay: 300">
  <div class="home-video-container content-container">
    <div class="video">
      <?php the_field('home_video'); ?>
      <!-- iframe -->
      <!-- <iframe width="100%" height="100%" src="" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" style="height: 100%;" allowfullscreen></iframe> -->
    </div>
    <div class="video-textarea">
      <?php the_field('video_text'); ?>
    </div>
  </div>
</section>