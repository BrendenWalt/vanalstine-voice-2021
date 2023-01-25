<?php
  $section_title = get_field('programs_section_title');
  $prg_button_text = get_field('programs_button_text');
  $prg_button_text_obj = acf_get_field('programs_button_text')['default_value'];
  $prg_button_link = get_field('programs_button_link');


  $args = array(
    'post_type' => 'programs',
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'ASC'
  )
?>

<section  class="home-programs">
  <a id="home-section-programs" class="home-anchor"></a>
  <h2 class=section-title><?php echo(empty($section_title) ? (acf_get_field('programs_section_title')['default_value']) : $section_title ); ?></h2>
  <div class="home-programs-container"  uk-scrollspy="target: > div; cls:uk-animation-fade uk-animation-slide-bottom-medium; delay: 200">

    <?php
      $featured_programs = get_field('select_programs');
      if( $featured_programs ): 
    ?>
 
    <?php
      foreach( $featured_programs as $post ):
        $program_title = get_field('program_title', $post->ID);
        $program_description = get_field('program_description', $post->ID);
        $program_image = get_field('program_image', $post->ID);

        // Fields for individual program cards
        // $button_text = get_field('program_button_text', $post->ID);
        // $program_button_link = get_field('program_button_link', $post->ID);
        
    ?>

    <!-- program card -->
    <div class="home-program-card uk-card uk-body uk-card-default">
      <div class="program-info">
        <div class="program-text">
          <h3 class="program-title"><div><?php echo( $program_title ); ?></div></h3>
          <div class="program-description">
            <?php echo( $program_description ); ?>
          </div>
        </div>
        
        <!-- individual CTA per program -->
        <!-- <a class="cta-secondary" href="<?php /* echo ( !empty($program_button_link) ? esc_url($program_button_link) : '#home-contact'); ?>"><?php echo( $button_text );  */?></a> -->
        
      </div>
     
      <div class="program-image uk-card-media-bottom">
        <?php if($program_image) { ?>
          <img src="<?php echo($program_image['url']) ?>" width="1800" height="1200" alt="">
        <?php } else { ?>
          <img src="https://images.unsplash.com/photo-1540593463874-59835505e99d" width="1800" height="1200" alt="">
        <?php } ?>
      </div>

    </div>

    <?php 
      endforeach;
    ?>
    

    <?php
      wp_reset_postdata();
      endif;
    ?>

  </div>
  <div>
      <a class="cta-secondary" href="<?php echo ( !empty($prg_button_link) ? esc_url($prg_button_link) : '#home-section-contact'); ?>"><?php echo ( !empty($prg_button_text) ? ($prg_button_text) : $prg_button_text_obj ); ?></a>
    </div>
</section>