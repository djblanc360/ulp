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
						<div class="headingSpacer"></div>
						
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
						<div class="col-sm-7">
							<div class="headerContainer">
								<h2>Recent News</h2>
								<div class="headingSpacer"></div>
								<i class="fas fa-thumbtack"></i>
							</div>

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
											<div class="col-md-4">
												<div class="homeNewsThumbContainer" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
													<a href="<?php the_permalink(); ?>" class="homeNewsThumbLink"></a>
													<div class="homeNewsThumbDate">
														<?php echo get_the_date(); ?>
													</div>
												</div>
											</div>
											<div class="col-md-8">
												<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				                <p class="postMeta">
				                    <?php $postLikes = wp_ulike_get_post_likes(get_the_ID());?>
				                     <i class="far fa-calendar-alt"></i> <?php echo get_the_date('M d, Y'); ?> | <i class="far fa-comments"></i> <?php echo get_comments_number(); ?> | <i class="far fa-heart"></i> <?php if($postLikes) { echo $postLikes ; } else { echo '<span>0</span>'; } ?>
				                </p>
				                <?php the_excerpt(); ?>
											</div>
										</div>
									</div>

							    
							    

							  <?php endwhile; ?>
							  <?php wp_reset_postdata(); ?>

							<?php else : ?>
							  <p><?php __('No News'); ?></p>
							<?php endif; ?>
							
							<p class="text-center"><a href="<?php echo site_url(); ?>/news/" class="button">Read More</a></p>

						</div>
						<div class="col-sm-5">
							<div class="headerContainer">
								<h2>Recent Events</h2>
								<div class="headingSpacer"></div>
								<i class="far fa-calendar-alt"></i>
							</div>

							<div class="upFeed">

								<?php 
								   // the query
								   $the_query = new WP_Query( array(
								   		'post_type'			 => 'events',
								      'posts_per_page' => 3,
								   )); 
								?>

								<?php if ( $the_query->have_posts() ) : ?>
								  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

								    <div class="upFeedItem">
											<a href="<?php the_permalink(); ?>">
												<div class="pastEventContainer" style="background-image:url(<?php echo the_post_thumbnail_url('large'); ?>);">
													<div class="pastEventImageContainer">
														<div class="pastEventTeaser">
															<h3><?php the_title(); ?></h3>
															<p class="pastEventDate"><?php echo get_the_date(); ?></p>
														</div>
													</div>
												</div>
											</a>
											</div>

								  <?php endwhile; ?>
								  <?php wp_reset_postdata(); ?>

								<?php else : ?>
								  <p><?php __('No News'); ?></p>
								<?php endif; ?>

							</div>
							
							<p class="text-center"><a href="<?php echo site_url(); ?>/our-events/" class="button">View Events</a></p>

						</div>
					</div>
				</div>
			</section>

			<section id="homeCTA" style="background-image:url();">
				<div class="container text-center">
					<div class="row">
						<div class="col-sm-9 d-flex align-items-center">
							<h2><?php the_field('cta_title'); ?></h2>
						</div>
						<div class="col-sm-3 d-flex justify-content-center align-items-center">
							<p><a href="<?php echo site_url(); ?>/apply-now/" class="button cta">Apply Now</a></p>
						</div>
					</div>
				</div>
			</section>

			<!-- <section id="homeStats" class="container">
				
					<div class="facilityNumContainer">
						<div class="row">
							<div class="col-sm-3">
								<div class="facilityNumInner">
									<div class="facilityNumBig"><?php the_field('stat_1'); ?></div>
									<p><?php the_field('stat_description_1'); ?></p>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="facilityNumInner">
									<div class="facilityNumBig"><?php the_field('stat_2'); ?></div>
									<p><?php the_field('stat_description_2'); ?></p>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="facilityNumInner">
									<div class="facilityNumBig"><?php the_field('stat_3'); ?></div>
									<p><?php the_field('stat_description_3'); ?></p>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="facilityNumInner">
									<div class="facilityNumBig"><?php the_field('stat_4'); ?></div>
									<p><?php the_field('stat_description_4'); ?></p>
								</div>
							</div>
						</div>
					</div>

			</section> -->

			<section id="homeSponsors" class="container">
				<h2 class="text-center">Partners <span>&amp;</span> Affiliations</h2>
				<div class="headingSpacer mx-auto"></div>
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
				<div id="map-canvas"></div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
