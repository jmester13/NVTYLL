<?php
/**
 * Header Template
 *
 * @see http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Scaffolding
 * @since Scaffolding 1.0
 *
 */ ?><!DOCTYPE html>
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

<!--[if lt IE 9]>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv-printshiv.min.js"></script>
<![endif]-->

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<div id="container">

		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'scaffolding' ); ?></a>

		<nav id="main-navigation" class="clearfix" role="navigation" aria-label="<?php _e( 'Primary Navigation', 'scaffolding' ); ?>">

			<?php scaffolding_main_nav(); ?>

		</nav>

		<?php // Interior Header Image ?>
		<div class="banner-wrap">
			<div id="banner">
				<?php do_action('slideshow_deploy', '119'); ?>
			</div>
		</div>

		<div id="content">

			<div id="inner-content" class="wrap clearfix">

				<div class="row">

					<div id="main" class="col-sm-12 clearfix" role="main">
