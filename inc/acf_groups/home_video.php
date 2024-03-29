<?php
  acf_add_local_field_group(array(
    'key' => 'group_600c452f7d7ac',
    'title' => 'Video',
    'fields' => array(
      array(
        'key' => 'field_600b5a06fbba3_home_video',
        'label' => 'Intro Text',
        'name' => 'video_text',
        'type' => 'textarea',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'maxlength' => '',
        'rows' => '',
        // 'new_lines' => 'wpautop',
        'new_lines' => 'br',
      ),
      array(
        'key' => 'field_600c453a7a85d',
        'label' => 'Video',
        'name' => 'home_video',
        'type' => 'oembed',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'width' => '',
        'height' => '',
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
    'menu_order' => 1,
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