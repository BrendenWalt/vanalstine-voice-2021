<?php
  $about_image           = get_field('home_about_image');
  $about_headline        = get_field('about_headline');
  $about_text            = get_field('about_text');
  $about_btn_text        = get_field('about_button_text');
  $about_btn_url         = get_field('about_button_link');
?>

<section id="home-section-about" class="home-about">
  <div class="content-container" uk-scrollspy="target: .home-about-text-container;cls:uk-animation-fade uk-animation-slide-right-medium; delay: 300">
    <div class="home-about-img">
      <?php if(!empty($about_image)) { ?>
        <img src="<?php echo esc_url($about_image['url']); ?>" alt="<?php echo esc_attr($about_image['alt']); ?>">
      <?php } else { ?>
        <img src="https://via.placeholder.com/620x720" alt="Picture of Stephanie for VanAlstine Voice">
      <?php } ?>
    </div>
    <div class="home-about-text-container uk-card uk-card-body uk-card-default uk-animation-slide-right uk-animation-fade">
      <div class="about-box">
        <h2>
          <?php echo (!empty($about_headline) ? $about_headline : 'About' ) ?>
        </h2>
        <p><?php echo $about_text ?></p>
      </div>
      <div class="about-cta-container">
        <a class="cta-primary color-secondary" href="<?php echo (!empty($about_btn_url) ? $about_btn_url : '#contact-home'); ?>"><?php echo (!empty( $about_btn_text) ? $about_btn_text : 'Learn More' ) ?></a>
      </div>
      
    </div>
  </div>
</section>