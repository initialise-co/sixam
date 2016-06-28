<!doctype html> 
<html class="no-js" <?php language_attributes(); ?> >
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<?php if(is_single()){ ?>
		<?php get_template_part('parts/facebook-meta-article'); ?>
	<?php }else{ ?>
		<?php get_template_part('parts/facebook-meta-website'); ?>
	<?php } ?>
	<title>6AM AT THE GARAGE</title>
	<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-144x144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-precomposed.png">
	<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,500,600,700' rel='stylesheet' type='text/css'>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<header>
	<div class="row top">
		<div class="small-12 medium-4 medium-offset-4 columns logo-column">
			<a class="logo" href="<?php echo home_url(); ?>"><?php //bloginfo( 'name' ); ?></a>
		</div>
	</div>
<div class="menu-row">
	<div class="row small-collapse">
		<div class="small-12 medium-6 columns">
			<?php wp_nav_menu(array('theme_location' => 'main-nav', 'container' => false, 'container_class' => '', 'menu' => 'order', 'menu_class' => 'simple-main-menu', 'walker' => new Foundationpress_Top_Bar_Walker)); ?>
			<?php //if(wp_is_mobile()){ ?>
				
			<?php //} ?>
			<div class="search-container">
				<form method="GET" action="/">
					<input type="text" name="s" placeholder="Search">
				</form>
			</div>
		</div>
		
		<div class="small-12 medium-6 columns end">
			
			<div class="header-social">
				<a class="" href="https://instagram.com/six_am_at_the_garage/" target="_blank"><i class="fa fa-instagram"></i></a>
				<a class="" href="https://www.facebook.com/sixamatthegarage/" target="_blank"><i class="fa fa-facebook-official"></i></a>
				<a class="" href="https://soundcloud.com/6am-at-the-garage" target="_blank"><i class="fa fa-soundcloud"></i></a>
				<a class="" href=""><i class="fa fa-youtube-play" target="_blank"></i></a>
				<a class="shop-link" href="http://shop.sixamatthegarage.com">💰<span>Shop</span></a>
			</div>
		</div>
	</div>
	<div class="sixam-container">
		<a class="sixam" href="<?php echo site_url(); ?>">6am at the Garage</a>
	</div>
</div>
<script type="text/javascript">
	$(function(){
		var mobile_menu_down = 0;
		var search_form = 0;

		var sub_menu_down = 0;
		var sub_menu_down = 0;
		var sub_menu_down = 0;

		$('.menu-dropdown').on('click', function(){
			if(mobile_menu_down === 0){
				$('.menu-container').css({ display : 'inline-block' });
				mobile_menu_down = 1;
			}else{
				$('.menu-container').css({ display : 'none' });
				mobile_menu_down = 0;
			}
		});

		$('.has-dropdown').on('click', function(e){
			if($(e.target).parent().hasClass('has-dropdown')){
				e.preventDefault();
			
			if($(this).hasClass('menu-down')){
				$(this).removeClass('menu-down');
			}else{
			
				$(this).addClass('menu-down');
			}
			}
		});

		$('.search-button').on('click', function(e){
			e.preventDefault();
			if(search_form === 0) {
				$('.search-container').css({display: 'block'});
				search_form = 1;
			}else{
				$('.search-container').css({display: 'none'});
				search_form = 0;
			}
		});
	});

</script>
</header>
<section class="container" role="document">
