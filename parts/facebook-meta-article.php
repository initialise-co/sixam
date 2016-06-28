<meta property="fb:app_id"  content="645808212223931"/>
<meta property="og:title" content="<?php echo get_the_title(); ?>" />
<meta property="og:type" content="article" />
<?php if(has_post_thumbnail($post->ID)){ ?>
	<?php $facebook_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' ); ?>
	<meta property="og:image" content="<?php echo $facebook_image[0]; ?>" />
<?php }else{ ?>
	<meta property="og:image" content="<?php echo site_url().'/wp-content/themes/sixam/assets/images/6amHead.png'; ?>" />
<?php } ?>
<meta property="og:url" content="<?php echo get_permalink($post->ID); ?>" />
<meta property="og:description" content="<?php echo get_excerpt_by_id($post->ID); ?>" />