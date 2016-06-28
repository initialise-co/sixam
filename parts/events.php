<?php if(!is_single()){ ?>
	<?php $event = get_posts(array('category_name' => 'events', 'posts_per_page' => 1, 'orderby' => 'date')); ?>
	<?php if(isset($event) && !empty($event)){ ?>
	<?php $event_image = wp_get_attachment_image_src(get_post_thumbnail_id($event[0]->ID), 'large'); ?>
	<div class="going-out-line">
		<p><?php echo get_post_meta($event[0]->ID, 'event_title', true); ?></p>
		<br>
		<a href="<?php echo get_post_meta($event[0]->ID, 'event_link', true); ?>"><img src="<?php echo $event_image[0]; ?>"></a>
	</div>
	<?php  } ?>
<?php } ?>