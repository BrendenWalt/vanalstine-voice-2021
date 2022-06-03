<?php
  if( function_exists('acf_add_local_field_group') ):

    // Home Hero
    include 'acf_groups/home_hero.php';
    // Home Benefits
    include 'acf_groups/home_benefits.php';
    // Home About
    include 'acf_groups/home_about.php';
    // Home Banner
    include 'acf_groups/home_banner.php';
    // Home Programs
    include 'acf_groups/home_programs_block.php';
    // Home Video Block
    include 'acf_groups/home_video.php';
    // Contact form
    include 'acf_groups/contact_form.php';
    // Social Media
    include 'acf_groups/home_ig_feed.php';
    include 'acf_groups/social_media_menu.php';

    // Custom Posts
    include 'acf_groups/home_testimonials.php';
    include 'acf_groups/post_program.php';
  endif;

?>