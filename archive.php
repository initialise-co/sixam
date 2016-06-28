<?php get_header(); ?>
<div class="row">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="small-12 medium-6 large-4 columns">
				<a href="<?php the_permalink(); ?>" class="article">
					<article>
					<div class="featured-image" style="background-image:url('<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>');"></div>
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