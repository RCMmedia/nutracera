<?php
/**
 * Template Name: What is Amicen
 */

get_header(); ?>

		<?php $directory_url = get_template_directory() ?>
		<?php include(''.$directory_url.'/inc/modules/amicen-nav.php') ?>
		<div class="about-amicen">
			<div class="inner-wrap">
				<div class="left wow fadeInLeft">
					<h3><?php the_field('block_one_title'); ?></h3>
					<?php the_field('block_one_content'); ?>
				</div><!-- left -->
				<div class="right wow fadeInRight">
					<?php $right_image = get_field('block_two_image'); ?>
					<img src="<?php echo $right_image['url'] ?>" alt="<?php echo $right_image['alt'] ?>" width="355" height="416" />
					<div class="copy">
						<?php the_field('block_two_textarea'); ?>
					</div><!-- .copy -->
					<a href="#featured-product-wrap" class="button-green smooth-scroll"><?php the_field('block_two_button_text'); ?></a>
				</div><!-- right -->
				<div class="image-wrap wow fadeInUp">
					<img src="<?php bloginfo('template_url') ?>/images/kids-group-image.jpg" alt="kids-group-image" width="619" height="412" />
				</div><!-- image-wrap -->
			</div><!-- inner-wrap -->
		</div><!-- about-amicen -->
		
		
		<?php include(''.$directory_url.'/inc/modules/up-next.php') ?>
		
		<?php include(''.$directory_url.'/inc/modules/featured-product.php') ?>
		
		<script>
			jQuery('body.page-template-template-page-what-is-amicen li:first-child').addClass('active');
		</script>
		


<?php get_footer(); ?>
