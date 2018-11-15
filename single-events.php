<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package University_Lab_Partners
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div id="eventHeader" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
				<div class="container eventHeaderText">
					<h1 class="eventTitle"><?php the_title(); ?></h1>
					<p><?php echo get_the_date(); ?></p>
					<?php if( get_field('event_register_link') ): ?>
						<p class="bookNow"><a href="<?php the_field('event_register_link'); ?>" target="_blank" class="button cta">Register Now</a></p>
					<?php endif; ?>
				</div>
				<div class="cover"></div>
			</div>
			
			<div class="container memberContainer">
				<p id="singleCustomBreadcrumbs"><a href="<?php the_permalink(); ?>/our-events/">Our Events</a> » <?php the_title(); ?></p>
				<hr>
				<div class="row">
					<div class="col-sm-8">

						<h2 class="singleCustomHeader">Event Description</h2>
						<?php
						while ( have_posts() ) :
							the_post();

							get_template_part( 'template-parts/content', 'event' );

							the_post_navigation();

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
						?>
						
					</div>
					<div class="col-sm-4">

						<?php if( get_field('event_gallery') ): ?>

							<div class="eventItemImgContainer">
								<?php 

								$images = get_field('event_gallery');

								if( $images ): ?>
									<div class="eventItemGallery">
							        <?php foreach( $images as $image ): ?>
							        	<div class="eventItemGalleryImg" style="background-image: url(<?php echo $image['sizes']['large']; ?>);">
			                  </div>
							        <?php endforeach; ?>
							    </div>
								<?php endif; ?>
								<?php 

								$images = get_field('event_gallery');

								if( $images ): ?>
									<div class="eventItemGalleryNav">
							        <?php foreach( $images as $image ): ?>
							        	<img src="<?php echo $image['sizes']['thumbnail']; ?>);">
							        <?php endforeach; ?>
							    </div>
								<?php endif; ?>
							</div>
						
						<?php endif; ?>

						<div class="eventQuickInfo">
							<div class="eventQuickInfoInner">
								<?php if( have_rows('event_information') ): ?>

									<ul class="eventInfoList">

									<?php while( have_rows('event_information') ): the_row(); 

										// vars
										$icon = get_sub_field('icon');
										$content = get_sub_field('event_info_item');

										?>

										<li class="eventInfoItem">

											<?php if( $icon ): ?>
												<?php echo $icon; ?>
											<?php endif; ?>

										    <?php echo $content; ?>

										</li>

									<?php endwhile; ?>

									</ul>

								<?php endif; ?>
							</div>
						</div>

						<div class="eventMap">
							<?php the_field('event_map'); ?>
						</div>

					</div>
				</div>
				
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
