<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header id="site-header" class="site-header" role="banner">
	<div class="container">
		<div class="site-logo-wrap">
			<?php if ( get_theme_mod( 'directory_theme_logo' ) ) : ?>
				<div class='site-logo'>
					<a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'directory_theme_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
				</div>
			<?php else : ?>
				<hgroup>
					<h1 class='site-title'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h1>
					<h2 class='site-description'><?php bloginfo( 'description' ); ?></h2>
				</hgroup>
			<?php endif; ?>
		</div>
		<nav id="primary-nav" class="primary-nav" role="navigation">
			<?php wp_nav_menu(array(
				'container' => false,
				'theme_location' => 'primary-menu',
			)); ?>
		</nav>
	</div>
</header>