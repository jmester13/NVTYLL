<?php
/**
 * Footer Template
 *
 * Contains the closing of the "main" div and all content after.
 *
 * @package Scaffolding
 * @since Scaffolding 1.0
 */
?>

					</div><?php // END #main ?>

				</div><?php // END .row ?>

			</div><?php // END #inner-content ?>

		</div><?php // END #content ?>

		<footer id="colophon" class="footer" role="contentinfo">

			<div id="inner-footer" class="wrap clearfix">

					<?php dynamic_sidebar( 'footer-sidebar' ); ?>

				<div id="footer-nav" class="col-sm-12"><nav role="navigation" aria-label="<?php _e( 'Footer Navigation', 'scaffolding' ); ?>">

					<?php scaffolding_footer_nav(); ?>

				</nav></div>

				<p class="col-sm-12 source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> 
				| Designed & Developed by <a href="http://joemester.com/" target="_blank"> Joe Mester </a> </p>

			</div>

		</footer>

		<p id="back-top">
			<a href="#top"><i class="fa fa-angle-up"></i></a>
		</p>

	</div><?php // END #container ?>

<?php
wp_footer();
?>

</body>
</html>