<?php
/**
 * Template Name: Home
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package University_Lab_Partners
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section id="homeWelcome" class="container">

				<div class="row">
					<div class="col-sm-4">
						
						<img src="<?php echo site_url(); ?>/wp-content/themes/ulp/img/ulp-logo-color.png" alt="University Lab Partners at UC Irvine" class="ulp-welcome-logo mx-auto">

					</div>
					<div class="col-sm-8">

						<h1><?php the_title(); ?></h1>
						
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

					</div>
				</div>

			</section>

			<section id="homeFeatureThree" class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="homeFeatureContainer d-flex justify-content-center align-items-center" style="background-image: url(<? the_field('feature_1_bg_image'); ?>);">
							<div class="homeFeatureContainerInner text-center">
								<div class="homeFeatureIconContainer d-flex align-items-center justify-content-center">
									<?php the_field('feature_1_icon'); ?>
								</div>
								<h2><?php the_field('feature_1_title'); ?></h2>
								<?php the_field('feature_1_text'); ?>
								<p><a class="button cta" href="<?php the_field('feature_1_link'); ?>">Read More</a></p>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="homeFeatureContainer d-flex justify-content-center align-items-center" style="background-image: url(<? the_field('feature_2_bg_image'); ?>);">
							<div class="homeFeatureContainerInner text-center">
								<div class="homeFeatureIconContainer d-flex align-items-center justify-content-center">
									<?php the_field('feature_2_icon'); ?>
								</div>
								<h2><?php the_field('feature_2_title'); ?></h2>
								<?php the_field('feature_2_text'); ?>
								<p><a class="button cta" href="<?php the_field('feature_2_link'); ?>">Read More</a></p>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="homeFeatureContainer d-flex justify-content-center align-items-center" style="background-image: url(<? the_field('feature_3_bg_image'); ?>);">
							<div class="homeFeatureContainerInner text-center">
								<div class="homeFeatureIconContainer d-flex align-items-center justify-content-center">
									<?php the_field('feature_3_icon'); ?>
								</div>
								<h2><?php the_field('feature_3_title'); ?></h2>
								<?php the_field('feature_3_text'); ?>
								<p><a class="button cta" href="<?php the_field('feature_3_link'); ?>">Read More</a></p>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section id="homeNews">
				<div class="container">
					<div class="row">
						<div class="col-sm-8">
							<h2>Recent News at ULP</h2>

							<?php 
							   // the query
							   $the_query = new WP_Query( array(
							      'posts_per_page' => 2,
							   )); 
							?>

							<?php if ( $the_query->have_posts() ) : ?>
							  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

									<div class="homeNewsPostContainer">
										<div class="row">
											<div class="col-3">
												<div class="homeNewsThumbContainer" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
													<a href="<?php the_permalink(); ?>" class="homeNewsThumbLink"></a>
													<div class="homeNewsThumbDate">
														<?php echo get_the_date(); ?>
													</div>
												</div>
											</div>
											<div class="col-9">
												<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
												<p><?php the_excerpt(); ?></p>
											</div>
										</div>
									</div>

							    
							    

							  <?php endwhile; ?>
							  <?php wp_reset_postdata(); ?>

							<?php else : ?>
							  <p><?php __('No News'); ?></p>
							<?php endif; ?>

							<div class="homeNewsPostContainer">
								<div class="row">
									<div class="col-3">
									</div>
									<div class="col-9">
										<p><a href="#" class="button">&copy; View More News</a></p>
									</div>
								</div>
							</div>


						</div>
						<div class="col-sm-4">
							<h2>Our Community</h2>

							<div id="homeTestimonials">

								<div class="homeTestimonialsContainer d-flex justify-content-center align-items-center">
									<div class="homeTestiSlider">

										<div class="homeTestimonialsContainerInner text-center">
											<div class="homeTestimonialsImgWrap">
												<img src="https://placehold.it/100x100" alt="">
											</div>
											<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
											<p class="homeTestAuthor">Jane Weber<br/><span class="homeTestAuthorTitle">CEO, President</span></p>
										</div>

										<div class="homeTestimonialsContainerInner text-center">
											<div class="homeTestimonialsImgWrap">
												<img src="https://placehold.it/100x100" alt="">
											</div>
											<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
											<p class="homeTestAuthor">Jane Weber<br/><span class="homeTestAuthorTitle">CEO, President</span></p>
										</div>

										<div class="homeTestimonialsContainerInner text-center">
											<div class="homeTestimonialsImgWrap">
												<img src="https://placehold.it/100x100" alt="">
											</div>
											<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
											<p class="homeTestAuthor">Jane Weber<br/><span class="homeTestAuthorTitle">CEO, President</span></p>
										</div>

									</div>
								</div>

							</div>

						</div>
					</div>
				</div>
			</section>

			<section id="homeCTA" style="background-image:url(<?php the_field('cta_bg_image'); ?>);">
				<div class="container text-center">
					<img src="https://placehold.it/150x150" alt="">
					<h2><?php the_field('cta_title'); ?></h2>
					<p><a href="#" class="button white">Read More</a> <a href="#" class="button cta">Apply Now</a></p>
				</div>
			</section>

			<section id="homeSponsors" class="container">
				<h2 class="text-center">Sponsors <span>&amp;</span> Affiliations</h2>
				<div class="homeSponsorsSlider">

					<?php if( have_rows('sponsor_list') ): ?>

						<?php while( have_rows('sponsor_list') ): the_row(); 

							// vars
							$image = get_sub_field('sponsor_image');
							$name = get_sub_field('sponsor_name');
							$text = get_sub_field('sponsor_text');

							?>

							<div class="homeSponsorsContainer">

								<div class="row">
									<div class="col-sm-3 d-flex justify-content-center align-items-center">
										<img src="<?php echo $image['url']; ?>" class="mx-auto" alt="<?php echo $image['alt'] ?>" />
									</div>
									<div class="col-sm-9">
										<h4><?php echo $name; ?></h4>
										<?php echo $text; ?>
									</div>
								</div>
							</div>

						<?php endwhile; ?>

					<?php endif; ?><!-- 
					
					<div class="homeSponsorsContainer">
						<div class="row">
							<div class="col-sm-3">
								<img src="https://placehold.it/200x200" alt="" class="mx-auto">
							</div>
							<div class="col-sm-9">
								<h4>Company Name</h4>
								<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
							</div>
						</div>
					</div>
					
					<div class="homeSponsorsContainer">
						<div class="row">
							<div class="col-sm-3">
								<img src="https://placehold.it/200x200" alt="" class="mx-auto">
							</div>
							<div class="col-sm-9">
								<h4>Company Name</h4>
								<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
							</div>
						</div>
					</div>
					
					<div class="homeSponsorsContainer">
						<div class="row">
							<div class="col-sm-3">
								<img src="https://placehold.it/200x200" alt="" class="mx-auto">
							</div>
							<div class="col-sm-9">
								<h4>Company Name</h4>
								<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
							</div>
						</div>
					</div> -->

				</div>
			</section>

			<section id="footMap">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3321.3968078332755!2d-117.85684278496062!3d33.64687878071812!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dcde1587012cb7%3A0x2d277442e1a4333b!2sUCI+Research+Park!5e0!3m2!1sen!2sus!4v1539899408112" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
