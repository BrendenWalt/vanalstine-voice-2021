<?php 
  $video_text = get_field('video_text');
  $video = get_field('home_video');
?>

<section class="home-video" uk-scrollspy="target: .scroll-to-top; cls: uk-animation-fade; delay: 300">
  <a id="home-section-intro" class="home-anchor"></a>
  <div class="home-video-container content-container <?php echo((empty($video)) ? 'no-video' : ''); ?>">
    <?php if(!empty($video)): ?>
    <div class="video">
      <?php the_field('home_video'); ?>
    </div>
    <?php endif; ?>
    <div class="video-textarea<?php echo((empty($video)) ? ' uk-text-center' : ''); ?>">
      <?php the_field('video_text'); ?>
    </div>
  </div>
</section>