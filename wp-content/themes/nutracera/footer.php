<?php
/**
 * Template for displaying the footer
 *
 * Contains the closing of the id=main div and all content
 * after. Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>


<div class="footer-wrap">
	<div class="inner-wrap">
		<div class="col">
			<strong>NUTRACERA</strong>
		</div><!-- col -->
		<div class="col">
			<?php wp_nav_menu( array('menu' => 'Footer Nav Left') ); ?>
		</div><!-- col -->
		<div class="col">
			<strong>PRODUCTS</strong>
		</div><!-- col -->
		<div class="col">
			<?php wp_nav_menu( array('menu' => 'Footer Nav Right') ); ?>
		</div><!-- col -->
		<div class="col">
			<strong>JOIN OUR EMAIL LIST</strong>
		</div><!-- col -->
		<div class="col">
			<strong>FOLLOW US</strong>
		</div><!-- col -->
		
	</div><!-- inner-wrap -->
</div><!-- #footer -->
<div class="copyright">
	<div class="inner-wrap">
		<img src="<?php bloginfo('template_url') ?>/images/nutracera-logo-sm.png" alt="nutracera-logo-sm" height="41" /> <span>NUTRACERA ALL RIGHTS RESERVED 2017</span><img src="<?php bloginfo('template_url') ?>/images/RCM-logo.jpg" alt="RCM-logo" width="189" height="30" />
	</div>
</div>
	
	
<script>
	
jQuery(document).ready(function($) {
  $('.slider-wrap').slick({
	  dots:true
  });
/*
  $('.testimonial-item').slick({
	  dots:true
  });
*/
  $('.testimonial-slider').cycle();
  
  var sticky = new Waypoint.Sticky({
  	element: $('.main-header')[0]
	})
  $('form.cart .button')
});


</script>

<?php
	/*
	 * Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
