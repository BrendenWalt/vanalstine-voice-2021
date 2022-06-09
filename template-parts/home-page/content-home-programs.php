<?php
  $section_title = get_field('programs_section_title');

  $args = array(
    'post_type' => 'programs',
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'ASC'
  )
?>

<section class="home-programs">
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
          $button_text = get_field('program_button_text', $post->ID);
          $program_button_link = get_field('program_button_link', $post->ID);
          $program_image = get_field('program_image', $post->ID);
    ?>

    <!-- program card -->
    <div class="home-program-card uk-card uk-body uk-card-default">
      <div class="program-info">
        <div class="program-text">
          <h3 class="program-title"><?php echo( $program_title ); ?></h3>
          <p class="program-description">
            <?php echo( $program_description ); ?>
          </p>
        </div>
        <a class="cta-secondary"><?php echo( $button_text ); ?></a>
      </div>
     
      <div class="program-image uk-card-media-bottom">
        <img src="https://images.unsplash.com/photo-1540593463874-59835505e99d" width="1800" height="1200" alt="">
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
</section>