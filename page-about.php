<?php
/**
 * Template Name: About
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package University_Lab_Partners
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section id="aboutIntro" class="container">

				<div class="aboutIntroInner">

					<h2>About University Lab Partners</h2>
						<div class="headingSpacer mx-auto"></div>
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

			</section>

			<section id="researchPark" class="container-fluid">
				<div class="row">
					<div class="col-lg-2 d-none d-lg-block">
						
					</div>
					<div class="col-lg-4 col-md-6 p-4">

						<h2><?php the_field('feature_1_title'); ?></h2>
						<div class="headingSpacer"></div>
						<?php the_field('feature_1_text'); ?>

					</div>
					<div class="col-lg-6 col-md-6 aboutIntroSliderContainer">

						<?php 

						$images = get_field('feature_1_gallery');

						if( $images ): ?>
							<div class="aboutIntroSlider">
					        <?php foreach( $images as $image ): ?>
					        	<div class="aboutIntroSliderItem" style="background-image: url(<?php echo $image['sizes']['large']; ?>);">
	                  </div>
					        <?php endforeach; ?>
					    </div>
						<?php endif; ?>

					</div>
				</div>
			</section>

			<section id="ucBaell" class="container">
				<div class="row">
					<div class="col-sm-5">

						<img src="<?php the_field('feature_2_image'); ?>" alt="" class="mx-auto">

					</div>
					<div class="col-sm-7">

						<h2><?php the_field('feature_2_title'); ?></h2>
						<div class="headingSpacer"></div>
						<?php the_field('feature_2_text'); ?>
					</div>
				</div>
			</section>

			<section id="nonProfit" style="background-image:url(<?php the_field('cta_bg_image'); ?>);">
				<div class="nonProfitInner text-center container">
					<h2><?php the_field('cta_title'); ?></h2>
						<div class="headingSpacer mx-auto"></div>
						<?php the_field('cta_text'); ?>
				</div>
			</section>

			<section id="ulpCommunity" class="container">
						<?php 
						   // the query
						   $the_query = new WP_Query( array(
						   		'post_type'			 => 'members',
						   		'category_name'	 => 'advisors',
						      'posts_per_page' => 3,
						   )); 
						?>

						<?php if ( $the_query->have_posts() ) : ?>


						<div class="row p-4">

							<div class="col-md-3">

								<h2>ULP Advisors <span>&</span> Affiliates</h2>
								<div class="headingSpacer"></div>
								<p>University Lab Partners is managed by local industry leaders to ensure successful growth opportunities for students & residents.</p>
								
							</div>

							<div class="col-md-9">
								<div class="container-fluid">

									<div class="row">

									  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

											<div class="col-sm-4">
												<a class="memberLink" href="<?php the_permalink(); ?>">
													<div class="commMemberContainer">
														<div class="commMemberImgWrap" style="background-image:url(<?php the_post_thumbnail_url('large'); ?>);">
														</div>
														<h4><?php the_title(); ?></h4>
														<p class="memberTitle"><?php the_field('member_team'); ?></p>
													</div>
												</a>
											</div>

									  <?php endwhile; ?>

						  		</div>
								</div>
							</div>

						  <?php wp_reset_postdata(); ?>

						<?php else : ?>
						  <p class="text-center"><?php __('No Members'); ?></p>
						<?php endif; ?>

				</div>
						<?php 
						   // the query
						   $the_query = new WP_Query( array(
						   		'post_type'			 => 'members',
						   		'category_name'	 => 'residents',
						      'posts_per_page' => 4,
						   )); 
						?>

						<?php if ( $the_query->have_posts() ) : ?>

				<div class="row p-4">

						<div class="col-md-3">

							<h2>ULP Residents</h2>
							<div class="headingSpacer"></div>
							<p>Our laboratory is comprised of leading technological and academic talent in Southern California fostering a community of collaboration and growth.</p>
							
						</div>

						<div class="col-md-9">
							<div class="container-fluid">

								<div class="row">

								  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

										<div class="col-sm-3">
											<a class="memberLink" href="<?php the_permalink(); ?>">
												<div class="commMemberContainer">
													<div class="commMemberImgWrap" style="background-image:url(<?php the_post_thumbnail_url('large'); ?>);">
													</div>
													<h4><?php the_title(); ?></h4>
													<p class="memberTitle">NZXT Biomedical</p>
												</div>
											</a>
										</div>

								  <?php endwhile; ?>

							  </div>

							</div>
						</div>

				</div>

					  <?php wp_reset_postdata(); ?>

						<?php else : ?>
						  <p class="text-center"><?php __('No Members'); ?></p>
						<?php endif; ?>

			</section>


			<section id="footMap">
				<div id="map-canvas"></div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
