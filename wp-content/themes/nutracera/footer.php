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
		<div class="col title">
			<strong>NUTRACERA</strong>
		</div><!-- col -->
		<div class="col">
			<?php wp_nav_menu( array('menu' => 'Footer Nav Left') ); ?>
		</div><!-- col -->
		<div class="col title">
			<strong>PRODUCTS</strong>
		</div><!-- col -->
		<div class="col">
			<?php wp_nav_menu( array('menu' => 'Footer Nav Right') ); ?>
		</div><!-- col -->
		<div class="col mobile-fullwidth" style="display: none;">
			<strong>JOIN OUR EMAIL LIST</strong>
			<?php echo do_shortcode('[gravityform id="2" title="false" description="false" ajax="true"]'); ?>
		</div><!-- col -->
		<div class="col mobile-fullwidth" style="display: none;">
			<strong>FOLLOW US</strong>
			<a href="" target="_blank">Facebook</a>
			<a href="" target="_blank">Twitter</a>
			<a href="" target="_blank">Instagram</a>
		</div><!-- col -->

		
	</div><!-- inner-wrap -->
</div><!-- #footer -->
<div class="copyright">
	<div class="inner-wrap">
		<img src="<?php bloginfo('template_url') ?>/images/nutracera-logo-sm.png" alt="nutracera-logo-sm" height="41" /> <span>NUTRACERA ALL RIGHTS RESERVED 2017</span><img src="<?php bloginfo('template_url') ?>/images/RCM-logo.jpg" alt="RCM-logo" width="189" height="30" />
	</div>
</div>

<div class="overlay-wrap contact-us">
	<div class="overlay-inner-wrap">
		<a class="close-button contact-us"></a>
		<h3 class="section-title">Contact Us</h3>
		<p>Short blurb about contacting us</p>
		<?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); ?>
	</div><!-- overlay-inner-wrap -->
</div><!-- overlay-wrap -->
	
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
  $(".searchform #s").after("<img class='search-icon' src='<?php bloginfo('template_url') ?>/images/search-icon.jpg' />");

  $('#s').attr('placeholder', 'Search');
  $('#menu-main-navigation').addClass('desktop');
  
  //contact-us-overlay
  $('.contact-us-overlay-toggle').on('click', function() {
	  $('.overlay-wrap.contact-us').addClass('active');
	  $(this).find('.close-button.contact-us').show();
	  return false;
  });
  $('.close-button.contact-us').on('click', function() {
	  $('.overlay-wrap.contact-us').removeClass('active');
	  $(this).hide();
	  return false;
  });
  
  //mobile-menu
  $('.menu-main-navigation-container').prepend('<a class="close-button main-nav" style="display:none"></a>');
  $('.mainmenu-overlay-toggle').on('click', function() {
	  $('.close-icon.contact-us').show();
	  $('.menu-main-navigation-container').addClass('active mobile');
	  $('#menu-main-navigation').removeClass('desktop');
	  $('.main-nav-wrap .close-button').show();
	  return false;
  });
  $('li.menu-item-has-children').on('click', function() {
	  $(this).find('.sub-menu').slideToggle();
	  
  });
  $('body').on('click','.close-button.main-nav',function(){
	  $(this).hide();
	  $('.menu-main-navigation-container.mobile').removeClass('active');
	  return false;
  });
  $('.search-icon').on('click', function() {
	  $('#s').toggleClass('mobile-toggle');
	  
  });
  
  
  
  //smooth scrolling
  var $root = $('html, body');
	$('.smooth-scroll').click(function() {
	    var href = $.attr(this, 'href');
	    $root.animate({
	        scrollTop: $(href).offset().top
	    }, 500, function () {
	        window.location.hash = href;
	    });
	    return false;
	});
	

	function onBefore(cycle) {        
  $(this).children("slide-inner-wrap").delay(300).animate({marginLeft:"35%"}, 1500);
};

function onAfter(cycle) {        
  $(this).children("section.text").delay(1300).animate({marginLeft:"-1400px"}, 1400);
};
  $( '.slide-wrap' ).on( 'cycle-next', function(event, optionHash) {
    $('.slide-inner-wrap').addClass('fuckers');
});


});




</script>
<?php if( in_array( $_SERVER['REMOTE_ADDR'], array( '::1' ) ) ) { ?>
<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
<?php } ?>
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
