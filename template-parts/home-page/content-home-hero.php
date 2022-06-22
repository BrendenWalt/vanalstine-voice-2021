<?php
  $hero_image                         =get_field('hero_image')
?>

<!-- HOME HERO -->
<section class="home-hero section-no-pad-mobile">
  <div class="home-hero-container">
    <div class="home-hero-headshot">
      <?php if(!empty($hero_image)): ?>
        <img src="<?php echo($hero_image['url']); ?>" alt="<?php echo($hero_image['alt']); ?>" />
      <?php endif; ?>
    </div>

    <div class="home-hero-text-content">
      <div class="home-site-title">
        <h1>
          <span>
            <?php echo str_replace(' ', '</span><br/><span>', get_bloginfo('name')); ?>
          </span>
        </h1>
      </div>
      <div class="home-site-tagline">
        <?php echo(get_bloginfo('description')); ?>
      </div>
      
    </div>

    <div class="home-hero-bottom-bar">
      <div class="home-social-menu">
        <?php
          wp_nav_menu( array(
            'theme_location'	=>	'social-menu',
            'container'				=>	'nav',
            'container_class'	=>	'home-social-menu'
          ))
        ?>
      </div>
      <div class="home-hero-scroll-indicator uk-visible@m">
        <p>Learn More</p>
        <img src="<?php bloginfo('stylesheet_directory')?>/assets/icons/arrow-down-02.svg" />
      </div>
    </div>
    
    
    
  </div>
</section>