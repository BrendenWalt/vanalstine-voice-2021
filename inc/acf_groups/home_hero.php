<?php
acf_add_local_field_group(array(
  'key' => 'group_6005d55853e8e',
  'title' => 'Home Page',
  'fields' => array(
    array(
      'key' => 'field_6005d561a5eb8',
      'label' => 'Hero Image',
      'name' => 'hero_image',
      'type' => 'image',
      'instructions' => 'Headshot for the top of the homepage',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array(
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'return_format' => 'array',
      'preview_size' => 'medium',
      'library' => 'all',
      'min_width' => '',
      'min_height' => '',
      'min_size' => '',
      'max_width' => '',
      'max_height' => '',
      'max_size' => '',
      'mime_types' => 'jpg, png, gif, jpeg',
    ),
  ),
  'location' => array(
    array(
      array(
        'param' => 'page_template',
        'operator' => '==',
        'value' => 'template-home.php',
      ),
    ),
  ),
  'menu_order' => 0,
  'position' => 'normal',
  'style' => 'default',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => '',
  'active' => true,
  'description' => '',
));

?>