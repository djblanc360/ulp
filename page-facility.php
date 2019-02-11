<?php
/**
 * Template Name: Facility
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package University_Lab_Partners
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section id="facilityIntro" class="container">

				<div class="facilityIntroInner">
					
					<h2>Unprecedented Access at an Affordable Price</h2>
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

					<p><a href="#facilityFeature" class="button cta mx-2">In Suite Availability</a> <a href="#addServices" class="button cta mx-2"><?php the_field('shared_equipment_title'); ?></a> <a href="#uniServices" class="button cta mx-2"><?php the_field('shared_amenities_title'); ?></a></p>

				</div>

			</section>

			<section id="facilityFeature" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2018/11/ulp-facility-bg.jpg);">
				<div class="">
					<div class="facilityItemNavContainer text-center">
						<div class="facilityItemNav"><p><i class="fas fa-chair"></i><br/><?php the_field('space_1_title'); ?></p></div>
						<div class="facilityItemNav"><p><i class="fas fa-door-open"></i><br/><?php the_field('space_2_title'); ?></p></div>
						<div class="facilityItemNav"><p><i class="far fa-building"></i><br/><?php the_field('space_3_title'); ?></p></div>
						<div class="facilityItemNav"><p><i class="fas fa-desktop"></i><br/><?php the_field('space_4_title'); ?></p></div>
					</div>
					<div class="facilityItemContainerSlider">

						<div>
							<div class="facilityItemContainer pr-4">
								<div class="row">
									<div class="col-sm-6">
										<div class="facilityItemImgContainer">
											<div class="facilityItemSuitable">
												<p>Suitable for <?php the_field('space_1_occupancy'); ?></p>
											</div>
											<?php 

											$images = get_field('space_1_gallery');

											if( $images ): ?>
												<div class="facilityItemGallery">
										        <?php foreach( $images as $image ): ?>
										        	<div class="facilityItemGalleryImg" style="background-image: url(<?php echo $image['sizes']['large']; ?>);">
						                  </div>
										        <?php endforeach; ?>
										    </div>
											<?php endif; ?>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="facilityItemContent py-4">
											<h2><?php the_field('space_1_title'); ?></h2>
											<?php the_field('space_1_text'); ?>
											<div class="amenitiesContainer">
												<?php if( have_rows('space_1_amenities') ): ?>

													<ul class="list-unstyled amenity-list">

													<?php while( have_rows('space_1_amenities') ): the_row(); 

														// vars
														$icon = get_sub_field('space_1_amenity_icon');
														$text = get_sub_field('space_1_amenity_text');

														?>

														<li class="amenityItem">

															<?php echo $icon; ?> <?php echo $text; ?>

														</li>

													<?php endwhile; ?>

													</ul>

												<?php endif; ?>
											</div>
											<div class="amenitiesMoreContainer">
												<div class="row">
													<div class="col-sm-6">
															<p>Seats</p>
															<p>Size</p>
													</div>
													<div class="col-sm-6">
														<div class="text-sm-right">
															<p><?php the_field('space_1_occupancy'); ?></p>
															<p><?php the_field('space_1_sq_ft'); ?></p>
														</div>
													</div>
												</div>
												<hr>
												<div class="row">
													<div class="col-sm-6">
															<p>Price</p>
													</div>
													<div class="col-sm-6">
														<div class="text-sm-right">
															<p><?php the_field('space_1_cost'); ?></p>
														</div>
													</div>
												</div>
											</div>
											<p class="applyNowContainer">
												<a href="" class="button cta">Apply Now</a> <a href="<?php echo site_url(); ?>/contact/" class="button">Contact Us</a>
											</p>
										</div>	
									</div>
								</div>
							</div>
						</div>

						<div>
							<div class="facilityItemContainer pr-4">
								<div class="row">
									<div class="col-sm-6">
										<div class="facilityItemImgContainer">
											<div class="facilityItemSuitable">
												<p>Suitable for <?php the_field('space_2_occupancy'); ?></p>
											</div>
											<?php 

											$images = get_field('space_2_gallery');

											if( $images ): ?>
												<div class="facilityItemGallery">
										        <?php foreach( $images as $image ): ?>
										        	<div class="facilityItemGalleryImg" style="background-image: url(<?php echo $image['sizes']['large']; ?>);">
						                  </div>
										        <?php endforeach; ?>
										    </div>
											<?php endif; ?>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="facilityItemContent py-4">
											<h2><?php the_field('space_2_title'); ?></h2>
											<?php the_field('space_2_text'); ?>
											<div class="amenitiesContainer">
												<?php if( have_rows('space_2_amenities') ): ?>

													<ul class="list-unstyled amenity-list">

													<?php while( have_rows('space_2_amenities') ): the_row(); 

														// vars
														$icon = get_sub_field('space_2_amenity_icon');
														$text = get_sub_field('space_2_amenity_text');

														?>

														<li class="amenityItem">

															<?php echo $icon; ?> <?php echo $text; ?>

														</li>

													<?php endwhile; ?>

													</ul>

												<?php endif; ?>
											</div>
											<div class="amenitiesMoreContainer">
												<div class="row">
													<div class="col-sm-6">
															<p>Seats</p>
															<p>Size</p>
													</div>
													<div class="col-sm-6">
														<div class="text-sm-right">
															<p><?php the_field('space_2_occupancy'); ?></p>
															<p><?php the_field('space_2_sq_ft'); ?></p>
														</div>
													</div>
												</div>
												<hr>
												<div class="row">
													<div class="col-sm-6">
															<p>Price</p>
													</div>
													<div class="col-sm-6">
														<div class="text-sm-right">
															<p><?php the_field('space_2_cost'); ?></p>
														</div>
													</div>
												</div>
											</div>
											<p class="applyNowContainer">
												<a href="" class="button cta">Apply Now</a> <a href="<?php echo site_url(); ?>/contact/" class="button">Contact Us</a>
										</div>	
									</div>
								</div>
							</div>
						</div>

						<div>
							<div class="facilityItemContainer pr-4">
								<div class="row">
									<div class="col-sm-6">
										<div class="facilityItemImgContainer">
											<div class="facilityItemSuitable">
												<p>Suitable for <?php the_field('space_3_occupancy'); ?></p>
											</div>
											<?php 

											$images = get_field('space_3_gallery');

											if( $images ): ?>
												<div class="facilityItemGallery">
										        <?php foreach( $images as $image ): ?>
										        	<div class="facilityItemGalleryImg" style="background-image: url(<?php echo $image['sizes']['large']; ?>);">
						                  </div>
										        <?php endforeach; ?>
										    </div>
											<?php endif; ?>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="facilityItemContent py-4">
											<h2><?php the_field('space_3_title'); ?></h2>
											<?php the_field('space_3_text'); ?>
											<div class="amenitiesContainer">
												<?php if( have_rows('space_3_amenities') ): ?>

													<ul class="list-unstyled amenity-list">

													<?php while( have_rows('space_3_amenities') ): the_row(); 

														// vars
														$icon = get_sub_field('space_3_amenity_icon');
														$text = get_sub_field('space_3_amenity_text');

														?>

														<li class="amenityItem">

															<?php echo $icon; ?> <?php echo $text; ?>

														</li>

													<?php endwhile; ?>

													</ul>

												<?php endif; ?>
											</div>
											<div class="amenitiesMoreContainer">
												<div class="row">
													<div class="col-sm-6">
															<p>Seats</p>
															<p>Size</p>
													</div>
													<div class="col-sm-6">
														<div class="text-sm-right">
															<p><?php the_field('space_3_occupancy'); ?></p>
															<p><?php the_field('space_3_sq_ft'); ?></p>
														</div>
													</div>
												</div>
												<hr>
												<div class="row">
													<div class="col-sm-6">
															<p>Price</p>
													</div>
													<div class="col-sm-6">
														<div class="text-sm-right">
															<p><?php the_field('space_3_cost'); ?></p>
														</div>
													</div>
												</div>
											</div>
											<p class="applyNowContainer">
												<a href="" class="button cta">Apply Now</a> <a href="<?php echo site_url(); ?>/contact/" class="button">Contact Us</a>
										</div>	
									</div>
								</div>
							</div>
						</div>

						<div>
							<div class="facilityItemContainer pr-4">
								<div class="row">
									<div class="col-sm-6">
										<div class="facilityItemImgContainer">
											<div class="facilityItemSuitable">
												<p>Suitable for <?php the_field('space_4_occupancy'); ?></p>
											</div>
											<?php 

											$images = get_field('space_4_gallery');

											if( $images ): ?>
												<div class="facilityItemGallery">
										        <?php foreach( $images as $image ): ?>
										        	<div class="facilityItemGalleryImg" style="background-image: url(<?php echo $image['sizes']['large']; ?>);">
						                  </div>
										        <?php endforeach; ?>
										    </div>
											<?php endif; ?>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="facilityItemContent py-4">
											<h2><?php the_field('space_4_title'); ?></h2>
											<?php the_field('space_4_text'); ?>
											<div class="amenitiesContainer">
												<?php if( have_rows('space_4_amenities') ): ?>

													<ul class="list-unstyled amenity-list">

													<?php while( have_rows('space_4_amenities') ): the_row(); 

														// vars
														$icon = get_sub_field('space_4_amenity_icon');
														$text = get_sub_field('space_4_amenity_text');

														?>

														<li class="amenityItem">

															<?php echo $icon; ?> <?php echo $text; ?>

														</li>

													<?php endwhile; ?>

													</ul>

												<?php endif; ?>
											</div>
											<div class="amenitiesMoreContainer">
												<div class="row">
													<div class="col-sm-6">
															<p>Seats</p>
															<p>Size</p>
													</div>
													<div class="col-sm-6">
														<div class="text-sm-right">
															<p><?php the_field('space_4_occupancy'); ?></p>
															<p><?php the_field('space_4_sq_ft'); ?></p>
														</div>
													</div>
												</div>
												<hr>
												<div class="row">
													<div class="col-sm-6">
															<p>Price</p>
													</div>
													<div class="col-sm-6">
														<div class="text-sm-right">
															<p><?php the_field('space_4_cost'); ?></p>
														</div>
													</div>
												</div>
											</div>
											<p class="applyNowContainer">
												<a href="" class="button cta">Apply Now</a> <a href="<?php echo site_url(); ?>/contact/" class="button">Contact Us</a>
										</div>	
									</div>
								</div>
							</div>
						</div>
					
					</div>

				</div>
			</section>

			<?php if( have_rows('service_offered') ): ?>
				<section id="addServices" class="container text-center">
					<h2><?php the_field('shared_equipment_title'); ?></h2>
					<div class="headingSpacer mx-auto"></div>
					<?php the_field('shared_equipment_description'); ?>
					<div class="addServicesSlider mt-5">

					<?php while( have_rows('service_offered') ): the_row(); 

						// vars
						$image = get_sub_field('service_image');
						$title = get_sub_field('service_title');
						$text = get_sub_field('service_text');

						?>

						<div class="addServicesItem">

							<?php if( $image ): ?>
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
							<?php endif; ?>

							<?php if( $title ): ?>
								<h3><?php echo $title; ?></h3>
							<?php endif; ?>
<!-- 
							<?php if( $text ): ?>
								<p><?php echo $text; ?></p>
							<?php endif; ?>
 -->
						</div>

					<?php endwhile; ?>

					</div>
				
				</section>

			<?php endif; ?>

			

			<section id="facilityCTA"">
				<div class="container text-center">
					<div class="row">
						<div class="col-sm-9 d-flex align-items-center">
							<h2><?php the_field('cta_title'); ?></h2>
						</div>
						<div class="col-sm-3 d-flex justify-content-center align-items-center">
							<p><a href="<?php echo site_url(); ?>/wp-content/uploads/2018/11/UCI_facilities.pdf" class="button cta" target="_blank">Learn More</a></p>
						</div>
					</div>
				</div>
			</section>

			<?php if( have_rows('university_offered') ): ?>

				<section id="uniServices" class="text-center">
					<div class="container">
						<h2><?php the_field('shared_amenities_title'); ?></h2>
						<div class="headingSpacer mx-auto"></div>
						<?php the_field('shared_amenities_description'); ?>
						<div class="addServicesSlider mt-5">

						<?php while( have_rows('university_offered') ): the_row(); 

							// vars
							$image = get_sub_field('university_image');
							$title = get_sub_field('university_title');
							$text = get_sub_field('university_text');

							?>

							<div class="addServicesItem">

								<?php if( $image ): ?>
									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
								<?php endif; ?>

								<?php if( $title ): ?>
									<h3><?php echo $title; ?></h3>
								<?php endif; ?>
	<!-- 
								<?php if( $text ): ?>
									<p><?php echo $text; ?></p>
								<?php endif; ?>
	 -->
							</div>

						<?php endwhile; ?>

						</div>
					</div>
				
				</section>

			<?php endif; ?>

			

			<section id="footMap">
				<div id="map-canvas"></div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
