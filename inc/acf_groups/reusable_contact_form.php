<?php

acf_add_local_field_group(array(
	'key' => 'group_63f5587cbbca6',
	'title' => 'Reusable Contact form',
	'fields' => array(
		array(
			'key' => 'field_63f5591bf4a2f',
			'label' => 'include contact form',
			'name' => 'include_contact_form',
			'type' => 'true_false',
			'instructions' => 'Do you want to include a contact form at the bottom of this page?',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 1,
			'ui' => 1,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_63f55951f4a30',
			'label' => 'bottom contact form shortcode',
			'name' => 'bottom_contact_form',
			'type' => 'text',
			'instructions' => 'Which contact form do you want to use?',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_63f5591bf4a2f',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '[contact-form-7 id="106" title="Contact form 1"]',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_63f55a25f4a32',
			'label' => 'bottom contact form headline',
			'name' => 'bottom_contact_form_headline',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_63f5591bf4a2f',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'Get in touch so we can start singing!',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page',
				'operator' => '!=',
				'value' => '7',
			),
		),
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
	),
	'menu_order' => 10,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
));

?>