<?php
  $form = get_field('contact_form_shortcode');
  $title = get_field('contact_form_title');
  $image = get_field('contact_image');
?>

<section class="home-contact-form-section">
  <a id="home-section-contact" class="home-anchor"></a>
  <div class="content-container <?php echo (empty($image) ? 'no-img' : '') ?>">
    <div class="home-contact-form">
      <div class="contact-title-container">
        <h2>
          <?php echo (($title) ? $title : acf_get_field('contact_form_title')['default_value'] ); ?>
        </h2>
      </div>

      <div class="contact-form-container uk-card uk-card-default">
        <div class="uk-card-body">
         <?php echo do_shortcode($form) ?>
        </div>
      </div>
    </div>

    <?php if(!empty($image)) { ?>
      <div class="home-contact-image uk-visible@s">
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt'])?>">
      </div>
    <?php } ?>

   
  </div>
  
</section>