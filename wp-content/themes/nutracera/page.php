<?php
/**
 * Template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		<div class="general-container">
			<div class="inner-wrap">

			<?php
			/*
			 * Run the loop to output the page.
			 * If you want to overload this in a child theme then include a file
			 * called loop-page.php and that will be used instead.
			 */
			get_template_part( 'loop', 'page' );
			?>
<!--
			<div class="widget-area">
			<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('widgetized-area')) : else : ?>
			
			<div class="pre-widget">
				<p><strong>Widgetized Area</strong></p>
				<p>This panel is active and ready for you to add some widgets via the WP Admin</p>
			</div>

			<?php endif; ?>
-->
			</div>
			</div><!-- #content -->
		</div><!-- #container -->

<?php get_footer(); ?>
