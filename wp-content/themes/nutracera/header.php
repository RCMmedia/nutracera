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
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title( '|', TRUE,'right' ); bloginfo( 'name' ); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url') ?>/inc/css/combined.css" />

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
-->
<?php wp_head(); ?>

<script src="<?php bloginfo('template_url') ?>/inc/js/combined.js"></script>
<script src="https://use.typekit.net/qan1ikz.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
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
				<div class="search-box">
					<img src="<?php bloginfo('template_url') ?>/images/search-mock.jpg" alt="search-mock" width="228" height="25">
				</div>
			</div><!-- .main-nav -->
			<div class="cart-wrap">
				<a class="cart-items" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><span class="cart-count-wrap"><?php echo sprintf ( _n( '<span class="cart-item-count">%d</span>', '<span class="cart-item-count">%d</span>', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?><img src="<?php bloginfo('template_url') ?>/images/icon-shopping-cart.png"/></span> <?php echo WC()->cart->get_cart_total(); ?></a>
				<a class="view-cart-header" href="">VIEW CART</a>
			</div><!-- .cart-wrap -->
		</div><!-- .main-header -->
	</div><!-- .top-header-wrap -->
	<div class="hero-banner">
		<?php if ( is_front_page() ) { ?>
			
			<div class="slider-wrap">
				<div class="slider-item" style="background:url(<?php bloginfo('template_url') ?>/images/banner.jpg) no-repeat;">
					<div class="slide-inner-wrap">
						<h2>LOREM IPSUM DOLOR</h2>
						<h1>LOREM IPSUM DO</h1>
						<a class="button-green" href="#">BUY NOW</a>
					</div><!-- .slide-inner-wrap -->
				</div><!-- .slider-item -->
				<div class="slider-item">
					<img src="<?php bloginfo('template_url') ?>/images/banner.jpg" alt="banner" width="1920" height="702">
				</div><!-- .slider-item -->
			</div><!-- .slider-wrap -->
		<?php	} elseif ( is_page_template( 'page_templates/template-page-aboutus.php' )  ) { ?>
			<img src="<?php bloginfo('template_url') ?>/images/placeholder-1920x590.png" alt="placeholder-1920x590" width="1920" height="590">
			
		<?php	} elseif ( is_page_template( 'page_templates/template-page-what-is-amicen.php' )  ) { ?>
		<div class="bg-wrap" style="background: url(<?php bloginfo('template_url') ?>/images/about-us-inner-banner.jpg)">
			<div class="inner-banner-wrap" >
				<div class="left">
					<img src="<?php bloginfo('template_url') ?>/images/amicen-product.png" alt="amicen-product" width="308" height="375">
				</div><!-- left -->
				<div class="right">
					<h1>Looking for a NATURAL, DRUG-FREE approach to support focus, attention and learning?</h1>
					<h2>COGNITIVE ENHANCING NUTRIENT</h2>
					<a class="button-green" href="#">Try Amicen Today</a>
				</div><!-- right -->
			</div><!-- inner-banner-wrap -->
		</div>
		<?php } else { ?>
			<img src="<?php bloginfo('template_url') ?>/images/placeholder-1920x590.png" alt="placeholder-1920x590" width="1920" height="590">
		<?php } ?>
		
		
		
	</div><!-- .hero-banner -->
	
		
		
		
		
		
		
		
		
		
		
		
