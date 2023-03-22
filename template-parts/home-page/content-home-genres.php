<?php
  $genre_title       = get_field('genre_section_name');
  $genre_description = get_field('genre_description');
  $genre_list        = get_field('genre_list');

  $genre_arr = explode (",", $genre_list);

?>

<section>
  <div class="section-title">
    <h2 class="uk-text-center"><?php echo ( (empty($genre_title)) ? (acf_get_field('genre_section_name')['default_value']) : $genre_title ); ?></h2>
    <?php if(!empty($genre_description)): ?>
      <p><?php echo($genre_description); ?></p>
    <?php endif; ?>
    <!-- Genre loop -->
    <ul>
    <?php
      foreach ($genre_arr as $genre) {
    ?>
      <li><?php echo $genre ?></li>
    <?php 
      }
    ?>
    </ul>
  </div>
</section>