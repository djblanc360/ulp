<?php
/**
 * Template Name: Apply Now
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package University_Lab_Partners
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section id="applyIntro" class="container">

				<div class="applyIntroInner text-center">
					
					<h2>Apply for Membership</h2>
					<?php
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content', 'page' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>

					<div class="row">
						<div class="col-sm-3">
							<div class="applyStepContainer">
								<img src="<?php the_field('step_1_img'); ?>">
								<h3><?php the_field('step_1'); ?></h3>
								<?php the_field('step_1_description'); ?>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="applyStepContainer">
								<img src="<?php the_field('step_2_img'); ?>">
								<h3><?php the_field('step_2'); ?></h3>
								<?php the_field('step_2_description'); ?>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="applyStepContainer">
								<img src="<?php the_field('step_3_img'); ?>">
								<h3><?php the_field('step_3'); ?></h3>
								<?php the_field('step_3_description'); ?>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="applyStepContainer">
								<img src="<?php the_field('step_4_img'); ?>">
								<h3><?php the_field('step_4'); ?></h3>
								<?php the_field('step_4_description'); ?>
							</div>
						</div>
					</div>

				</div>

			</section>

			<section id="applyForm">
				<div class="container">
					<h2 class="text-center">Apply for Membership with ULP</h2>

					<div class="applyFormContainer p-3 p-lg-5 mb-4">
						<!-- <?php echo do_shortcode('[contact-form-7 id="221" title="Application Form"]'); ?> -->
						<h3 class="text-center">Please check back soon.</h3><p class="text-center">Taking applications beginning January 2019.</p>
					</div>

				</div>
			</section>

			<section id="applySeeMore" style="background-image: url(<?php the_field('see_more_bg'); ?>);">
				<div class="applySeeMoreInner text-center container">
					<h2><?php the_field('see_more_title'); ?></h2>
						<?php the_field('see_more_description'); ?>
						<p><a href="<?php echo site_url(); ?>/contact/" class="button cta">Contact Us</a></p>
				</div>
			</section>

			<section id="footMap">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3321.3968078332755!2d-117.85684278496062!3d33.64687878071812!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dcde1587012cb7%3A0x2d277442e1a4333b!2sUCI+Research+Park!5e0!3m2!1sen!2sus!4v1539899408112" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
