<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Southern Small
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
	<div id="content" class="container">
		<h1 class="text-center">Small Living with a Southern Twist<br /><small>One couple's journey to simplify their world</small></h1>
		<?php    /**
			* Displays a navigation menu
			* @param array $args Arguments
			*/
			$args = array(
				'theme_location' => 'header-menu',
				'menu' => 'main',
				'container' => 'nav',
				'container_class' => 'menu-{menu-slug}-container',
				'container_id' => '',
				'menu_class' => 'menu',
				'menu_id' => 'header-menu',
				'echo' => true,
				'fallback_cb' => 'wp_page_menu',
				'before' => '',
				'after' => '',
				'link_before' => '',
				'link_after' => '',
				'items_wrap' => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
				'depth' => 0,
				'walker' => ''
			);
		
			wp_nav_menu( $args ); ?>
