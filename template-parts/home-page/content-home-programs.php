<?php
  $module_title = the_field('');
  $program_title = the_field('program_title');
  $program_description = the_field('program_description');
  $button_text = the_field('program_button_text');
  $program_button_link = the_field('program_button_link');
  $program_image = the_field('program_image');

  $args = array(
    'post_type' => 'programs',
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'ASC'
  )
?>

<section class="home-programs">
  <h2 class=section-title>Lorem ipsum</h2>
  <div class="home-programs-container">

    <?php
      $loop = new WP_Query( $args );
      while ( $loop->have_posts() ) : $loop-the_post();
    ?>

    <!-- program card -->
    <div class="home-program-card uk-card uk-body uk-card-default">
      <div class="program-text">
        <h3 class="program-title"><?php echo( $program_title ); ?></h3>
        <p class="program-description">
          <?php echo( '$program_description' ); ?>
        </p>
      </div>
      <a class="cta-primary"><?php echo( '$program_button_link' ); ?></a>
      <div class="uk-card-media-bottom">
        <img src="https://images.unsplash.com/photo-1540593463874-59835505e99d" width="1800" height="1200" alt="">
      </div>
    </div>

    <?php 
      endwhile;
      wp_reset_postdata();
    ?>

  </div>
</section>