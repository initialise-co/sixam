<div class="mixes">
<?php $mix = get_posts(array('category_name' => '6am-mixes', 'posts_per_page' => 1, 'orderby' => 'date')); ?>
<?php if($post->ID != $mix[0]->ID){ ?>
	<p>Latest Mix</p>
	<?php $mix_image = wp_get_attachment_image_src(get_post_thumbnail_id($mix[0]->ID), 'medium'); ?>

	<a href="<?php echo get_permalink($mix[0]->ID); ?>"><img src="<?php echo $mix_image[0]; ?>" /></a>
	<span>more mixes on our <a href="https://soundcloud.com/6am-at-the-garage">soundcloud</a></span>
<?php } ?>
</div>