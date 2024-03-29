<?php
  $form = (get_field('bottom_contact_form') ? get_field('bottom_contact_form') : acf_get_field('bottom_contact_form')['default_value']);
  $headline = ( get_field('bottom_contact_form_headline') ? get_field('bottom_contact_form_headline') : acf_get_field('bottom_contact_form_headline')['default_value'] );
?>

<!-- Reusable contact form -->
<?php if( get_field('include_contact_form')) { ?>
<section uk-scrollspy="target: > div; cls:uk-animation-fade uk-animation-slide-right-medium; delay: 100" class="contact-form-container">
  <div class="content-container contact-form">
    <h2 class="contact-headline"><?php echo( $headline ); ?></h2>
    <div class="uk-card uk-card-default uk-card-body footer-form"><?php echo do_shortcode( $form ); ?></div>
  </div>
</section>

<?php } ?>