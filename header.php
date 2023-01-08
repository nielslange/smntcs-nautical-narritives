<?php
/**
 * The template file to display the header of the SMNTCS Retro theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage SMNTCS_Retro
 * @since 1.0.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" >
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<header id="site-header">
	<div id="header-title">
		<?php smntcs_nautical_narratives_site_title(); ?>
	</div><!-- #header-title -->

	<nav id="header-menu">
		<?php smntcs_nautical_narratives_menu( 'primary' ); ?>
	</nav><!-- #header-menu -->
</header>
