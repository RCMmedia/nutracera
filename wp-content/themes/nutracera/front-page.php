<?php get_header(); ?>

<div class="welcome-wrap">
	<div class="inner-wrap flex-wrap">
		<div class="left  wow fadeInLeft">
			<?php $nutracera_kids = get_field('welcome_image'); ?>
			<img src="<?php echo $nutracera_kids['url']; ?>" />
		</div><!-- .left -->
		<div class="right wow fadeInRight">
			<?php if(get_field('welcome_big_title')) { ?>
				<div class="bg-title wow fadeInRight"><?php the_field('welcome_big_title'); ?></div>
			<?php } ?>
			
			<h3 class="section-title"><?php the_field('welcome_title'); ?></h3>
			<?php the_field('welcome_content'); ?>
			<?php if(get_field('welcome_button_link')) { ?>
				<a class="button-green" href="<?php the_field('welcome_button_link'); ?>"><?php the_field('welcome_button_text'); ?></a>
			<?php } ?>
			
		</div><!-- .right -->
	</div><!-- .inner-wrap -->
</div><!-- .welcome-wrap -->

<div class="kids-wrap">
	<div class="inner-wrap flex-wrap">
		<div class="left wow fadeInLeft">
			<h3 class="section-title">NUTRACERA <span>K</span><span>i</span><span>d</span><span>s</span></h3>
			<?php the_field('nutracera_kids_content'); ?>
			<a class="button-green border-only" href="<?php bloginfo('url'); ?>/what-is-amicen/">Learn More<span> &#9654;&#xFE0E;</span></a> <span>OR</span>
			<a class="button-green border-only smooth-scroll" href="#featured-product-wrap">Buy Now<span> &#9654;&#xFE0E;</span></a>
			
		</div><!-- .left -->
		<div class="right wow fadeInRight">
			<?php $nutracera_kids = get_field('nutracera_kids_image'); ?>
			<img src="<?php echo $nutracera_kids['url']; ?>" />
		</div><!-- .right -->
	</div><!-- .inner-wrap -->
</div><!-- .kids-wrap -->

<div id="featured-product-wrap" class="featured-product-wrap">
	<div class="inner-wrap flex-wrap">
		<div class="left wow fadeIn" data-wow-delay=".4s">
			<?php query_posts(array( 'post_type' => 'product', 'showposts' => 1 ));?>
			<?php while (have_posts()) : the_post(); ?>
			<div class="bg-title wow fadeInLeft" data-wow-delay=".4s"><?php the_field('alternate_title'); ?></div>
				<h3 class="section-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
				<?php
					global $product;
        $product = get_product( get_the_ID() ); //set the global product object
					echo wc_price($product->get_price_including_tax(1,$product->get_price()));
 				?>
<!-- 				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(80,80)); ?></a> -->
				<div class="product-content"><?php echo get_the_content(); ?></div>
				<div class="more-info-wrap">
					<?php $supplament_facts_image = get_field('supplement_facts'); ?>
					<a class="button-product supplement" data-featherlight="<?php echo $supplament_facts_image['url']  ?>" href="#">Supplement Facts</a>
					<a class="button-product download" href="<?php the_field('download_pdf'); ?>" target="_blank" >DOWNLOAD TITLE</a>
				</div>
				 <?php woocommerce_template_loop_add_to_cart( $post, $_product );?>
				 <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->post->ID ), 'single-post-thumbnail' );?>
			<?php endwhile;?>
			<?php wp_reset_query(); // reset the query ?>
			
			<div class="disclaimer">
				* These statements have not been evaluated by the Food and Drug Administration.
This product is not intended to diagnose, treat, cure or prevent any disease.
			</div><!-- disclaimer -->
			
			
		</div><!-- .left -->
		<div class="right wow fadeInRight" data-wow-delay=".4s">
	    <img src="<?php  echo $image[0]; ?>" data-id="<?php echo $loop->post->ID; ?>">
		</div><!-- .right -->
	</div><!-- .inner-wrap -->
</div><!-- .kids-wrap -->
<?php if (get_field("testimonials_show_hide") == "show"): ?>

<div class="testimonial-wrap flex-wrap wow fadeIn">

		<div class="left">
			
			
		</div><!-- .left -->
		<div class="right">
			<div class="testi-quote-left"><img src="<?php bloginfo('template_url') ?>/images/testi-quote-left.png" alt="testi-quote-left" width="48" height="39" /></div>
			<div class="testimonial-slider" data-cycle-slides="> div.testimonial-item" data-cycle-prev="#cycle-prev" data-cycle-next="#cycle-next" >
				<?php query_posts(array( 'post_type' => 'testimonial', 'showposts' => 5 ));?>
			<?php while (have_posts()) : the_post(); ?>
				<div class="testimonial-item">
					<div class="testimonial-name">
						<?php the_title(); ?>
					</div><!-- testimonial-name -->
					<div class="testimonial-content">
						
						<?php the_content(); ?>				
					</div><!-- testimonial-content -->
				</div><!-- testimonial-item -->
			<?php endwhile;?>
			<?php wp_reset_query(); // reset the query ?>
				
				<div class="testi-slider-nav-wrap">
					<div id="cycle-prev" class="cycle-prev">
						<img src="<?php bloginfo('template_url') ?>/images/testi-slider-left.png" alt="testi-slider-left" width="12" height="19" />
					</div>
					<a class="button">
						View All
					</a><!-- .button -->
					<div id="cycle-next" class="cycle-next">
						<img src="<?php bloginfo('template_url') ?>/images/testi-slider-right.png" alt="testi-slider-right" width="12" height="19" />
					</div>
				</div><!-- testi-slider-nav-wrap -->
			</div><!-- .testimonail-slider -->
			
			<div class="testi-quote-right"><img src="<?php bloginfo('template_url') ?>/images/testi-quote-right.png" alt="testi-quote-right" width="48" height="39" /></div>
		</div><!-- .right -->
</div><!-- .testimonials-wrap -->
<?php endif; ?>

<div class="blog-feed-wrap">

	<div class="inner-wrap">
		<h3 class="section-title">LATEST NEWS</h3>
		<div class="blog-feed">
			<div class="left wow fadeInUp">

					<?php $blog_set1_query = new WP_Query( array('order' => 'ASC','posts_per_page' => 3, 'offset' => '2'  ) ); while($blog_set1_query->have_posts()) : $blog_set1_query->the_post(); 
						
						$image = get_field('single_post_featured_image');
					?>
						
					<div <?php post_class('wow fadeIn'); ?> id="post-<?php the_ID(); ?>" >
						<div class="post-date">
							<div class="post-day"><?php the_time('d') ?></div>
							<div class="post-month"><?php the_time('M') ?></div>
						</div>
						<a class="link-controller" href="<?php the_permalink(); ?>" style="background:linear-gradient(rgba(0, 0, 0, 0.45), rgba(0, 0, 0, 0.45)), url(<?php echo $image['url']; ?>) no-repeat center center / cover">
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
						</a>
						<div class="copy-wrap">
							<h3 class="entry-title"><?php the_title(); ?></h3>
							<?php the_excerpt(''); ?>
						</div><!-- copy-wrap -->
						
					</div><!-- post -->
					<?php endwhile; ?>
					<?php wp_reset_postdata(); // reset the query ?>


			</div><!-- left -->
			<div class="right wow fadeInUp" data-wow-delay=".5s">

					<?php $blog_set2_query = new WP_Query( array('order' => 'ASC','posts_per_page' => 2 ) ); while($blog_set2_query->have_posts()) : $blog_set2_query->the_post(); 
						
						$image = get_field('single_post_featured_image');
					?>

					<div <?php post_class('wow fadeIn'); ?> id="post-<?php the_ID(); ?>" >
						<div class="post-date">
							<div class="post-day"><?php the_time('d') ?></div>
							<div class="post-month"><?php the_time('M') ?></div>
						</div>
						<a class="link-controller"  href="<?php the_permalink(); ?>" style="background:linear-gradient(rgba(0, 0, 0, 0.45), rgba(0, 0, 0, 0.45)),url(<?php echo $image['url']; ?>) no-repeat center center / cover">
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
						</a>
						<div class="copy-wrap">
							<h3 class="entry-title"><?php the_title(); ?></h3>
							<?php the_excerpt(''); ?>
						</div><!-- copy-wrap -->
						
					</div><!-- post -->
					<?php endwhile; ?>
					<?php wp_reset_postdata(); // reset the query ?>
					

			</div><!-- right -->
			
		</div><!-- blog-feed -->
		<div class="view_blog_wrap">
				<a href="<?php bloginfo('url') ?>/"><span>VIEW ALL NEWS</span><span>></span></a>
			</div>
	</div><!-- inner-wrap -->

</div><!-- blog-feed-wrap -->
<div class="question-footer">
	<div class="left wow fadeInLeft">
		<div class="inner">
			<img src="<?php bloginfo('template_url') ?>/images/nutracera-logo-sm.png" alt="nutracera-logo-sm" width="90" height="90" />
			<h3>HAVE A QUESTION?</h3>
			<h4>Let us know how we can help you!</h4>
			<a class="contact-us-overlay-toggle" href="#">CONTACT US</a>
		</div><!-- .inner -->
	</div><!-- left -->
	<div class="right wow fadeInUp">
		<img src="<?php bloginfo('template_url') ?>/images/qustion-right-bg.png" alt="qustion-right-bg" width="1109" height="588" />
	</div><!-- right -->
</div><!-- .question-footer -->


<script>
		
	var copy_wrap_p = jQuery('.blog-feed .left .post:first-child p');
	copy_wrap_p.html(copy_wrap_p.text().substring(0,215) + '... <a class="read-more" href="">READ MORE</a>');
	
	var copy_wrap_p2 = jQuery('.blog-feed .left .post:nth-child(2) p');
	copy_wrap_p2.html(copy_wrap_p2.text().substring(0,50) + '... <a class="read-more" href="">READ MORE</a>');
	
	var copy_wrap_p3 = jQuery('.blog-feed .left .post:nth-child(3) p');
	copy_wrap_p3.html(copy_wrap_p3.text().substring(0,50) + '... <a class="read-more" href="">READ MORE</a>');
	
	var copy_wrap_p4 = jQuery('.blog-feed .right .post:first-child p');
	copy_wrap_p4.html(copy_wrap_p4.text().substring(0,156) + '... <a class="read-more" href="">READ MORE</a>');
	
	var copy_wrap_p5 = jQuery('.blog-feed .right .post:last-child p');
	copy_wrap_p5.html(copy_wrap_p5.text().substring(0,105) + '... <a class="read-more" href="">READ MORE</a>');
	
	jQuery('.type-post').each(function(){
		var copy_wrap_p_ = jQuery(this).find('.link-controller').attr('href');
		jQuery(this).find('.read-more').attr('href', copy_wrap_p_);
	});
	

</script>












<?php get_footer(); ?>
