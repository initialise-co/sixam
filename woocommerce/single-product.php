<?php
/**
 * The Template for displaying all single products.
 *
 * Override this template by copying it to yourtheme/woocommerce/single-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

	<?php
		/**
		 * woocommerce_before_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		//do_action( 'woocommerce_before_main_content' );
	?>
<div class="row">
	<?php while ( have_posts() ) : the_post(); ?>
		<div class="small-12 medium-6 columns">
			<div class="product-image" style="background-image:url('<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>');"></div>

			<?php //wc_get_template_part( 'content', 'single-product' ); ?>
		</div>
		<div class="small-12 medium-6 columns">
			<?php woocommerce_template_single_title(); ?>
			<?php the_content(); ?>
			<?php woocommerce_template_single_add_to_cart(); ?>
		</div>
		<?php endwhile; // end of the loop. ?>
</div>
	<?php
		/**
		 * woocommerce_after_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		//do_action( 'woocommerce_after_main_content' );
	?>

	<?php
		/**
		 * woocommerce_sidebar hook
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		//do_action( 'woocommerce_sidebar' );
	?>

<?php get_footer( 'shop' ); ?>
