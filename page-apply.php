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
								<img src="<?php echo site_url(); ?>/wp-content/themes/ulp/img/add-service-img.jpg" alt="">
								<h3>Step One</h3>
								<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="applyStepContainer">
								<img src="<?php echo site_url(); ?>/wp-content/themes/ulp/img/add-service-img.jpg" alt="">
								<h3>Step Two</h3>
								<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="applyStepContainer">
								<img src="<?php echo site_url(); ?>/wp-content/themes/ulp/img/add-service-img.jpg" alt="">
								<h3>Step Three</h3>
								<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="applyStepContainer">
								<img src="<?php echo site_url(); ?>/wp-content/themes/ulp/img/add-service-img.jpg" alt="">
								<h3>Step Four</h3>
								<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
							</div>
						</div>
					</div>

				</div>

			</section>

			<section id="applyForm">
				<div class="container">
					<h2 class="text-center">Apply for Membership with ULP</h2>

					<div class="applyFormContainer">
						<h3>Primary Contact Information</h3>
						<hr>
						<div class="row">
							<div class="col-sm-6">
								<input type="text" placeholder="First Name">
							</div>
							<div class="col-sm-6">
								<input type="text" placeholder="Last Name">
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<input type="tel" placeholder="Phone">
							</div>
							<div class="col-sm-6">
								<input type="email" placeholder="Email">
							</div>
						</div>
						<input type="text" placeholder="Business Name">
						<input type="text" placeholder="Business Address">
					</div>

					<div class="applyFormContainer inactive">
						<h3>Business Information</h3>
						<hr>
						<input type="text" placeholder="Business Purpose">
						<input type="text" placeholder="Problem Statement">
						<input type="text" placeholder="Solution Statement">
						<input type="text" placeholder="Revenue Model (if available)">
						<input type="text" placeholder="Route to Market">
						<input type="text" placeholder="Current Business Status">
					</div>

					<div class="applyFormContainer inactive">
						<h3>Application Requirements</h3>
						<hr>
						<div class="row">
							<div class="col-sm-7">
								<p>Funding Received (<a href="">See Requirements</a>)</p>
							</div>
							<div class="col-sm-5">
								<input type="checkbox" checked="checked">
							</div>
						</div>
						<div class="row">
							<div class="col-sm-7">
								<p>Pitch Deck (<a href="">Download Sample</a>)</p>
							</div>
							<div class="col-sm-5">
								<input type="file">
							</div>
						</div>
						<div class="row">
							<div class="col-sm-7">
								<p>Pitch Video (<a href="">Download Sample</a>)</a></p>
							</div>
							<div class="col-sm-5">
								<input type="file">
							</div>
						</div>
					</div>

				</div>
			</section>

			<section id="applySeeMore">
				<div class="applySeeMoreInner text-center container">
					<h2>Want to see more before making a decision?</h2>
						<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
						<p><a href="" class="button cta">Let's give you a Tour</a></p>
				</div>
			</section>

			<section id="footMap">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3321.3968078332755!2d-117.85684278496062!3d33.64687878071812!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dcde1587012cb7%3A0x2d277442e1a4333b!2sUCI+Research+Park!5e0!3m2!1sen!2sus!4v1539899408112" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
