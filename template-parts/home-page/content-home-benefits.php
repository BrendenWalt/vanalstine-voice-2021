<?php
  $header = get_field('section_title');
  $benefit_1 = get_field('benefit_1');
  $benefit_2 = get_field('benefit_2');
  $benefit_3 = get_field('benefit_3');
  $benefit_4 = get_field('benefit_4');
  $benefit_5 = get_field('benefit_5');

?>

<section class="home-benefits">
  <div class="section-title">
    <h2 class="uk-text-center"><?php echo((empty($header)) ? (acf_get_field('section_title')['default_value']) : $header ); ?></h2>
  </div>
  <div class="home-benefits-container">
    <div uk-scrollspy="target: > div; cls:uk-animation-fade uk-animation-slide-bottom-medium; delay: 200" class="home-benefits-cards-container uk-grid-large uk-grid-match uk-child-width-1-4@m uk-child-width-1-2@s" uk-grid>

     <!-- Card 1 --> 
      <?php if( $benefit_1['benefit_title'] ): ?>
        <div class="home-benefit-card">
          <div class="home-benefit-icon">
            <div>
              <?php if($benefit_1['icon']) { 
                echo  $benefit_1['icon'];
              } else {
                $default = acf_get_field('icon_01')['default_label'];
                echo html_entity_decode( $default );
              } ?>
            </div>
          </div>
          <div class="home-benefit-card-text">
            <h3><?php echo $benefit_1['benefit_title']; ?></h3>
            <p><?php echo $benefit_1['benefit_text']; ?></p>
          </div>
        </div>
      <?php endif; ?>

      <!-- Card 2 --> 
      <?php if( $benefit_2['benefit_title'] ): ?>
        <div class="home-benefit-card">
        <div class="home-benefit-icon">
          <div>
            <?php if($benefit_2['icon']) { 
              echo  $benefit_2['icon'];
             } else {
              $default = acf_get_field('icon_02')['default_label'];
              echo html_entity_decode( $default );
             } ?>
          </div>
          </div>
          <div class="home-benefit-card-text">
            <h3><?php echo $benefit_2['benefit_title']; ?></h3>
            <p><?php echo $benefit_2['benefit_text']; ?></p>
          </div>
        </div>
      <?php endif; ?>
      
      <!-- Card 3 --> 
      <?php if( $benefit_3['benefit_title'] ): ?>
        <div class="home-benefit-card">
          <div class="home-benefit-icon">
            <div>
              <?php if($benefit_3['icon']) { 
                echo  $benefit_3['icon'];
              } else {
                $default = acf_get_field('icon_03')['default_label'];
                echo html_entity_decode( $default );
              } ?>
            </div>
          </div>
          <div class="home-benefit-card-text">
            <h3><?php echo $benefit_3['benefit_title']; ?></h3>
            <p><?php echo $benefit_3['benefit_text']; ?></p>
          </div>
        </div>
      <?php endif; ?>

       <!-- Card 4 --> 
       <?php if( $benefit_4['benefit_title'] ): ?>
        <div class="home-benefit-card">
          <div class="home-benefit-icon">
            <div>
              <?php if($benefit_4['icon']) { 
                echo  $benefit_4['icon'];
              } else {
                $default = acf_get_field('icon_04')['default_label'];
                echo html_entity_decode( $default );
              } ?>
            </div>
          </div>
          <div class="home-benefit-card-text">
            <h3><?php echo $benefit_3['benefit_title']; ?></h3>
            <p><?php echo $benefit_3['benefit_text']; ?></p>
          </div>
        </div>
      <?php endif; ?>

    </div>
    
    <div class="home-benefits-ctas">
      
      <a href="" class="cta-secondary">Lorem, ipsum</a>
      <a href="" class="cta-secondary-outline">Lorem, ipsum</a>
    </div>
  </div>
 
</section>


