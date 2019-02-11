<?php
/**
 * Template Name: QR
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package University_Lab_Partners
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section id="contactForm">
				<div class="container">
					<div class="row">
						<div class="col-md-8">

							<h2>QR Code</h2>



						</div>
						<div class="col-md-4">
							<?php get_sidebar(); ?>
						</div>
					</div>

				</div>
			</section>

			<section id="researchPark" class="container-fluid">
				<div class="row">
					<div class="col-lg-6 col-md-6 aboutIntroSliderContainer">

						<?php

						$images = get_field('facility_feature_gallery');

						if( $images ): ?>
							<div class="aboutIntroSlider">
					        <?php foreach( $images as $image ): ?>
					        	<div class="aboutIntroSliderItem" style="background-image: url(<?php echo $image['sizes']['large']; ?>);">
	                  </div>
					        <?php endforeach; ?>
					    </div>
						<?php endif; ?>

					</div>
					<div class="col-lg-4 col-md-6 p-4">

						<h2><?php the_field('facility_feature_title'); ?></h2>
						<div class="headingSpacer"></div>
						<?php the_field('facility_feature_text'); ?>
						<p><a href="<?php echo site_url(); ?>/facility/" class="button cta">Our Facility</a></p>
					</div>
					<div class="col-lg-2 d-none d-lg-block">

					</div>
				</div>
			</section>



			<section id="footMap">
				<div id="map-canvas"></div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
