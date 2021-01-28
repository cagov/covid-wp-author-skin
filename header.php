<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package alpha
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" type="text/css" href="https://staging.covid19.ca.gov/css/build/built.css">
	<link href="https://california.azureedge.net/cdt/statetemplate/6.0.0/css/cagov.font-only.min.css" rel="stylesheet" />
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'alpha' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
		</div><!-- .site-branding -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
