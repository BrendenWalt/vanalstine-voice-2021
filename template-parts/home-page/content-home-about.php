<?php
 $about_image           = get_field('about_image');
?>

<section class="home-about">
  <div class="content-container">
    <div class="home-about-img">
      <?php if(!empty($about_image)) { ?>
        <img src="https://via.placeholder.com/620x720" alt="">
      <?php } else { ?>
        <img src="https://via.placeholder.com/620x720/ff00ff" alt="">
      <?php } ?>
    </div>
    <div class="home-about-text-container">
      <div class="about-box">
        <h2>About</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque vero rerum sit similique nemo a ducimus, architecto cum quos asperiores fugiat hic ut voluptates optio, assumenda voluptatum velit aspernatur at?</p>
      </div>
      <a class="cta-primary color-secondary">Learn More</a>
    </div>
  </div>
</section>