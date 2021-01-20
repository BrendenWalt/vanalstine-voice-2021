<?php
  $hero_image                         =get_field('hero_image')
?>

<!-- HOME HERO -->
<section class="home-hero">
  <div class="home-hero-container">
    <div class="home-hero-headshot">
      <?php if(!empty($hero_image)): ?>
        <img src="<?php echo($hero_image['url']); ?>" alt="<?php echo($hero_image['alt']); ?>" />
      <?php endif; ?>
    </div>

    <div class="home-hero-text-content">
      <div class="home-site-title">
        <h1>
          <?php echo(get_bloginfo('name')); ?>
        </h1>
      </div>
      <div class="home-site-tagline">
        <?php echo(get_bloginfo('description')); ?>
      </div>
    </div>

    <div class="home-hero-scroll-indicator">
      <p>Learn More</p>
    </div>
  </div>
</section>