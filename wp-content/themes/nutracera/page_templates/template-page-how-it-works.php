<?php
/**
 * Template Name: How it Works
 */

get_header(); ?>

		<?php $temp_url = get_template_directory() ?>
		<?php include(''.$temp_url.'/inc/modules/amicen-nav.php') ?>
		
		<div class="how-it-works-wrap">

				<div class="section step-one">
					<div class="inner-wrap">
					<div class="left wow fadeIn" data-wow-delay=".3s">
						<div class="copy-wrap">
							<h3>
								<div class="step-logo">
									<?php $block_one_small_icon = get_field('block_one_small_icon'); ?>
										<img src="<?php echo $block_one_small_icon['url'] ?>" alt="<?php echo $block_one_small_icon['alt'] ?>"  />
								</div>
								<img class="step-icon" src="<?php bloginfo('template_url') ?>/images/step-1.png" alt="step-1" width="49" height="49" />
								<?php the_field('block_one_title'); ?>
							</h3>
							<?php the_field('block_one_content'); ?>
							
						</div><!-- copy-wrap -->
					</div><!-- left -->
					<div class="right wow fadeInRight">
						<?php $block_one_image = get_field('block_one_image'); ?>
						<img src="<?php echo $block_one_image['url'] ?>" alt="<?php echo $block_one_image['alt'] ?>" />
					</div><!-- right -->
					</div><!-- .inner-wrap -->
				</div><!-- section -->
				
				<div class="section step-two">
					<div class="inner-wrap">
						<div class="left wow fadeInLeft">
							<?php $block_two_image = get_field('block_two_image'); ?>
							<img src="<?php echo $block_two_image['url'] ?>" alt="<?php echo $block_two_image['alt'] ?>" />
						</div>
						<div class="right wow fadeIn" data-wow-delay=".3s">
								
							<div class="copy-wrap">
								
								<h3>
									<div class="step-logo">
										<?php $block_two_small_icon = get_field('block_two_small_icon'); ?>
										<img src="<?php echo $block_two_small_icon['url']; ?>" alt="<?php echo $block_two_small_icon['alt']; ?>"  />
									</div>
									<img class="step-icon" src="<?php bloginfo('template_url') ?>/images/step-2.png" alt="step-1" width="49" height="49" />
									<?php the_field('block_two_title'); ?>
								</h3>
								<?php the_field('block_two_textarea'); ?>
							</div><!-- .copy-wrap -->
						</div><!-- .right -->
					</div><!-- .inner-wrap -->
				</div><!-- .section -->
				
				<div class="section step-three">
					<div class="inner-wrap" >
						
						<div class="left wow fadeIn"  data-wow-delay=".3s">

							<div class="copy-wrap">
								<h3>
									<div class="step-logo">
										<?php $block_three_small_icon = get_field('block_three_small_icon'); ?>
										<img src="<?php echo $block_three_small_icon['url'] ?>" alt="<?php echo $block_three_small_icon['alt'] ?>"  />
									</div>
									<img class="step-icon" src="<?php bloginfo('template_url') ?>/images/step-3.png" alt="step-1" width="49" height="49" />
									<?php the_field('block_three_Title'); ?>
								</h3>
								<?php the_field('block_three_content'); ?>
							</div><!-- .copy-wrap -->
						</div><!-- .right -->
						<div class="right wow fadeInLeft">
							<?php $block_three_image = get_field('block_three_image'); ?>
							<img src="<?php echo $block_three_image['url'] ?>" alt="<?php echo $block_three_image['alt'] ?>" />
						</div><!-- left -->
					</div><!-- .inner-wrap -->
				</div><!-- .section -->
				
				<div class="section step-four">
					<div class="inner-wrap">
						
						<div class="left wow fadeInLeft">
							<div class="copy-wrap">
								<h3>
									<div class="step-logo">
										<?php $block_four_small_icon = get_field('block_4_small_icon'); ?>
										<img src="<?php echo $block_four_small_icon['url'] ?>" alt="<?php echo $block_four_small_icon['alt'] ?>"  />
									</div>
									<img class="step-icon" src="<?php bloginfo('template_url') ?>/images/step-4.png" alt="step-1" width="49" height="49" />
									<?php the_field('block_4_title'); ?>
								</h3>
								<?php the_field('block_4_content'); ?>
							</div><!-- .copy-wrap -->
						</div><!-- .right -->
						<div class="middle wow fadeInUp">
							<img src="<?php bloginfo('template_url') ?>/images/step-4-bottle.png" alt="step-4-bottle" width="288" height="568" />
						</div><!-- middle -->
						<div class="right wow fadeInRight">
							<div class="copy-wrap">
								<h3>
									<div class="step-logo">
										<?php $block_five_small_icon = get_field('block_5_small_icon'); ?>
										<img src="<?php echo $block_five_small_icon['url'] ?>" alt="<?php echo $block_five_small_icon['alt'] ?>"  />
									</div>
									<img class="step-icon" src="<?php bloginfo('template_url') ?>/images/step-5.png" alt="step-1" width="49" height="49" />
									<?php the_field('block_5_title'); ?>	
								</h3>
									<?php the_field('block_5_content'); ?>
							</div><!-- .copy-wrap -->
						</div><!-- right -->
					</div><!-- .inner-wrap -->
				</div><!-- .section -->
				
			
		</div><!-- .how-it-works-wrap -->
		
		
		
		<?php include(''.$temp_url.'/inc/modules/up-next.php') ?>
		
		<?php include(''.$temp_url.'/inc/modules/featured-product.php') ?>
		<script>
			jQuery('body.page-template-template-page-how-it-works li:nth-child(2)').addClass('active');
		</script>

<?php get_footer(); ?>
