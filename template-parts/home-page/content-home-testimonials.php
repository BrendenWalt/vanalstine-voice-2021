<?php

?>

<section class="home-testimonials">

  <?php if( have_rows('testimonial_tab_group')): 
    $i = 1;
    
    while ( have_rows('testimonial_tab_group') ) : the_row();
      while ( have_rows('testimonial_1')) : the_row();
      $text = get_sub_field('testimonial_text');
  ?>

        <div>
         <?php echo($text); ?>
        </div>
        <?php  endwhile; ?>
    <?php endwhile; ?>

    <?php endif; ?>

  <div class="carousel-container">
    <div class="content-container swiper-container">
      
      <div class="testimonials-container swiper-wrapper">

      
        <!-- Testimonial -->
        <blockquote class="testimonial-card-container swiper-slide">
          <div class="slide-content">
            <h4>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis blanditiis vitae in veritatis aut nulla minima consectetur impedit consequatur culpa!</h4>
            <footer>
              <strong>Lorem ipsum</strong><br>
              <i>Lorem ipsum</i>
            </footer>
          </div>
        </blockquote>

        <!-- Testimonial -->
        <blockquote class="testimonial-card-container swiper-slide">
          <div class="slide-content">
            <h4>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis blanditiis vitae in veritatis aut nulla minima consectetur impedit consequatur culpa!</h4>
            <footer>
              <strong>Lorem ipsum</strong><br>
              <i>Lorem ipsum</i>
            </footer>
          </div>
        </blockquote>

        <!-- Testimonial -->
        <blockquote class="testimonial-card-container swiper-slide">
          <div class="slide-content">
            <h4>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis blanditiis vitae in veritatis aut nulla minima consectetur impedit consequatur culpa!</h4>
            <footer>
              <strong>Lorem ipsum</strong><br>
              <i>Lorem ipsum</i>
            </footer>
          </div>
        </blockquote>
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
  </div>
  
</section>