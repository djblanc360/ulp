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

					<p><a href="" class="button cta">Apply for Membership</a></p>

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
							<div class="facilityItemContainer">
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
										<div class="facilityItemContent">
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
										</div>	
									</div>
								</div>
								<p class="text-center applyNowContainer">
									<a href="" class="button cta">Apply Now</a> <a href="" class="button">Schedule a Tour</a>
								</p>
							</div>
						</div>

						<div>
							<div class="facilityItemContainer">
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
										<div class="facilityItemContent">
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
										</div>	
									</div>
								</div>
								<p class="text-center applyNowContainer">
									<a href="" class="button cta">Apply Now</a> <a href="" class="button">Schedule a Tour</a>
								</p>
							</div>
						</div>

						<div>
							<div class="facilityItemContainer">
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
										<div class="facilityItemContent">
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
										</div>	
									</div>
								</div>
								<p class="text-center applyNowContainer">
									<a href="" class="button cta">Apply Now</a> <a href="" class="button">Schedule a Tour</a>
								</p>
							</div>
						</div>

						<div>
							<div class="facilityItemContainer">
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
										<div class="facilityItemContent">
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
										</div>	
									</div>
								</div>
								<p class="text-center applyNowContainer">
									<a href="" class="button cta">Apply Now</a> <a href="" class="button">Schedule a Tour</a>
								</p>
							</div>
						</div>
					
					</div>

				</div>
			</section>

			<section id="addServices" class="container text-center">
				<h2>Shared Resources</h2>
				<?php if( have_rows('service_offered') ): ?>

					<div class="addServicesSlider">

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

							<?php if( $text ): ?>
								<p><?php echo $text; ?></p>
							<?php endif; ?>

						</div>

					<?php endwhile; ?>

					</div>

				<?php endif; ?><!-- 
				<div class="row">
					<div class="col-sm-3">
						<img src="<?php echo site_url(); ?>/wp-content/themes/ulp/img/add-service-img.jpg" alt="">
						<h3>Private Receptionist</h3>
						<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
					</div>
					<div class="col-sm-3">
						<img src="<?php echo site_url(); ?>/wp-content/themes/ulp/img/add-service-img.jpg" alt="">
						<h3>Conference Rooms</h3>
						<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
					</div>
					<div class="col-sm-3">
						<img src="<?php echo site_url(); ?>/wp-content/themes/ulp/img/add-service-img.jpg" alt="">
						<h3>Shared Equipment</h3>
						<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
					</div>
					<div class="col-sm-3">
						<img src="<?php echo site_url(); ?>/wp-content/themes/ulp/img/add-service-img.jpg" alt="">
						<h3>Break Rooms</h3>
						<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-3">
						<img src="<?php echo site_url(); ?>/wp-content/themes/ulp/img/add-service-img.jpg" alt="">
						<h3>Private Receptionist</h3>
						<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
					</div>
					<div class="col-sm-3">
						<img src="<?php echo site_url(); ?>/wp-content/themes/ulp/img/add-service-img.jpg" alt="">
						<h3>Conference Rooms</h3>
						<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
					</div>
					<div class="col-sm-3">
						<img src="<?php echo site_url(); ?>/wp-content/themes/ulp/img/add-service-img.jpg" alt="">
						<h3>Shared Equipment</h3>
						<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
					</div>
					<div class="col-sm-3">
						<img src="<?php echo site_url(); ?>/wp-content/themes/ulp/img/add-service-img.jpg" alt="">
						<h3>Break Rooms</h3>
						<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
					</div>
				</div> -->
			</section>

			<section id="footMap">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3321.3968078332755!2d-117.85684278496062!3d33.64687878071812!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dcde1587012cb7%3A0x2d277442e1a4333b!2sUCI+Research+Park!5e0!3m2!1sen!2sus!4v1539899408112" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
