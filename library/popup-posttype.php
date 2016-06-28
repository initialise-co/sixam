<?php
	
	add_action('init', 'add_popup_custom_post_type');


	function add_popup_custom_post_type(){
		register_post_type('popup',
			array(
				'label' => 'Popups',
				/*'labels' =>  array(

				),*/
				'capability_type' => 'page',
				'public' => 'true',
				'exclude_from_search' => true,
				'publicly_queryable' => false,
				'menu_position' => 20,
				'hierarchical' => false,
				'supports' => array('title', 'thumbnail', 'custom-fields', 'page-attributes'),
				'show_in_menu' => true
			)
		);
	}

?>