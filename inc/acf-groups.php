<?php

// Home Hero

// Benefits
if( function_exists('acf_add_local_field_group') ):

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

  acf_add_local_field_group(array(
    'key' => 'group_600b4740909b8',
    'title' => 'Benefits',
    'fields' => array(
      array(
        'key' => 'field_700b474f7a74e',
        'label' => 'Benefit 1',
        'name' => 'benefit_1',
        'type' => 'group',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'layout' => 'block',
        'sub_fields' => array(
          array(
            'key' => 'field_600b47817a74f',
            'label' => 'Title',
            'name' => 'title',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
          ),
          array(
            'key' => 'field_600b47997a750',
            'label' => 'Text',
            'name' => 'text',
            'type' => 'textarea',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
          ),
          array(
            'key' => 'field_600b47a97a751',
            'label' => 'Icon',
            'name' => 'icon',
            'type' => 'image',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'return_format' => 'array',
            'preview_size' => 'medium',
            'library' => 'all',
          ),
        ),
      ),
      array(
        'key' => 'field_600b474f7a74e',
        'label' => 'Benefit 2',
        'name' => 'benefit_2',
        'type' => 'group',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'layout' => 'block',
        'sub_fields' => array(
          array(
            'key' => 'field_600b47817a74f',
            'label' => 'Title',
            'name' => 'title',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
          ),
          array(
            'key' => 'field_600b47997a750',
            'label' => 'Text',
            'name' => 'text',
            'type' => 'textarea',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
          ),
          array(
            'key' => 'field_600b47a97a751',
            'label' => 'Icon',
            'name' => 'icon',
            'type' => 'image',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'return_format' => 'array',
            'preview_size' => 'medium',
            'library' => 'all',
          ),
        ),
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
  
  endif;

?>