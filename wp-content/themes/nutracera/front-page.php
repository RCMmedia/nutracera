<?php get_header(); ?>

<div class="welcome-wrap">
	<div class="inner-wrap flex-wrap">
		<div class="left">
			<img src="<?php bloginfo('template_url') ?>/images/placeholder-1.png" />
		</div><!-- .left -->
		<div class="right">
			<div class="bg-title">ADHD THERAPY</div>
			<h3 class="section-title">WELCOME TO NUTRACERA!</h3>
			<p>As a health and wellness supplement company, our goal is to educate and offer alternative approaches for better health by providing nutraceutical therapies.</p>

			<p>Our story began when the founder recognized a market need for an effective, non-pharmaceutical formulation for children with ADHD symptoms.  Nutracera has taken a special interest in amino acid formulations due to their proven effectiveness and importance in cognitive function and many health-related conditions, including ADHD.</p>
			<a class="button-green" href="#">Learn More</a>
		</div><!-- .right -->
	</div><!-- .inner-wrap -->
</div><!-- .welcome-wrap -->

<div class="kids-wrap">
	<div class="inner-wrap flex-wrap">
		<div class="left">
			<h3 class="section-title">NUTRACERA <span>K</span><span>i</span><span>d</span><span>s</span></h3>
			<p>As a health and wellness supplement company, our goal is to educate and offer alternative approaches for better health by providing nutraceutical therapies.</p>

			<p>Our story began when the founder recognized a market need for an effective, non-pharmaceutical formulation for children with ADHD symptoms.  Nutracera has taken a special interest in amino acid formulations due to their proven effectiveness and importance in cognitive function and many health-related conditions, including ADHD.</p>
			<a class="button-green border-only" href="#">Learn More<span> &#9654;</span></a> <span>OR</span>
			<a class="button-green border-only" href="#">Buy Now<span> &#9654;</span></a>
			
		</div><!-- .left -->
		<div class="right">
			<img src="<?php bloginfo('template_url') ?>/images/kids-image.png" />
		</div><!-- .right -->
	</div><!-- .inner-wrap -->
</div><!-- .kids-wrap -->

<div class="featured-product-wrap">
	<div class="inner-wrap flex-wrap">
		<div class="left">
			<?php query_posts(array( 'post_type' => 'product', 'showposts' => 1 ));?>
			<?php while (have_posts()) : the_post(); ?>
			<div class="bg-title"><?php the_field('alternate_title'); ?></div>
				<h3 class="section-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
				<?php
					global $product;
        $product = get_product( get_the_ID() ); //set the global product object
					echo wc_price($product->get_price_including_tax(1,$product->get_price()));
 				?>
<!-- 				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(80,80)); ?></a> -->
				<div class="product-content"><?php echo get_the_content(); ?></div>
				<div class="more-info-wrap">
					<a class="button-product supplement" href="#">Supplement Facts</a>
					<a class="button-product download" href="#">DOWNLOAD TITLE</a>
				</div>
				 <?php woocommerce_template_loop_add_to_cart( $post, $_product );?>
				 <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->post->ID ), 'single-post-thumbnail' );?>
			<?php endwhile;?>
			
			<div class="disclaimer">
				* These statements have not been evaluated by the Food and Drug Administration.
This product is not intended to diagnose, treat, cure or prevent any disease.
			</div><!-- disclaimer -->
			
			
		</div><!-- .left -->
		<div class="right">
			

    <img src="<?php  echo $image[0]; ?>" data-id="<?php echo $loop->post->ID; ?>">
		</div><!-- .right -->
	</div><!-- .inner-wrap -->
</div><!-- .kids-wrap -->

<div class="testimonial-wrap flex-wrap">

		<div class="left">
			
			
		</div><!-- .left -->
		<div class="right">
			<div class="testi-quote-left"><img src="<?php bloginfo('template_url') ?>/images/testi-quote-left.png" alt="testi-quote-left" width="48" height="39" /></div>
			<div class="testimonial-slider" data-cycle-slides="> div.testimonial-item" >
				<div class="testimonial-item">
					<div class="testimonial-name">
						Name
					</div><!-- testimonial-name -->
					<div class="testimonial-content">
						
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in. culpa qui officia deserunt mollit anim n proident, sunt in culpa n proident, sunt in culpa culpa n proide 					
					</div><!-- testimonial-content -->
				</div><!-- testimonial-item -->
				<div class="testimonial-item">
					<div class="testimonial-name">
						Name
					</div><!-- testimonial-name -->
					<div class="testimonial-content">
						La lalalalalala La lalalalalalaLa lalalalalalaLa lalalalalalaLa lalalalalalaLa lalalalalalaLa lalalalalalaLa lalalalalalaLa lalalalalalaLa lalalalalalaLa lalalalalalaLa lalalalalalaLa lalalalalalaLa lalalalalalaLa lalalalalalaLa lalalalalalaLa lalalalalala 					
					</div><!-- testimonial-content -->
				</div><!-- testimonial-item -->
				<div class="testi-slider-nav-wrap">
					<div class="cycle-prev">
						<img src="<?php bloginfo('template_url') ?>/images/testi-slider-left.png" alt="testi-slider-left" width="12" height="19" />
					</div>
					<a class="button">
						View All
					</a><!-- .button -->
					<div class="cycle-next">
						<img src="<?php bloginfo('template_url') ?>/images/testi-slider-right.png" alt="testi-slider-right" width="12" height="19" />
					</div>
				</div><!-- testi-slider-nav-wrap -->
			</div><!-- .testimonail-slider -->
			
			<div class="testi-quote-right"><img src="<?php bloginfo('template_url') ?>/images/testi-quote-right.png" alt="testi-quote-right" width="48" height="39" /></div>
		</div><!-- .right -->
</div><!-- .kids-wrap -->

<div class="blog-feed-wrap">
<!-- 	placeholder for blog -->
</div>
<div class="question-footer">
	<div class="left">
		<div class="inner">
			<img src="<?php bloginfo('template_url') ?>/images/nutracera-logo-sm.png" alt="nutracera-logo-sm" width="90" height="90" />
			<h3>HAVE A QUESTION?</h3>
			<h4>Let us know how we can help you!</h4>
			<a href="">CONTACT US</a>
		</div><!-- .inner -->
	</div><!-- left -->
	<div class="right">
		<img src="<?php bloginfo('template_url') ?>/images/qustion-right-bg.png" alt="qustion-right-bg" width="1109" height="588" />
	</div><!-- right -->
</div><!-- .question-footer -->



<?php get_footer(); ?>
