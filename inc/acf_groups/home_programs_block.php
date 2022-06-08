<?php
 acf_add_local_field_group(array(
  'key' => 'group_600b5b790ff87',
  'title' => 'Programs',
  'fields' => array(
    array(
      'key' => 'field_600c40aa6224e',
      'label' => 'Section Title',
      'name' => 'programs_section_title',
      'type' => 'text',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array(
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => 'Available Programs',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
    ),
    array(
			'key' => 'field_629a5d4f940f4',
			'label' => 'Select Programs',
			'name' => 'select_programs',
			'type' => 'post_object',
			'instructions' => '',
			'required' => 1,
      'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array(
				0 => 'programs',
			),
			'taxonomy' => '',
			'allow_null' => 0,
			'multiple' => 1,
			'return_format' => 'object',
			'ui' => 1,
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
  'menu_order' => 3,
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