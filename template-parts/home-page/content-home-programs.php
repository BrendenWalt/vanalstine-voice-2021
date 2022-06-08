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
  <div class="home-programs-container">

    <?php
      // $loop = new WP_Query( $args );
      // while ( $loop->have_posts() ) : $loop-the_post();
    ?>

    <?php
      // $featured_programs = get_field('select_programs');
      // if( $featured_programs ): 
        $featured_posts = get_field('select_programs');
        if( $featured_posts ):
    ?>
      <pre><?php print_r($featured_posts); ?></pre>
      <ul>
    <?php
        // foreach( $featured_programs as $post ):
        //   $program_title = get_field('program_title', $program->ID);
        //   $program_description = get_field('program_description', $program->ID);
        //   $button_text = get_field('program_button_text', $program->ID);
        //   $program_button_link = get_field('program_button_link', $program->ID);
        //   $program_image = get_field('program_image', $program->ID);
        foreach( $featured_posts as $post ):
          setup_postdata($post);
    ?>


      <li><?php the_field('program_title'); ?></li>
    <!-- program card -->
    <!-- <div class="home-program-card uk-card uk-body uk-card-default">
      <div class="program-text">
        <h3 class="program-title"><?php echo( $program_title ); ?></h3>
        <p class="program-description">
          <?php echo( $program_description ); ?>
        </p>
      </div>
      <a class="cta-primary"><?php echo( $program_button_link ); ?></a>
      <div class="uk-card-media-bottom">
        <img src="https://images.unsplash.com/photo-1540593463874-59835505e99d" width="1800" height="1200" alt="">
      </div>
    </div> -->

    <?php 
      endforeach;
    ?>
    </ul>
    <?php
      wp_reset_postdata();
      endif;
      // wp_reset_postdata();
    ?>

  </div>
</section>