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
						<h3 class="green-underline">How TO TAKe AMicen</h3>
						<p>Amicen is a concentrated powder formula that mixes with any liquid.  For best results, amino acids should be taken apart from food to ensure proper absorption and uptake by the brain.  Some of the ingredients have a build-up effect, so therapeutic results may take up to two months before symptoms resolve.</p>
						
						<h4>DIRECTIONS</h4>
						
						<p>It’s best to start out slow and gradually increase until the recommended dosage is reached.  Take 20 minutes before or 20-30 minutes after a meal.</p>
						
						<p>Under the age of 8:</p>
						
						<p>Over the age of 8:</p> 
						
						<h4>Warnings</h4>
						
						<p>If you have Hyperthyroidism or Graves disease, medical supervision is recommended.</p>
						
						<p>If currently on any medications, it’s best to discuss with your physician before taking.</p>
						<div class="disclaimer">
							 * These statements have not been evaluated by the Food and Drug Administration. This p roduct is not intended to diagnose, treat, cure or prevent any disease. 
						</div>
					</div><!-- copy-wrap -->
					<div class="image-wrap">
						<img src="<?php bloginfo('template_url') ?>/images/how-to-take-image.png" alt="how-to-take-image" width="794" height="529" />
					</div><!-- image-wrap -->
				</div><!-- inner-wrap -->
				
  

			</div><!-- how-to-take-wrap -->
		
		
		<?php include(''.$temp_url.'/inc/modules/featured-product.php') ?>
		<script>
			jQuery('body.page-template-template-page-how-to-take li:last-child').addClass('active');
		</script>

<?php get_footer(); ?>
