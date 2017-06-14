<div class="featured-product-module">
	<div class="inner-wrap flex-wrap">
		<div class="left" style="background: url(<?php bloginfo('template_url') ?>/images/product-helper1.jpg)">
			
			<img src="<?php bloginfo('template_url') ?>/images/product-helper1.jpg" alt="product-helper1" width="742" height="698" />
			
		</div><!-- .left -->
		<div class="right">
				<?php query_posts(array( 'post_type' => 'product', 'showposts' => 1 ));?>
				<?php while (have_posts()) : the_post(); ?>
			<div class="bg-title"><?php the_field('alternate_title'); ?></div>
			
			<div class="product-info">
			
				
					
					<h3 class="section-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
					<?php
						global $product;
      	  $product = get_product( get_the_ID() ); //set the global product object
						echo wc_price($product->get_price_including_tax(1,$product->get_price()));
 					?>
<!-- 					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(80,80)); ?></a> -->
					<div class="product-content"><?php echo get_the_excerpt(); ?></div>
					<div class="more-info-wrap">
						<a class="button-product supplement" href="#">Supplement Facts</a>
						<a class="button-product download" href="#">DOWNLOAD TITLE</a>
					</div>
					 <?php woocommerce_template_loop_add_to_cart( $post, $_product );?>
					 <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->post->ID ), 'single-post-thumbnail' );?>
				<?php endwhile;?>
				<div class="disclaimer">
					* These statements have not been evaluated by the Food and Drug Administration.
This p	roduct is not intended to diagnose, treat, cure or prevent any disease.
				</div><!-- disclaimer -->
			</div>
			<div class="image-box">
				<img src="<?php  echo $image[0]; ?>" data-id="<?php echo $loop->post->ID; ?>">
			</div>
			

    
		</div><!-- .right -->
	</div><!-- .inner-wrap -->
</div><!-- .kids-wrap -->