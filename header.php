<!DOCTYPE html>
<html>
<!-- variable to js -->
<?php ff_landing_js_vars();?>
<head>
<link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.css">
<link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">

<script src="https://unpkg.com/swiper/js/swiper.js"></script>

<?php wp_head(); 
wp_enqueue_scripts();
?>

</head>
<body>
<header>
	<div class=main-container-menu>
	<header id="header" role="heading">
	<button class="hide_menu"></button>
	<nav class="resp-nav-bar">
	
			<h1 class="logo">FishFish</h1>
			<ul><?php wp_nav_menu( [
					'theme_location'  => '',
					'menu'            => '', 
					'container'       => 'ul', 
					'container_class' => 'main-menu', 
					'container_id'    => '',
					'menu_class'      => 'menu', 
					'menu_id'         => '',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul class="scroll-menu">%3$s</ul>',
					'depth'           => 0,
					'walker'          => '',
				] );; ?>
			</ul>
			
	</nav>


	<!--/Nav-->
</header>	
				



