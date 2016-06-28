<?php
	
	global $popup;
	global $popup_image;
	$popup_image = wp_get_attachment_image_src(get_post_thumbnail_id($popup[0]->ID), 'full');
	
?>
<img src="<?php echo $popup_image[0]; ?>" />