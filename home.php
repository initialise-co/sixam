<?php get_header(); ?>
<div class="row">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php //get_template_part( 'content', get_post_format() ); ?>
			<?php //get_template_part( 'content', get_post_format() ); ?>
		<?php endwhile; ?>
		<?php else : ?>
			
			<?php echo "Not Found"; ?>
	<?php endif;?>
</div>
<?php get_footer(); ?>
