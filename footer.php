</section>
<div id="popup-modal" class="reveal-modal" data-reveal>
<?php
	global $popup;
	$popup = get_posts(array('post_type' => 'popup', 'posts_per_page' => 1, 'orderby' => 'menu_order'));
	$popup_type = get_post_meta($popup[0]->ID, 'popup_type', true); 

	if($popup_type == 'image'){
		get_template_part('parts/popup', 'image');
	}

	if($popup_type == 'newsletter'){
		get_template_part('parts/popup', 'newsletter');

	}

	if($popup_type == 'code'){
		get_template_part('parts/popup', 'code');
	}
	global $popup_image;
?>
</div>
<div id="photo-modal" class="reveal-modal" data-reveal></div>
<script type="text/javascript">

	$(window).on('load', function(){
		if(typeof $.cookie('popup') === 'undefined'){
			var popup = <?php echo json_encode($popup_image); ?>;
			$('#popup-modal').foundation('reveal', 'open');

			$('a.close-button').on('click', function(){
				$('#popup-modal').foundation('reveal', 'close');
			});

			$.cookie('popup', '0', { expires: 1, path: '/' });
		}
	});

</script>
<footer>
	<?php 
		//Events Poster Functionality
		//get_template_part("parts/events"); 
	?>
	<div class="footer-main">
		<div class="row">
			<div class="small-12 medium-up-6 column">
				<?php wp_nav_menu(array('theme_location' => 'footer', 'container' => false, 'container_class' => '', 'menu' => '', 'menu_class' => 'footer-menu')); ?>
			</div>
			<div class="small-12 medium-up-4 column">
			</div>
			

		</div>
	</div>
	<div class="footer-bottom">
		<div class="row">
			<div class="small-12 medium-up-6 column copyright">
				<!--<p>6AM AT THE GARAGE is a music blog run out of Melbourne, Australia</p>-->
				<!--<p>Get Interested 🍳</p>-->
				<p>Copyright © <?php echo date('Y'); ?> Six AM at the Garage</p>
			</div>
		</div> 
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
