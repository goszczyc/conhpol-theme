<!DOCTYPE html>
<html lang="<?= language_code(); ?>">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		<?php
		if (is_archive()) {
			echo 'Blog';
		} else {
			echo get_the_title();
		}
		?>
	</title>
	<link rel="apple-touch-icon" sizes="57x57" href="<?= get_template_directory_uri(); ?>/dist/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?= get_template_directory_uri(); ?>/dist/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?= get_template_directory_uri(); ?>/dist/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?= get_template_directory_uri(); ?>/dist/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?= get_template_directory_uri(); ?>/dist/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?= get_template_directory_uri(); ?>/dist/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?= get_template_directory_uri(); ?>/dist/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?= get_template_directory_uri(); ?>/dist/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?= get_template_directory_uri(); ?>/dist/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="<?= get_template_directory_uri(); ?>/dist/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?= get_template_directory_uri(); ?>/dist/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?= get_template_directory_uri(); ?>/dist/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?= get_template_directory_uri(); ?>/dist/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?= get_template_directory_uri(); ?>/dist/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="format-detection" content="telephone=no">
	<meta name="theme-color" content="#ffffff">
	<?php wp_head(); ?>


</head>


<body <?php body_class(); ?>>

	<?php
	$map_page_id = apply_filters('wpml_object_id', 367);
	?>

	<header class="header header--sub">
		<div class="container">
			<div class="header__top">
				<a href="<?= esc_url(home_url()); ?>">
					<?php $logo_name = (is_home()) ? 'logo-white.svg' : 'logo-black.svg'; ?>
					<img src="<?= get_template_directory_uri(); ?>/dist/images/<?= $logo_name; ?>" alt="" class="header__logo">
				</a>
				<button class="header__burger">
					<div class="header__burger-bar"></div>
				</button>
				<nav class="header__burger-menu">
					<div class="header__main-menu">
						<div class="header__lang-menu">
							<?php language_selector(); ?>
						</div>
						<?php wp_nav_menu($args = array(
							'container' => 'false',
							'menu' => 17,
							'menu_class' => 'header__main-menu'
						)); ?>
					</div>
					<div class="header__icons">
						<a href="<?= esc_url(get_permalink(get_page_by_title('mapa'))); ?>" class="header__map-link header__icon">
							<?php get_template_part('/components/geo-tag'); ?>
						</a>
						<?= get_search_form(); ?>
					</div>
				</nav>
			</div>
			<nav class="header__bottom">
				<div class="header__main-menu">
					<div class="header__lang-menu">
						<?php language_selector(); ?>
					</div>
					<?php wp_nav_menu($args = array(
						'container' => 'false',
						'menu' => 17,
						'menu_class' => 'header__main-menu'
					)); ?>
				</div>
				<div class="header__icons">
					<a href="<?= esc_url(get_permalink($map_page_id)); ?>" class="header__map-link header__icon">
						<?php get_template_part('/components/geo-tag'); ?>
					</a>
					<?= get_search_form(); ?>
				</div>
			</nav>
		</div>
	</header>