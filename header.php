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
		<div class="header">
			<div class="logo-container">
				<div class="true-header">
					<div class="left-header">
						<div class="main-logo">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="">
							<a href=""></a>
						</div>
						</div>
						<div class="right-header">
							<ul class="main-table"><?php wp_nav_menu( [
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
									'items_wrap'      => '<li class="menu-item ">%3$s</li>',
									'depth'           => 0,
									'walker'          => '',
								] );; ?>
							</ul>
					</div>
				</div>

			<div class="bottom-header">
				<div class="bottom-header-left">
					<h1 class="main-title yellow-color">Делаем в срок Делаем ок</h1>
				</div>
				<div class="bottom-header-right">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/main-fish.png" alt="" class="main-fish">
				</div>

			</div>
			<div class="bottom-bottom-header">
				<p class="not-main-p yellow-color standart-font title-size">Адепты честности в мире бизнеса и IT.</p>
			</div>
			</div>
