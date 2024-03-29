<?php
 acf_add_local_field_group(array(
  'key' => 'group_600b5b790gg87',
  'title' => 'Program Post',
  'fields' => array(
    array(
      'key' => 'field_900c40aa6224e',
      'label' => 'Title',
      'name' => 'program_title',
      'type' => 'text',
      'instructions' => '',
      'required' => 1,
      'conditional_logic' => 0,
      'wrapper' => array(
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
    ),
    array(
      'key' => 'field_900c40be6224f',
      'label' => 'Text',
      'name' => 'program_description',
      'type' => 'wysiwyg',
      'instructions' => '',
      'required' => 1,
      'conditional_logic' => 0,
      'wrapper' => array(
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
			'tabs' => 'all',
			'media_upload' => 0,
			'toolbar' => 'basic',
			'delay' => 0,
    ),
    array(
      'key' => 'field_900c40cf62250',
      'label' => 'Button Text',
      'name' => 'program_button_text',
      'type' => 'text',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array(
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => 'Learn More',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
    ),
    array(
      'key' => 'field_900c40ea62251',
      'label' => 'Button Link',
      'name' => 'program_button_link',
      'type' => 'url',
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
    ),
    array(
      'key' => 'field_900c413e62252',
      'label' => 'Image',
      'name' => 'program_image',
      'type' => 'image',
      'instructions' => '',
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
      'mime_types' => '',
    ),
    
  ),
  'location' => array(
    array(
      array(
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'programs',
      ),
    ),
  ),
  'menu_order' => 0,
  'position' => 'normal',
  'style' => 'default',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => array(
    0=> 'the_content',
  ),
  'active' => true,
  'description' => '',
  'show_in_rest' => false,
));
?>