<?php if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_home-events',
		'title' => 'Home Events',
		'fields' => array (
			array (
				'key' => 'field_569794e514bd9',
				'label' => 'Event Link',
				'name' => 'event_link',
				'type' => 'text',
				'instructions' => 'Add link to event',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5697956c14bda',
				'label' => 'Event Title',
				'name' => 'event_title',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_category',
					'operator' => '==',
					'value' => '1619',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_popup-features',
		'title' => 'Popup Features',
		'fields' => array (
			array (
				'key' => 'field_569f0e5a7bede',
				'label' => 'Popup Type',
				'name' => 'popup_type',
				'type' => 'select',
				'instructions' => 'Select the type of Popup',
				'required' => 1,
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'null',
							'operator' => '==',
						),
					),
					'allorany' => 'all',
				),
				'choices' => array (
					'newsletter' => 'Newsletter',
					'image' => 'Image',
					'code' => 'Code ( Use to paste in code )',
				),
				'default_value' => 'newsletter',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_569f172566f52',
				'label' => 'Code segment',
				'name' => 'code_segment',
				'type' => 'textarea',
				'instructions' => 'Paste in the code ',
				'required' => 1,
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_569f0e5a7bede',
							'operator' => '==',
							'value' => 'code',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'none',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'popup',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 27,
	));
}
?>
