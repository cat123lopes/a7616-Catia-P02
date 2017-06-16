<?php
/**
* The header for our theme
*
* This is the template that displays all of the <head> section and everything up until <div id="content">
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package wp_theme
*/

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Part Time Travelers</title>

	<link rel="profile" href="http://gmpg.org/xfn/11">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/css/libs/bootstrap.min.css">

	<link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/css/libs/jquery.fullPage.css">

	<link rel="stylesheet" type="text/css" href="<?php bloginfo("template_directory"); ?>/style.css"/>


	<link rel="stylesheet" type="text/css" href="<?php bloginfo("template_directory"); ?>/css/estilos.css"/>

	<?php wp_head(); ?>



</head>

<body <?php body_class(); ?>>

	<div class="vertical-text hidden-xs">
		<h3><a href="http://localhost:8888/wordpress/#content/">PART TIME TRAVELERS</a></h3></div>



		<div id="page" class="site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp_theme' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="container">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>


				</div><!-- .site-branding -->


				<header id="page-header">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<div class="menu-content text-right">
									<nav>
										<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
									</nav><!-- #site-navigation -->
								</div>
							</div>
						</div>
					</div>
				</header>
			</header><!-- #masthead -->





			<div id="content" class="site-content">
