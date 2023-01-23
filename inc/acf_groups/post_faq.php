<?php
acf_add_local_field_group(array(
	'key' => 'group_62be0dc54fb7f',
	'title' => 'FAQ',
	'fields' => array(
		array(
			'key' => 'field_62be0dcd6c448',
			'label' => 'Question',
			'name' => 'question',
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
			'key' => 'field_62be0deb6c449',
			'label' => 'Answer',
			'name' => 'answer',
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
			'toolbar' => 'basic',
			'media_upload' => 0,
			'delay' => 0,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'faq',
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
	'show_in_rest' => 0,
));

?>