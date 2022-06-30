<?php
  $banner_title      =get_field('banner_title');
  $banner_cta_text   =get_field('banner_button_text');
  $banner_cta_link   =get_field('banner_button_link');
  $banner_image      =get_field('banner_image');
?>

<?php if (!empty($banner_image)){ ?>
<section id="home-section-banner" class="home-cta-banner" uk-parallax="bgy: -200" style="background-image: url('<?php echo($banner_image['url']); ?>')">
<?php } else { ?>
<section class="home-cta-banner no-image">
<?php } ?>
  <div class="home-banner-container" uk-scrollspy="target: > div; cls:uk-animation-fade; delay: 100">
    <div class="banner-text" uk-scrollspy-class="uk-animation-slide-left-small">
      <h2><?php echo((empty($banner_title)) ? (acf_get_field('banner_title')['default_value']) : $banner_title ); ?></h2>
      <?php if (!empty($banner_text)): ?>
        <p><?php echo($banner_text) ?></p>
      <?php endif; ?>
    </div>
    <div class="cta-container" uk-scrollspy-class="uk-animation-slide-right-small">
      <a href="<?php echo($banner_cta_link); ?>" class="cta-primary"><?php echo($banner_cta_text ? $banner_cta_text : (acf_get_field('banner_button_text')['default_value'])); ?></a>
    </div>
  </div>
</section>