<!-- Query Testimonial posts -->
<?php


  $args = array(
    'post_type' => 'testimonials',
    'post_status' => 'publish',
    'orderby' => 'ID',
    'order' => 'ASC'
  );

  $loop = new WP_Query( $args );

  if ($loop->have_posts()) {
?>
  <section class="home-testimonials">
    <a id="home-section-testimonials" class="home-anchor"></a>
    <div class="carousel-container">
      <div class="content-container swiper-container">
        
        <div class="testimonials-container swiper-wrapper">
    <?php
      while ( $loop->have_posts() ) : $loop->the_post();
      if( !get_field('deactivate')) {
        $image = get_field('testimonial_image');
    ?>

          <blockquote class="testimonial-card-container swiper-slide">
            <div class="slide-content">
              <h4><?php echo the_field('testimonial_text') ?></h4>
              <!-- Testimonial image -->
              <?php if(!empty( $image )) : ?>
                <div class="testimonial-img">
                  <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr( $image['alt']); ?>">
                </div>
              <?php endif; ?>
              <footer>
              
            
                <strong><?php echo the_field('testimonial_name') ?></strong><br>
                <?php if (!empty(the_field('testimonial_subtitle'))) : ?>
                  <i><?php echo the_field('testimonial_subtitle') ?></i>
                <?php endif; ?>
              </footer>
            </div>
          </blockquote>

    <?php
      }
      endwhile;
      wp_reset_postdata();
    ?>
        </div>

      <div class="testimonial-counter-container swiper-pagination">
        <!-- <span class="testimonial-counter active"></span>
        <span class="testimonial-counter"></span> -->
      </div>
      <div class="testimonial-nav arrow-right swiper-button-next">
        <!-- <i class="fas fa-chevron-right"></i> -->
      </div>
      <div class="testimonial-nav arrow-left swiper-button-prev">
        <!-- <i class="fas fa-chevron-left"></i> -->
      </div>

   </div>

</section>

<?php } ?>
