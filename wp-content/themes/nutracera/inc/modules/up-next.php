<div id="up-next" class="up-next">
	<div class="inner-wrap">
		<div class="left wow fadeInLeft">
			<?php $up_next_image = get_field('up_next_image')?>
			<img src="<?php echo $up_next_image['url']; ?>" alt="<?php echo $up_next_image['alt']; ?>" width="434" height="434" />
		</div><!-- left -->
		<div class="right wow fadeIn" data-wow-delay=".3s">
			<h3>UP NEXT</h3>
			<h4><?php the_field('up_next_title'); ?></h4>
			<?php the_field('up_next_content'); ?>
			<a class="button-blue" href="<?php the_field('up_next_button_link'); ?>"><?php the_field('up_next_button_text'); ?></a>
		</div><!-- right -->
	</div>
</div><!-- up-next -->