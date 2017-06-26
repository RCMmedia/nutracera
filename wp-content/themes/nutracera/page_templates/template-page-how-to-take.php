<?php
/**
 * Template Name: How to Take
 */

get_header(); ?>

			<?php $temp_url = get_template_directory() ?>
			<?php include(''.$temp_url.'/inc/modules/amicen-nav.php') ?>
		
			<div class="how-to-take-wrap">
				<div class="inner-wrap">
					<div class="copy-wrap">
						<h3 class="green-underline"><?php the_field('block_one_title'); ?></h3>
						<?php the_field('block_one_content'); ?>
						
						<div class="disclaimer">
							 * These statements have not been evaluated by the Food and Drug Administration. This p roduct is not intended to diagnose, treat, cure or prevent any disease. 
						</div>
					</div><!-- copy-wrap -->
					<div class="image-wrap">
						<?php $block_two_image = get_field('block_two_image'); ?>
						<img src="<?php echo $block_two_image['url']; ?>" alt="<?php echo $block_two_image['alt']; ?>"  />
					</div><!-- image-wrap -->
				</div><!-- inner-wrap -->
				
  

			</div><!-- how-to-take-wrap -->
		
		
		<?php include(''.$temp_url.'/inc/modules/featured-product.php') ?>
		<script>
			jQuery('body.page-template-template-page-how-to-take li:last-child').addClass('active');
		</script>

<?php get_footer(); ?>
