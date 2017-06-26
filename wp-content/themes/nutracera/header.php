<?php
/**
 * Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta name="viewport" content="width=device-width; initial-scale=1.0">

<title><?php wp_title( '|', TRUE,'right' ); bloginfo( 'name' ); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url') ?>/inc/css/combined.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url') ?>/inc/css/combined.css" />


<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
-->
<?php wp_head(); ?>

<script src="<?php bloginfo('template_url') ?>/inc/js/combined.js"></script>
<script src="<?php bloginfo('template_url') ?>/inc/js/featherlight.js"></script>
<script src="<?php bloginfo('template_url') ?>/inc/js/wow.min.js"></script>
<script src="https://use.typekit.net/qan1ikz.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
<script>new WOW().init();</script>
</head>

<body <?php body_class(); ?>>
	<div class="top-header-wrap">
		<div class="specials-wrap">
			<div class="inner-wrap">
				<a href="#">Special Deal <span>Buy 1 get one free</span></a>
			</div><!-- .inner-wrap -->
		</div><!-- .specials-wrap -->
		<div class="main-header">
			<div class="logo">
				<a href="<?php bloginfo('url') ?>"><img src="<?php bloginfo('template_url') ?>/images/logo.jpg" alt="logo" width="226" height="108"></a>
			</div><!-- .logo -->
			<div class="main-nav-wrap">
					
					<?php wp_nav_menu( array('menu' => 'Main Navigation') ); ?>
					<div class="mobile-menu-toggle-wrap" style="display: none">
						
						<a class="mainmenu-overlay-toggle" href=""><span>MENU</span><img src="<?php bloginfo('template_url') ?>/images/mobile-menu-icon.jpg" alt="mobile-menu-icon" width="37" height="17"></a>
					</div><!-- mobile-menu-toggle-wrap -->
				
				
				<div class="search-box">
					<?php get_search_form(); ?>
				</div>
			</div><!-- .main-nav -->
			<div class="cart-wrap">
				<a class="cart-items" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><span class="cart-count-wrap"><?php echo sprintf ( _n( '<span class="cart-item-count">%d</span>', '<span class="cart-item-count">%d</span>', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?><img src="<?php bloginfo('template_url') ?>/images/icon-shopping-cart.png"/></span> <?php echo WC()->cart->get_cart_total(); ?></a>
				<a class="view-cart-header" href="<?php bloginfo('url') ?>/cart">VIEW CART</a>
			</div><!-- .cart-wrap -->
		</div><!-- .main-header -->
	</div><!-- .top-header-wrap -->
	<div class="hero-banner">
		<?php if ( is_front_page() ) { ?>
			
			<div class="slider-wrap">
				
				<?php if( have_rows('slider') ): ?>
					<?php $counter = 1;?>
					<?php while( have_rows('slider') ): the_row(); ?>
						<?php $slider_image = get_sub_field('homepage_slider_image'); ?>
            <div class="slider-item class_<?php echo $counter;?> <?php the_sub_field('homepage_slider_align_content'); ?>" style="background:url(<?php echo $slider_image['url']; ?>) no-repeat;">
        			<div class="slide-inner-wrap">
	        			<?php if(get_sub_field('homepage_slider_h2')) { ?>
									<h2><?php the_sub_field('homepage_slider_h2'); ?></h2>
								<?php } ?>
								<?php if(get_sub_field('homepage_slider_h1')) { ?>
									<h1><?php the_sub_field('homepage_slider_h1'); ?></h1>
								<?php } ?>
								<?php if(get_sub_field('homepage_slider_button_text')) { ?>
									<a class="button-green" href="<?php the_sub_field('homepage_slider_button_link'); ?>"><?php the_sub_field('homepage_slider_button_text'); ?></a>
								<?php } ?>
							</div><!-- .slide-inner-wrap -->
						</div><!-- .slider-item -->
						<?php $counter++;?>  
					<?php endwhile; ?>
				<?php endif; ?>	
				
				
			</div><!-- .slider-wrap -->
		<?php	} elseif ( is_page_template( 'page_templates/template-page-aboutus.php' )  ) { ?>
			<img src="<?php bloginfo('template_url') ?>/images/placeholder-1920x590.png" alt="placeholder-1920x590" width="1920" height="590">
			
		<?php	} elseif ( is_page_template( 'page_templates/template-page-what-is-amicen.php'  ) || is_page_template( 'page_templates/template-page-how-it-works.php' )|| is_page_template( 'page_templates/template-page-how-to-take.php' )) { ?>
		<div class="bg-wrap" style="background: url(<?php bloginfo('template_url') ?>/images/about-us-inner-banner.jpg)">
			<div class="inner-banner-wrap">
				<div class="left wow fadeInLeft">
					<?php $banner_image = get_field('banner_image'); ?>
					<img src="<?php echo $banner_image['url']; ?>" alt="amicen-product" width="308" height="375">
				</div><!-- left -->
				<div class="right wow fadeIn">
					<h1><?php the_field('banner_h1'); ?></h1>
					<h2><?php the_field('banner_h2'); ?></h2>
					<?php if(get_sub_field('banner_button_link')) { ?>
						<a class="button-green smooth-scroll" href="<?php the_field('banner_button_link'); ?>"><?php the_field('banner_button_text'); ?></a>
					<?php } else { ?>
						<a class="button-green smooth-scroll" href="#featured-product"><?php the_field('banner_button_text'); ?></a>
					<?php } ?>
					
				</div><!-- right -->
			</div><!-- inner-banner-wrap -->
		</div>
		<?php } else { ?>
			<?php $hero_banner_image = get_field('hero_banner_image'); ?>
			<?php if(get_field('hero_banner_image')) { ?>
				<img src="<?php echo $hero_banner_image['url'] ?>" alt="<?php echo $hero_banner_image['url'] ?>" width="1920" height="590">
			<?php } ?>
		<?php } ?>
		
		
		
	</div><!-- .hero-banner -->
	
		
		
		
		
		
		
		
		
		
		
		
