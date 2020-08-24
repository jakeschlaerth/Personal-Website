<?php
/**
 * Jake Schlaerth
 *
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title(''); ?></title>
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/style.css" media="screen">	
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/jquery.mmenu.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/animate.css">
	<link href="https://fonts.googleapis.com/css?family=Abel|Montserrat" rel="stylesheet">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/font-awesome/css/font-awesome.min.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class() ?> >
	<div class="wrapper">

	<header>
		<div class="shadow">
			<div class="wrap">

				<!-- mobile menu -->
				<a class="three mobile-menu-toggle" href="#mobile-menu">&#9776;</a>

				<a class="header-title" href="<?php bloginfo('url'); ?>"><h1><?php bloginfo('name'); ?></h1><!--<img src="<?php header_image(); ?>" class="header-img" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />--></a>

				<nav id="main-menu">
					<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
				</nav> <!-- end of #main-menu -->

				<div class="hide" id="mobile-menu">
					<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
				</div><!-- end of .hide #mobile-menu -->

				<div id="slidemenu"></div>

				<div class="divider"></div>

			</div> <!-- end of .wrap -->
		</div>
	</header>
