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

			<div class="container memberContainer">
				<p id="singleCustomBreadcrumbs"><a href="<?php the_permalink(); ?>/about/">About</a> » <?php the_title(); ?></p>
				<hr>
				<div class="row">
					<div class="col-sm-6">
						<?php the_post_thumbnail(); ?>
					</div>
					<div class="col-sm-6">
						<h1 class="memberName"><?php the_title(); ?></h1>
						<div class="memberInfoList">
							<ul class="list-unstyled">
								<li>
									<div class="row">
										<div class="col-sm-3">
											<span>Title</span>
										</div>
										<div class="col-sm-9">
									 		Co-Founder & COO
										</div>
									</div>
								</li>
								<li>
									<div class="row">
										<div class="col-sm-3">
											<span>Education</span>
										</div>
										<div class="col-sm-9">
									 		University of California, Irvine
										</div>
									</div>
								</li>
								<li>
									<div class="row">
										<div class="col-sm-3">
											<span>Team</span>
										</div>
										<div class="col-sm-9">
									 		Boston Dynamics
										</div>
									</div>
								</li>
								<li>
									<div class="row">
										<div class="col-sm-3">
											<span>Focus</span>
										</div>
										<div class="col-sm-9">
									 		Medical Genetics
										</div>
									</div>
								</li>
								<li>
									<div class="row">
										<div class="col-sm-3">
											<span>Website</span>
										</div>
										<div class="col-sm-9">
									 		<a href="https://www.bostondynamics.com" target="_blank">https://www.bostondynamics.com</a>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<h2 class="singleCustomHeader">Member Bio</h2>
						<?php
						while ( have_posts() ) :
							the_post();

							get_template_part( 'template-parts/content', 'member' );

							the_post_navigation();

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
						?>

					</div>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
