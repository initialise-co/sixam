<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>
<?php get_header( 'shop' ); ?>
<div class="row">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="small-12 medium-6 large-4 columns end">
				<a href="<?php the_permalink(); ?>" class="article">
					<?php //wc_get_template_part( 'content', 'product' ); ?>
					<article>
					<div class="featured-image" style="background-image:url('<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>');"></div>
					<?php woocommerce_template_single_price(); ?>
					<div class="title"><h5><?php the_title(); ?></h5></div>
					</article>
				</a>
			</div>
		<?php endwhile; // end of the loop. ?>
			<?php //echo "No Products at this time"; ?>
	<?php endif; ?>
</div>
<?php get_footer( 'shop' ); ?>
