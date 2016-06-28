<?php

	add_action('pre_get_posts', 'custom_photo_page');



	function custom_photo_page($post){
		if(is_single() && is_category('photo')){

		}

	}

?>