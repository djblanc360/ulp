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

			<section id="researchPark" class="container">
				<div class="row">
					<div class="col-sm-7">

						<h2><?php the_field('feature_1_title'); ?></h2>
						<?php the_field('feature_1_text'); ?>

					</div>
					<div class="col-sm-5">

						<img src="<?php the_field('feature_1_image'); ?>" alt="" class="mx-auto">

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
						<?php the_field('feature_2_text'); ?>
					</div>
				</div>
			</section>

			<section id="nonProfit" style="background-image:url(<?php the_field('cta_bg_image'); ?>);">
				<div class="nonProfitInner text-center container">
					<h2><?php the_field('cta_title'); ?></h2>
						<?php the_field('cta_text'); ?>
				</div>
			</section>

			<section id="ulpCommunity" class="container text-center">
				<h2>The ULP Community</h2>


				<?php 
				   // the query
				   $the_query = new WP_Query( array(
				   		'post_type'			 => 'members',
				      'posts_per_page' => -1,
				   )); 
				?>

				<?php if ( $the_query->have_posts() ) : ?>

					<div class="row">

					  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

							<div class="col-sm-3">
								<a class="memberLink" href="<?php the_permalink(); ?>">
									<div class="commMemberContainer">
										<div class="commMemberImgWrap" style="background-image:url(<?php the_post_thumbnail_url('large'); ?>);">
										</div>
										<h4><?php the_title(); ?></h4>
										<p class="memberTitle">Co-Founder <span>&amp;</span> CEO</p>
									</div>
								</a>
							</div>

					  <?php endwhile; ?>

				  </div>

				  <?php wp_reset_postdata(); ?>

				<?php else : ?>
				  <p class="text-center"><?php __('No Members'); ?></p>
				<?php endif; ?>
				<!-- <div class="ulpCommSlider">

					<div>
						<div class="row">
							<div class="col-sm-3">
								<div class="commMemberContainer">
									<div class="commMemberImgWrap">
										<img src="<?php echo site_url(); ?>/wp-content/themes/ulp/img/woman-profile.jpg" alt="">
									</div>
									<h4>Jane Doe</h4>
									<p class="memberTitle">Co-Founder <span>&amp;</span> CEO</p>
									<p><i class="fa fa-envelope"></i></p>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="commMemberContainer">
									<div class="commMemberImgWrap">
										<img src="<?php echo site_url(); ?>/wp-content/themes/ulp/img/woman-profile.jpg" alt="">
									</div>
									<h4>Jane Doe</h4>
									<p class="memberTitle">Co-Founder <span>&amp;</span> CEO</p>
									<p><i class="fa fa-envelope"></i></p>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="commMemberContainer">
									<div class="commMemberImgWrap">
										<img src="<?php echo site_url(); ?>/wp-content/themes/ulp/img/woman-profile.jpg" alt="">
									</div>
									<h4>Jane Doe</h4>
									<p class="memberTitle">Co-Founder <span>&amp;</span> CEO</p>
									<p><i class="fa fa-envelope"></i></p>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="commMemberContainer">
									<div class="commMemberImgWrap">
										<img src="<?php echo site_url(); ?>/wp-content/themes/ulp/img/woman-profile.jpg" alt="">
									</div>
									<h4>Jane Doe</h4>
									<p class="memberTitle">Co-Founder <span>&amp;</span> CEO</p>
									<p><i class="fa fa-envelope"></i></p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-3">
								<div class="commMemberContainer">
									<div class="commMemberImgWrap">
										<img src="<?php echo site_url(); ?>/wp-content/themes/ulp/img/woman-profile.jpg" alt="">
									</div>
									<h4>Jane Doe</h4>
									<p class="memberTitle">Co-Founder <span>&amp;</span> CEO</p>
									<p><i class="fa fa-envelope"></i></p>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="commMemberContainer">
									<div class="commMemberImgWrap">
										<img src="<?php echo site_url(); ?>/wp-content/themes/ulp/img/woman-profile.jpg" alt="">
									</div>
									<h4>Jane Doe</h4>
									<p class="memberTitle">Co-Founder <span>&amp;</span> CEO</p>
									<p><i class="fa fa-envelope"></i></p>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="commMemberContainer">
									<div class="commMemberImgWrap">
										<img src="<?php echo site_url(); ?>/wp-content/themes/ulp/img/woman-profile.jpg" alt="">
									</div>
									<h4>Jane Doe</h4>
									<p class="memberTitle">Co-Founder <span>&amp;</span> CEO</p>
									<p><i class="fa fa-envelope"></i></p>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="commMemberContainer">
									<div class="commMemberImgWrap">
										<img src="<?php echo site_url(); ?>/wp-content/themes/ulp/img/woman-profile.jpg" alt="">
									</div>
									<h4>Jane Doe</h4>
									<p class="memberTitle">Co-Founder <span>&amp;</span> CEO</p>
									<p><i class="fa fa-envelope"></i></p>
								</div>
							</div>
						</div>
					</div>

					<div>
						<div class="row">
							<div class="col-sm-3">
								<div class="commMemberContainer">
									<div class="commMemberImgWrap">
										<img src="<?php echo site_url(); ?>/wp-content/themes/ulp/img/woman-profile.jpg" alt="">
									</div>
									<h4>Jane Doe</h4>
									<p class="memberTitle">Co-Founder <span>&amp;</span> CEO</p>
									<p><i class="fa fa-envelope"></i></p>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="commMemberContainer">
									<div class="commMemberImgWrap">
										<img src="<?php echo site_url(); ?>/wp-content/themes/ulp/img/woman-profile.jpg" alt="">
									</div>
									<h4>Jane Doe</h4>
									<p class="memberTitle">Co-Founder <span>&amp;</span> CEO</p>
									<p><i class="fa fa-envelope"></i></p>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="commMemberContainer">
									<div class="commMemberImgWrap">
										<img src="<?php echo site_url(); ?>/wp-content/themes/ulp/img/woman-profile.jpg" alt="">
									</div>
									<h4>Jane Doe</h4>
									<p class="memberTitle">Co-Founder <span>&amp;</span> CEO</p>
									<p><i class="fa fa-envelope"></i></p>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="commMemberContainer">
									<div class="commMemberImgWrap">
										<img src="<?php echo site_url(); ?>/wp-content/themes/ulp/img/woman-profile.jpg" alt="">
									</div>
									<h4>Jane Doe</h4>
									<p class="memberTitle">Co-Founder <span>&amp;</span> CEO</p>
									<p><i class="fa fa-envelope"></i></p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-3">
								<div class="commMemberContainer">
									<div class="commMemberImgWrap">
										<img src="<?php echo site_url(); ?>/wp-content/themes/ulp/img/woman-profile.jpg" alt="">
									</div>
									<h4>Jane Doe</h4>
									<p class="memberTitle">Co-Founder <span>&amp;</span> CEO</p>
									<p><i class="fa fa-envelope"></i></p>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="commMemberContainer">
									<div class="commMemberImgWrap">
										<img src="<?php echo site_url(); ?>/wp-content/themes/ulp/img/woman-profile.jpg" alt="">
									</div>
									<h4>Jane Doe</h4>
									<p class="memberTitle">Co-Founder <span>&amp;</span> CEO</p>
									<p><i class="fa fa-envelope"></i></p>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="commMemberContainer">
									<div class="commMemberImgWrap">
										<img src="<?php echo site_url(); ?>/wp-content/themes/ulp/img/woman-profile.jpg" alt="">
									</div>
									<h4>Jane Doe</h4>
									<p class="memberTitle">Co-Founder <span>&amp;</span> CEO</p>
									<p><i class="fa fa-envelope"></i></p>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="commMemberContainer">
									<div class="commMemberImgWrap">
										<img src="<?php echo site_url(); ?>/wp-content/themes/ulp/img/woman-profile.jpg" alt="">
									</div>
									<h4>Jane Doe</h4>
									<p class="memberTitle">Co-Founder <span>&amp;</span> CEO</p>
									<p><i class="fa fa-envelope"></i></p>
								</div>
							</div>
						</div>
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
