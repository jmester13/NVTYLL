<?php
/**
 * Sidebar Template
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Scaffolding
 * @since Scaffolding 1.0
 */
?>

<?php // Test for active sidebars to set sidebar classes
if ( is_active_sidebar( 'left-sidebar' ) && is_active_sidebar( 'right-sidebar' ) ) : //both sidebars
	$left_class = 'col-sm-3 col-sm-pull-6';
	$right_class = 'col-sm-3';
elseif ( is_active_sidebar( 'left-sidebar' ) && !is_active_sidebar( 'right-sidebar' ) ) : //left sidebar
	$left_class = 'col-sm-3 col-sm-pull-9';
elseif ( !is_active_sidebar( 'left-sidebar' ) && is_active_sidebar( 'right-sidebar' ) ) : //right sidebar
	$right_class = 'col-sm-3';
	elseif ( is_active_sidebar( 'footer-sidebar' ) && !is_active_sidebar( 'right-sidebar' ) ) : //right sidebar
	$footer_class = 'col-sm-12';
endif;
?>

<?php if ( is_active_sidebar( 'left-sidebar' ) ) : ?>
	<div id="left-sidebar" class="sidebar col-sm-3 clearfix" role="complementary">
	<?php dynamic_sidebar( 'left-sidebar' ); ?>
	</div>
<?php endif; ?>

<?php if ( is_active_sidebar( 'right-sidebar' ) ) : ?>
	<div id="right-sidebar" class="sidebar col-sm-3 clearfix" role="complementary">
	<?php dynamic_sidebar( 'right-sidebar' ); ?>
	</div>
	<?php endif; ?>

<?php if ( is_active_sidebar( 'footer-sidebar' ) ) : ?>
	<div id="footer-sidebar" class="sidebar <?php echo $footer_class; ?> clearfix" role="complementary">
	<?php dynamic_sidebar( 'footer-sidebar' ); ?>
	</div>

<?php endif;
