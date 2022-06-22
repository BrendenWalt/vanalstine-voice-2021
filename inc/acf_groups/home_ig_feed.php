<?php
acf_add_local_field_group(array(
  'key' => 'group_home_ig_feed',
  'title' => 'Instagram Feed',
  'fields' => array(
    array(
      'key' => 'field_home_ig_feed',
      'label' => 'Headline',
      'name' => 'ig_headline',
      'type' => 'text',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array(
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => 'Follow VanAlstine Voice on Instagram',
      'placeholder' => '',
      'maxlength' => '',
      'rows' => '',
      'new_lines' => '',
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
  'menu_order' => 8,
  'position' => 'normal',
  'style' => 'default',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => '',
  'active' => true,
  'description' => '',
  'show_in_rest' => false,
));

?>