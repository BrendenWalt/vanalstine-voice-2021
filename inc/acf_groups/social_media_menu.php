<?php
acf_add_local_field_group(array(
  'key' => 'group_6005dd38ecd52',
  'title' => 'Social Menu',
  'fields' => array(
    array(
      'key' => 'field_6005dd68ebd31',
      'label' => 'Social Icon',
      'name' => 'social_icon',
      'type' => 'select',
      'instructions' => 'Pick the social media page',
      'required' => 0,
      'conditional_logic' => array(
        array(
          array(
            'field' => 'field_60078957e86d3',
            'operator' => '!=empty',
          ),
        ),
      ),
      'wrapper' => array(
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'choices' => array(
        'Facebook' => 'Facebook',
        'Instagram' => 'Instagram',
        'Pinterest' => 'Pinterest',
      ),
      'default_value' => false,
      'allow_null' => 0,
      'multiple' => 0,
      'ui' => 0,
      'return_format' => 'value',
      'ajax' => 0,
      'placeholder' => '',
    ),
  ),
  'location' => array(
    array(
      array(
        'param' => 'nav_menu_item',
        'operator' => '==',
        'value' => 'location/social-menu',
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
  'show_in_rest' => false,
));
?>