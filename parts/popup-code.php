<?php

	global $popup;
	$code_segment = get_post_meta($popup[0]->ID, 'code_segment', true);
	echo $code_segment; 

?>
