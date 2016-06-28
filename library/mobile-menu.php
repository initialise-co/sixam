<?php 

	add_filter('wp_nav_menu_items','add_mobile_menu', 10, 2);

	function add_mobile_menu($items, $args){
		if($args->theme_location == 'main-nav'){
			$menu = $items;
			$items = "<li class=\"mobile-li\"><a href=\"#\" class=\"menu-dropdown\"><i class=\"fa fa-bars\"></i></a></li>";
			$items .= 	"<div class=\"menu-container\">
							<div class=\"list-container\">".$menu."</div>";
			//if(wp_is_mobile()){
				//adds the social icons to the Mobile menu
				$items .=
					"<li class=\"mobile-social\">
						<ul class=\"mobile-social-list\">
							<li><a href=\"".site_url()."\"><i class=\"fa fa-home\"></i></a></li>
							<li><a class=\"search-button\" href=\"#\"><p>🔎</p></a></li>
							<li><a class=\"\" href=\"https://instagram.com/six_am_at_the_garage/\"><i class=\"fa fa-instagram\"></i></a></li>
							<li><a class=\"\" href=\"https://www.facebook.com/sixamatthegarage/\"><i class=\"fa fa-facebook-official\"></i></a></li>
							<li><a class=\"\" href=\"https://soundcloud.com/6am-at-the-garage\"><i class=\"fa fa-soundcloud\"></i></a></li>
							<li><a class=\"\" href=\"\"><i class=\"fa fa-youtube-play\"></i></a></li>
							<li><a class=\"shop-link\" href=\"http://shop.sixamatthegarage.com\"><p>💰</p></a></li>
							<li></li>

						</ul>
					</li>
				";
			//}
			$items .= "</div>";

		}
		return $items;
	}

?>