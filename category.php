<?php get_header(); ?>
<?php

	$category = get_the_author_meta('display_name', get_query_var('author'));
	$category = get_query_var('category_name'); //('display_name', get_query_var('author'));
	$category = get_category_by_slug(get_query_var('category_name'));
	//print_r($category);
	//$author_description = get_the_author_meta('description', get_query_var('description')); 


?>
<div class="row">
	<div class="small-12 large-12 column">
		<div class="category-title">
			<h4><?php echo $category->cat_name; ?></h4>
			<?php if($category->category_description != '' || !is_null($category->category_description)){ ?>
				<p><?php echo $category->category_description; ?></p>
			<?php  } ?>
		</div>
	</div>
</div>
<div class="row">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="small-12 medium-6 large-4 columns end">
				<a href="<?php the_permalink(); ?>" class="article">
					<article>
						<?php $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'medium'); ?>
					<div class="featured-image" style="background-image:url('<?php echo $thumb[0]; ?>');"></div>
					<div class="category"><?php $category = get_the_category(); echo $category[0]->name; ?></div>
					<div class="meta">
						<div class="date"><?php the_date('j M'); ?></div>
						<div class="author"><?php the_author(); ?></div>
					</div>
					<div class="title"><h5><?php the_title(); ?></h5></div>
					</article>
				</a>
			</div>
		<?php endwhile; ?>
		<?php else : ?>
			<?php echo "Not Found"; ?>
	<?php endif;?>
</div>
<div class="row pagination-row">
	<?php if ( function_exists( 'foundationpress_pagination' ) ) { foundationpress_pagination(); } else if ( is_paged() ) { ?>
		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
		</nav>
	<?php } ?>
</div>
<?php get_footer(); ?>
