<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="row">
	<?php if(in_category('photo') || in_category('video')){ ?><div class="small-12 large-12 columns photos" role="main"><?php }else{ ?><div class="small-12 large-8 columns" role="main"><?php } ?>


	<?php while ( have_posts() ) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<div class="entry-links">
					<?php get_template_part('parts/category', 'breadcrumbs'); ?>
					<div class="share"></div>
				</div>
				<div class="entry-meta">
					<span>Article by </span><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a><span> <?php the_date('jS M Y'); ?></span>
				</div>
				
			</header>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
				
			</footer>
		</article>
	<?php endwhile;?>

	<?php do_action( 'foundationpress_after_content' ); ?>

	</div>
	<?php if(in_category('photo') || in_category('video')){ get_template_part('parts/full-width-newsletter'); }else{ get_sidebar(); } ?>
</div>
<?php if(in_category('photo')){ ?> 
<script type="text/javascript">

	$('.category-photo a').on('click', function(e){
		if($(e.target).is('img')){
			e.preventDefault();
			
			$('#photo-modal').empty();
			$(e.target).clone().appendTo('#photo-modal');
			$('#photo-modal').foundation('reveal', 'open', {
				animation: 'fade',
  				animation_speed: 180,
  				close_on_background_click: true,
			});

			$(document).on('open.fndtn.reveal', '#photo-modal[data-reveal]', function(){
				if($(window).height() > $(window).width()){
					$('#photo-modal img').css('opacity', '0');
				}
			});

			$(document).on('opened.fndtn.reveal', '#photo-modal[data-reveal]', function(){
				if($(window).height() > $(window).width()){
					$('#photo-modal').css({
						'position'		: 'fixed',
						'top'			: '50%',
						'left'			: '50%',
						'marginTop' 	: '-' + $('#photo-modal img').height() / 2 + 'px',
						'marginLeft' 	: '-' + $('#photo-modal img').width() / 2 + 'px',
					});
					$('#photo-modal img').delay(20).animate({ opacity : '1'}, 250);
				}
			});

			$('#photo-modal').foundation('reflow');

		}

	});

</script>
<?php } ?>
<?php get_footer(); ?>

