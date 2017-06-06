<?php
/**
 * Template Name: How it Works
 */

get_header(); ?>

			<div class="breadcrumb-wrap">
				<ul>
					<li><a href="">WHAT IS AMICEN?</a></li>
					<li class="active"><a href="">How it works?</a></li>
					<li><a href="">How to Take?</a></li>
				</ul>
			</div><!-- breadcrumb-wrap -->
		
		<div class="how-it-works-wrap">

				<div class="section step-one">
					<div class="inner-wrap">
					<div class="left">
						<div class="step-icon">
							<img src="<?php bloginfo('template_url') ?>/images/step-1.png" alt="step-1" width="49" height="49" />
						</div><!-- step-icon -->
						<div class="copy-wrap">
							<img src="<?php bloginfo('template_url') ?>/images/nutracera-logo-sm.png" alt="nutracera-logo-sm" width="90" height="90" />
							<h3>How it works</h3>
							<p>Amicen contains specific amino acids that assist in the production of dopamine, serotonin and norepinephrine. These neurotransmitters play an important role in behavior, cognition, motor activity, sleep, mood, attention, concentration and learning. Stimulant medications work by driving up either dopamine or norepinedrine, leaving serotonin depleted. This can lead to mood disorders, anxiety and other symptoms. Balancing neurotransmitters is crucial for mood and attention.  </p>
							<p>The key is <span>BALANCE!</span></p>
						</div><!-- copy-wrap -->
					</div><!-- left -->
					<div class="right">
						<img src="<?php bloginfo('template_url') ?>/images/up-next.jpg" alt="up-next" width="434" height="434" />
					</div><!-- right -->
					</div><!-- .inner-wrap -->
				</div><!-- section -->
				
				<div class="section step-two">
					<div class="inner-wrap">
						<div class="left">
							<img src="<?php bloginfo('template_url') ?>/images/step-2-molecules.png" alt="step-2-molecules" width="709" height="485" />
						</div>
						<div class="right">
							<div class="step-icon">
								<img src="<?php bloginfo('template_url') ?>/images/step-2.png" alt="step-1" width="49" height="49" />
							</div><!-- step-icon -->
							<div class="copy-wrap">
								<img src="<?php bloginfo('template_url') ?>/images/step-2-molecules-sm.png" alt="nutracera-logo-sm" width="90" height="90" />
								<h3>Bullet 2 Title</h3>
								<p>Supports the body’s methylation process necessary for numerous chemical reactions to occur, such as making neurotransmitters. Methylation deficiency may be one of the causes of ADHD symptoms.  The methylated form of folic acid (methylfolate) is essential in the conversion of tyrosine to dopamine. </p>
							</div><!-- .copy-wrap -->
						</div><!-- .right -->
					</div><!-- .inner-wrap -->
				</div><!-- .section -->
				
				<div class="section step-three">
					<div class="inner-wrap">
						
						<div class="left">
							<div class="step-icon">
								<img src="<?php bloginfo('template_url') ?>/images/step-3.png" alt="step-1" width="49" height="49" />
							</div><!-- step-icon -->
							<div class="copy-wrap">
								<img src="<?php bloginfo('template_url') ?>/images/step-3-amoeba.png" alt="step-3-amoeba" width="106" height="75" />
								<h3>Bullet 3 Title</h3>
								<p>Supports the body’s methylation process necessary for numerous chemical reactions to occur, such as making neurotransmitters. Methylation deficiency may be one of the causes of ADHD symptoms.  The methylated form of folic acid (methylfolate) is essential in the conversion of tyrosine to dopamine. </p>
							</div><!-- .copy-wrap -->
						</div><!-- .right -->
						<div class="right">
							<img src="<?php bloginfo('template_url') ?>/images/step-3-cell.jpg" alt="step-3-cell" width="692" height="553" />
						</div><!-- left -->
					</div><!-- .inner-wrap -->
				</div><!-- .section -->
				
				<div class="section step-four">
					<div class="inner-wrap">
						
						<div class="left">
							<div class="step-icon">
								<img src="<?php bloginfo('template_url') ?>/images/step-4.png" alt="step-1" width="49" height="49" />
							</div><!-- step-icon -->
							<div class="copy-wrap">
								<img src="<?php bloginfo('template_url') ?>/images/step-4-sheild.png" alt="step-4-sheild" width="82" height="80" />
								<h3>Bullet 4 Title</h3>
								<p>Provides anti-oxidant support aiding the body to excrete toxins and reduce oxidative stress.   
</p>
							</div><!-- .copy-wrap -->
						</div><!-- .right -->
						<div class="middle">
							<img src="<?php bloginfo('template_url') ?>/images/step-4-bottle.png" alt="step-4-bottle" width="288" height="568" />
						</div><!-- middle -->
						<div class="right">
							<div class="step-icon">
								<img src="<?php bloginfo('template_url') ?>/images/step-5.png" alt="step-1" width="49" height="49" />
							</div><!-- step-icon -->
							<div class="copy-wrap">
								<img src="<?php bloginfo('template_url') ?>/images/step-5-brain.png" alt="step-5-brain" width="70" height="79" />
								<h3>Bullet 5 Title</h3>
								<p>Supports healthy memory, concentration,
attention span, as well as cognitive functions.</p>
							</div><!-- .copy-wrap -->
						</div><!-- right -->
					</div><!-- .inner-wrap -->
				</div><!-- .section -->
				
			
		</div><!-- .how-it-works-wrap -->
		
		
		<?php $temp_url = get_template_directory() ?>
		<?php include(''.$temp_url.'/inc/modules/up-next.php') ?>
		
		<?php include(''.$temp_url.'/inc/modules/featured-product.php') ?>
		

<?php get_footer(); ?>
